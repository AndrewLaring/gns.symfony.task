<?php

namespace Games\GameBundle\Controller;

use Doctrine\ORM\Query;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
        $teams = $this->getDoctrine()
            ->getManager()
            ->getRepository('GamesGameBundle:Game')
            ->getTeams();

        $game = new Game();
        $form = $this->createForm(new GameType($teams), $game);
        return $this->render('GamesGameBundle:Default:index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function scheduleAction(Request $request)
    {
        if (!$request->isMethod(Request::METHOD_POST)) {
            return $this->redirect($this->generateUrl('games_game_homepage'));
        }
        $game = new Game();
        $gameForm = $this->createForm(GameType::class, $game);
        $gameForm->handleRequest($request);
        if (!$gameForm->isValid()) {
            return $this->render('GamesGameBundle:Default:index.html.twig', [
                'form' => $gameForm->createView()
            ]);
        }
        $games = $this->get('games_service')->showAction($gameForm->getData());
        $games = json_decode($games->getContent());
        return $this->render('GamesGameBundle:Default:schedule.html.twig', [
            'games' => $games,
        ]);
    }
}
