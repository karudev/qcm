<?php

namespace Kdv\QuizBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Kdv\QuizBundle\Entity\Session;
use Kdv\QuizBundle\Entity\SessionAnswer;


class SessionController extends Controller
{
    /**
     * 
     * @Template()
     */
    public function viewAction(Session $session)
    {
        //dump($session->getSessionAnswers()); die();
       return ["session" => $session];
    }

    public function saveAction(Session $s)
    {
        $session = $this->get('session')->get('session');
        $em = $this->getDoctrine()->getManager();
       
        $s ->setEndAt(new \Datetime);
        $em->persist($s);
        $em->flush();
        
        foreach ($session['session']['questions'] as $key => $value) {
            
          $question = $em->getRepository('KdvQuizBundle:Question')->find($value['question']);
          if($question->getType() == "multiple_text"){
              foreach ($value['answers'] as $k => $text) {
                $sa = new SessionAnswer();
                $sa->setQuestion($question);
                $sa->setText($text); 
                $sa->setSession($s);
                $em->persist($sa);
                $em->flush();
              }
          }else{
             
            $sa = new SessionAnswer();
            $sa->setQuestion($question);
            $answer = $em->getRepository('KdvQuizBundle:Answer')->find($value['answers']);
            $sa->setAnswer($answer); 

            $sa->setSession($s);
            $em->persist($sa);
            $em->flush();
          }
          
         
          
          
         
        }
     

        return $this->redirect($this->generateUrl('kdv_quiz_session_view',['session' => $s->getId()]));
    }
}
