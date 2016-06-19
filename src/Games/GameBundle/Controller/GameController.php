<?php

namespace Games\GameBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Games\GameBundle\Entity\Game;
use Symfony\Component\HttpKernel\Exception\HttpException;
use HTTP_Request2;

/**
 * Game controller.
 *
 * @Route("/game")
 */
class GameController extends Controller
{
    /**
     * Parse schedules, creates a new Game entity and put it into DB.
     *
     * @Route("/parse", name="game_parse")
     * @Method({"GET", "POST"})
     */
    public function parseAction(Request $req)
    {
        $games = $req->get('games');
        $format = $req->get('format');

//        $format = $games['format'];
        $format = 'JSON';
//        $season = $games['season'];
        $season = '2016';
        // add if(isValid($format))
        // add if(isValid($season))
        $subKey = '64d53ab39e8444d5bca40439bc3d0a68';

        $request = new Http_Request2('https://api.fantasydata.net/mlb/v2/' . $format . '/Games/' . $season . '');
        $url = $request->getUrl();

        $headers = array(// Request headers
            'Ocp-Apim-Subscription-Key' => $subKey,
        );

        $request->setHeader($headers);

        $parameters = array(// Request parameters
        );

        $url->setQueryVariables($parameters);

        $request->setMethod(HTTP_Request2::METHOD_GET);
        $request->setBody("{body}");

        try {

            $response = $request->send();
            $games = json_decode($response->getBody(), true);

            $em = $this->getDoctrine()->getManager();

            $limit = 50;
            $cnt = 0;
            foreach ($games as $game) {
                $model = new Game();
                foreach ($game as $key => $val) {
                    $model->{"set$key"}($val);
                }
                $em->persist($model);
                $cnt++;
                if ($cnt == $limit) {
                    $em->flush();
                    $em->clear();
                    $cnt = 0;
                }
            }
            $em->flush();
            $em->clear();
            return $this->redirectToRoute('games_game_homepage');
        } catch (HttpException $ex) {
            echo $ex;
        }
    }
}
