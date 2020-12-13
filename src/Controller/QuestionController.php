<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{ 
    /**
     * @return Response
     * @Route("/")
     */
    public function home(){
        return new Response('welconme to home');
    }

    /**
     * @return Response
     * @Route("/questions/{slug}")
     */
    public function show($slug){

        $answers = [
            'there are no real name for earth',
            'what are you talking about',
            'it is hall malo konoha'
        ];
        return $this->render('question/show.html.twig', [
            'question'=>ucwords(str_replace('-', ' ', $slug)),
            'answers'=>$answers
        ]);
    }
}