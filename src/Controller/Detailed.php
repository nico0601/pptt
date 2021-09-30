<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Detailed extends AbstractController
{

    /**
     * @Route("/results/1/{id<\d+>}", name="show_detail")
     */

    public function round(int $id): Response
    {
        $round1 = [
            '1' =>
                ['model' => 'Falke1',
                    'distance' => '10m',
                    'duration' => '5 sec',
                    'partname' => 'Günther',
                    'date' => '25.10.2018'],
            '2' =>
                ['model' => 'Adler',
                    'distance' => '9m',
                    'duration' => '4.7 sec',
                    'partname' => 'Armin',
                    'date' => '25.10.2018'],
            '3' =>
                ['model' => 'Bundeswehr',
                    'distance' => '23m',
                    'duration' => '10 sec',
                    'partname' => 'Rainer',
                    'date' => '25.10.2018']];

        $round2 = [
            '1' =>
                ['model' => 'Falke2',
                    'distance' => '10.2m',
                    'duration' => '5 sec',
                    'partname' => 'Günther',
                    'date' => '25.10.2019'],
            '2' =>
                ['model' => 'Adler2',
                    'distance' => '9.9m',
                    'duration' => '4.7 sec',
                    'partname' => 'Armin',
                    'date' => '25.10.2019'],
            '3' =>
                ['model' => 'Bundeswehr2',
                    'distance' => '23.5m',
                    'duration' => '10 sec',
                    'partname' => 'Rainer',
                    'date' => '25.10.2019']];

        $rounds = [$round1, $round2];

        return $this->render('pptt/detail.html.twig', [
            'model' => $model[$id],
            'distance' => $distance[$id],
            'duration' => $duration[$id],
            'partname' => $partname[$id],
            'date' => $date[$id],
        ]);
    }
}