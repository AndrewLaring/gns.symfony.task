<?php

namespace Games\GameBundle\Controller;

use Games\GameBundle\Entity\Game;
use Games\GameBundle\Form\GameType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ScheduleController extends Controller
{
    public function indexAction(Request $request)
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