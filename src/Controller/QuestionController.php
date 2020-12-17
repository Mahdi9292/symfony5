<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{ 
    /**
     * @return Response
     * @Route("/", name="app_homepage")
     */
    public function homepage(){
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @return Response
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug){

        $answers = [
            'there are no real name for earth',
            'what are you talking about',
            'it is hall malo konoha'
        ];

        $questionText = 'I\'ve been turned into a cat, any thoughts on how to turn back? While I\'m adorable, I don\'t really care for cat food.';
            dump($this);

        return $this->render('question/show.html.twig', [
            'question'=>ucwords(str_replace('-', ' ', $slug)),
            'answers'=>$answers,
            'questionText'=>$questionText,
        ]);
    }
}