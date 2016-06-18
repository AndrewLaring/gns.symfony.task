<?php

namespace Games\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ScheduleController extends Controller
{
    public function indexAction(Request $request)
    {
        if (!$request->isMethod(Request::METHOD_POST)) {
            return $this->redirect($this->generateUrl('games_game_homepage'));
        }
        $game = $request->get('game');
        $games = $this->get('games_service')->showAction($game);
        $games = json_decode($games->getContent());
        return $this->render('GamesGameBundle:Default:schedule.html.twig', [
            'games' => $games,
        ]);
    }
}