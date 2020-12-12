<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{ 
    /**
     * @return Response
     * @Route("/")
     */
    

    /**
     * @return Response
     * @Route("/questions/{slug}")
     */
    public function show($slug){
        return new Response($slug);
    }
}