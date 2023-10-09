<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
        
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

namespace App\Controller;

/**
 * Description of AccueilController
 *
 * @author Test1
 */

    //put your code here
class AccueilController  extends AbstractController{

  #[Route('/', 'acceuil.index', methods: ['POST'])]
    public function  index():Response{
      return $this ->render('acceuil.html.twig');

   }
}

