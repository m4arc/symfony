<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class AdvertController2
{
  public function index(Environment $twig)
  {
   
	$content = $twig->render('Advert/air.html.twig');

    return new Response($content);
  }
}