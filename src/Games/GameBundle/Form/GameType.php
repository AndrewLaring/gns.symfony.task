<?php

namespace Games\GameBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GameType extends AbstractType
{
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
                'required'    => false,
                'empty_data'  => null
            ])
            ->add('hometeam', TextType::class, [
                'required'    => false,
                'empty_data'  => null
            ])
            ->add('awayteamid')
            ->add('hometeamid')
            ->add('rescheduledgameid')
            ->add('stadiumid', IntegerType::class, [
                'required'    => false,
                'empty_data'  => null
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
