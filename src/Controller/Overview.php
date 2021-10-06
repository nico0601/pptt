<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Overview extends AbstractController
{

    /**
     * @Route("/ergebnisse", name="show_overview")
     */

    public function round(): Response
    {
        $round1 = [
            '1' =>
                ['model' => 'Falke1',
                    'distance' => '10m',
                    'duration' => '5 sec',
                    'partname' => 'Günther',
                    'date' => '25.10.2018',
                    'img' => 'https://images.freeimages.com/images/small-previews/429/plane-1449679.jpg'],
            '2' =>
                ['model' => 'Adler',
                    'distance' => '9m',
                    'duration' => '4.7 sec',
                    'partname' => 'Armin',
                    'date' => '25.10.2018',
                    'img' => 'https://images.freeimages.com/images/small-previews/e03/plane-1450177.jpg'],
            '3' =>
                ['model' => 'Bundeswehr',
                    'distance' => '23m',
                    'duration' => '10 sec',
                    'partname' => 'Rainer',
                    'date' => '25.10.2018',
                    'img' => 'https://images.freeimages.com/images/small-previews/10f/plane-1544236.jpg']];

        $round2 = [
            '1' =>
                ['model' => 'Falke2',
                    'distance' => '10.1m',
                    'duration' => '5.3 sec',
                    'partname' => 'Günther',
                    'date' => '25.10.2019',
                    'img' => 'https://images.freeimages.com/images/small-previews/1dc/plane-1-1449686.jpg'],
            '2' =>
                ['model' => 'Adler2',
                    'distance' => '9.9m',
                    'duration' => '4.7 sec',
                    'partname' => 'Armin',
                    'date' => '25.10.2019',
                    'img' => 'https://images.freeimages.com/images/small-previews/c3d/plane-1450768.jpg'],
            '3' =>
                ['model' => 'Bundeswehr2',
                    'distance' => '23.5m',
                    'duration' => '10 sec',
                    'partname' => 'Rainer',
                    'date' => '25.10.2019',
                    'img' => 'https://images.freeimages.com/images/small-previews/848/old-planes-1450284.jpg']];

        $round3 = [
            '1' =>
                ['model' => 'Falke3',
                    'distance' => '10.1m',
                    'duration' => '5.7 sec',
                    'partname' => 'Günther',
                    'date' => '25.09.2020',
                    'img' => 'https://images.freeimages.com/images/small-previews/eb4/bi-plane-1450972.jpg'],
            '2' =>
                ['model' => 'Adler3',
                    'distance' => '9m',
                    'duration' => '5 sec',
                    'partname' => 'Armin',
                    'date' => '25.09.2020',
                    'img' => 'https://images.freeimages.com/images/small-previews/962/toy-plane-1-1420258.jpg'],
            '3' =>
                ['model' => 'Bundeswehr3',
                    'distance' => '26.5m',
                    'duration' => '9.5 sec',
                    'partname' => 'Rainer',
                    'date' => '25.09.2020',
                    'img' => 'https://images.freeimages.com/images/small-previews/223/plane-1529359.jpg']];

        $rounds = [$round1, $round2, $round3];

        return $this->render('pptt/overview.html.twig', [
            'rounds' => $rounds
        ]);
    }
}