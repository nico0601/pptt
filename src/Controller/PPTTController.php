<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PPTTController extends AbstractController
{

      /**
      * @Route("/results/1")
      */

    public function round(): Response
    {
        $model = ['Falke1', 'Adler', 'Bundeswehr'];
	    $distance = ['10m', '9m', '23m'];
	    $duration = ['5 sec', '4.7 sec', '10 sec'];
	    $partname = ['Günther', 'Armin', 'Rainer'];
	    $date = ['25.10.2018', '25.10.2018','25.10.2018'];

        return $this->render('pptt/round.html.twig', [
            'model' => $model,
            'distance' => $distance,
            'duration' => $duration,
            'partname' => $partname,
            'date' => $date,
        ]);
    }
}