<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(): Response
    {
        $server['regions'] = [
            'america' => 'America',
            'europe' => 'Europe',
            'oceanic' => 'Oceanic'
        ];
        $server['types'] = [
            'pve' => 'PVE',
            'pvp' => 'PVP',
            'rp' => 'RP'
        ];

        $server['names']['america']['pve'] = ['Ashkandi', 'Atiesh', 'Azuresong', 'Mankrik', 'Myzrael', 'Old Blanchy', 'Pagle', 'Westfall', 'Windseeker'];
        $server['names']['america']['pvp'] = ['Anathema', 'Bigglesworth', 'Benediction', 'Blaumeux', 'Faerlina', 'Fairbanks', 'Herod', 'Incendius', 'Kirtonos', 'Kurinaxx', 'Kromcrush', 'Netherwind', 'Rattlegore', 'Skeram', 'Smolderweb', 'Stalagg', 'Sulfuras', 'Thalnos', 'Thunderfury', 'Whitemane'];
        $server['names']['america']['rp'] = ['Bloodsail Buccaneers', 'Deviant Delight', 'Grobbulus'];

        $server['names']['europe']['pve'] = ['Mirage Raceway', 'Nethergarde Keep', 'Pyrewood Village', 'Auberdine', 'Everlook', 'Razorfen', 'Lakeshire', 'Chromie'];
        $server['names']['europe']['pvp'] = ['Ashbringer', 'Bloodfang', 'Dreadmist', 'Firemaw', 'Flamelash', 'Gandling', 'Gehennas', 'Golemagg', 'Judgement', 'Mograine', 'Noggenfogger', 'Razorgore', 'Shazzrah', 'Skullflame', 'Stonespine', 'Ten Storms', 'Amnennar', 'Sulfuron', 'Finkle', 'Lucifron', 'Venoxis','Patchwerk','Dragons Call', 'Transcendence', 'Flamegor', 'Wyrmthalak','Rhokdelar'];
        $server['names']['europe']['rp'] = ['Hydraxian Waterlords', 'Zandalar Tribe'];

        $server['names']['oceanic']['pve'] = ['Remulos'];
        $server['names']['oceanic']['pvp'] = ['Arugal', 'Felstriker', 'Yojamba'];
        $server['names']['oceanic']['rp'] = ['test'];

        return $this->render(
            'index.html.twig',
            ['server' => $server]
            );
    }

    /**
     * @Route("/impressum", name="impressum", methods={"GET"})
     */
    public function impressum(): Response
    {
        return $this->render('impressum.html.twig');
    }
}