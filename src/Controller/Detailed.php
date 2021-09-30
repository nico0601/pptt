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
        $model = ['Falke1', 'Adler', 'Bundeswehr'];
        $distance = ['10m', '9m', '23m'];
        $duration = ['5 sec', '4.7 sec', '10 sec'];
        $partname = ['Günther', 'Armin', 'Rainer'];
        $date = ['25.10.2018', '25.10.2018','25.10.2018'];

        return $this->render('pptt/detail.html.twig', [
            'model' => $model[$id],
            'distance' => $distance[$id],
            'duration' => $duration[$id],
            'partname' => $partname[$id],
            'date' => $date[$id],
        ]);
    }
}