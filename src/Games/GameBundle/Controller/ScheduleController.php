<?php

namespace Games\GameBundle\Controller;

use Games\GameBundle\Entity\Game;
use Games\GameBundle\Form\GameType;
use JMS\Serializer\SerializerBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ScheduleController extends Controller
{
    public function showAction($game)
    {
        $serializer = SerializerBuilder::create()->build();
        $game = $serializer->toArray($game);

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder()
            ->select('g')
            ->from('GamesGameBundle:Game', 'g');
        foreach ($game as $k => $v) {
            if (isset($v) && $v != null) {
//                var_dump($k . '=>' . $v);
                $qb->andWhere("g.{$k} = '$v'");
            }
        }
        $games = $qb->getQuery()->getArrayResult();

        $response = new Response();
        $response->setContent(json_encode($games));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}