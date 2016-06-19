<?php

namespace Games\GameBundle\Form;

use Doctrine\ORM\EntityManager;
use Games\GameBundle\Entity\Game;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Length;

class GameType extends AbstractType
{
    private $teams;

    public function __construct($teams = array())
    {
        $this->teams = $teams;
    }


    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gameid')
            ->add('season')
            ->add('seasontype')
            ->add('status')
            ->add('day', 'date')
            ->add('datetime', 'datetime')
            ->add('awayteam', TextType::class, [
                'constraints' => new Length(array('min' => 2, 'max' => 3)),
                'required' => false,
                'empty_data' => null
            ])
            ->add('hometeam', TextType::class, [
                'constraints' => new Length(array('min' => 2, 'max' => 3)),
                'required' => false,
                'empty_data' => null
            ])
//            ->add('hometeam', ChoiceType::class, [
//                'choices' => $this->teams,
//            ])
            ->add('awayteamid')
            ->add('hometeamid')
            ->add('rescheduledgameid')
            ->add('stadiumid', IntegerType::class, [
                'required' => false
            ])
            ->add('channel')
            ->add('inning')
            ->add('inninghalf')
            ->add('awayteamruns')
            ->add('hometeamruns')
            ->add('awayteamhits')
            ->add('hometeamhits')
            ->add('awayteamerrors')
            ->add('hometeamerrors')
            ->add('winningpitcherid')
            ->add('losingpitcherid')
            ->add('savingpitcherid')
            ->add('attendance')
            ->add('awayteamprobablepitcherid')
            ->add('hometeamprobablepitcherid')
            ->add('outs')
            ->add('balls')
            ->add('strikes')
            ->add('currentpitcherid')
            ->add('currenthitterid')
            ->add('awayteamstartingpitcherid')
            ->add('hometeamstartingpitcherid')
            ->add('currentpitchingteamid')
            ->add('currenthittingteamid')
            ->add('pointspread')
            ->add('overunder')
            ->add('awayteammoneyline')
            ->add('hometeammoneyline')
            ->add('forecasttemplow')
            ->add('forecasttemphigh')
            ->add('forecastdescription')
            ->add('forecastwindchill')
            ->add('forecastwindspeed')
            ->add('forecastwinddirection')
            ->add('rescheduledfromgameid')
            ->add('runneronfirst')
            ->add('runneronsecond')
            ->add('runneronthird')
            ->add('winningpitcher')
            ->add('losingpitcher')
            ->add('savingpitcher')
            ->add('awayteamstartingpitcher')
            ->add('hometeamstartingpitcher')
            ->add('currentpitcher')
            ->add('currenthitter');
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Games\GameBundle\Entity\Game'
        ));
    }
}
