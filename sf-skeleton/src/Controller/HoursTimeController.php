<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class HoursTimeController extends AbstractController
{
    /**
     * @Route("/hours/time", name="hours_time")
     */
    public function index(): Response
{
    $date = date("d-m-Y");
    
    $heure = date("H:i");

    return new Reponse (
        "<html><body><p>Nous sommes le $date et il est $heure<p><body><html>"

    );
       
    
}
}