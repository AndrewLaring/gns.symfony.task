<?php

namespace Games\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Games\GameBundle\Entity\Game;
use Games\GameBundle\Form\GameType;


/**
 * Class DefaultController
 * @package Games\GameBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        $game = new Game();
        $form = $this->createForm(GameType::class, $game);
        if ($form->isValid()) {
            return $this->redirect($this->generateUrl('games_game_homepage'));
        }
        return $this->render('GamesGameBundle:Default:index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function showAction($game)
    {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder('g')
            ->select('g')
            ->from('GamesGameBundle:Game', 'g');
        foreach ($game as $k => $v) {
            if (isset($v) && $v != null) {
                $qb->andWhere("g.{$k} = '$v'");
            }
        }
        $games = $qb->getQuery()
            ->getArrayResult();

        $response = new Response();
        $response->setContent(json_encode($games));
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }
}
