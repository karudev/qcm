<?php

namespace Kdv\QuizBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Kdv\QuizBundle\Entity\Quiz;
use Kdv\QuizBundle\Entity\Session;



class QuizController extends Controller
{
    
    /**
     * @Template()
     */
    public function homeAction()
    {
         // New session
        $this->get('session')->set('session',[]);
        $em = $this->getDoctrine()->getManager();
        $quiz = $em->getRepository('KdvQuizBundle:Quiz')->findBy([],['id' => 'asc'],1); 
        return ['quiz' => $quiz];
    }
    
    /**
     * @Template()
     */
    public function indexAction(Quiz $quiz = null)
    {
        $em = $this->getDoctrine()->getManager();
         
        if($quiz == null){
         $this->createNotFoundException('Quiz is not find.');    
        }
       
       
        
        // New session
        $session = $this->get('session')->get('session');
        if(!isset($session['session']['session_id'])){
            $s = new Session();
            $s->setBeginAt(new \DateTime) 
                    ->setUserId(1);
            $em ->persist($s);
            $em->flush();
            
            $session['session']['session_id'] = $s->getId();
            $session['session']['quiz_id'] = $quiz->getId();
        }
        $this->get('session')->set('session',$session);
        
       // dump($this->get('session')->get('session'));
        
        // Id des questions
        $questions = $em->getRepository('KdvQuizBundle:Question')->findBy(['quiz' => $quiz->getId() ]);
        foreach ($questions as $key => $value) {
           $random[] = $value->getId(); 
        }
        
        if(isset($session['session']['questions'])){
            foreach ($random as $key => $value) {
                foreach ($session['session']['questions'] as $key2 => $value2) {
                    if($value2['question'] == $value){
                       unset($random[$key]); 
                    }
                }
            }
        }
        
        if(count($random) > 0){
        $val = array_rand($random, 1);
      
  
       
        $question = $em->getRepository('KdvQuizBundle:Question')->createQueryBuilder('q')
                ->where('q.quiz =:quiz')
                ->andWhere('q.id =:id')
                ->setParameter('quiz', $quiz)
                ->setParameter('id', $random[$val])
                ->getQuery()
                ->getSingleResult(); 
        }else{
         $question = null;   
        }
        
        return ['question' => $question,'questionNumber' => isset($session['session']['questions']) ? count($session['session']['questions'])+1 : 1];
    }
    
    
    public function saveAnswerAction(Request $request)
    {
        $data = $request->request->all();
        
        
        $em = $this->getDoctrine()->getManager();
        $question = $em->getRepository('KdvQuizBundle:Question')->find($data['question']); 
       
        $session = $this->get('session')->get('session');
        
       
        $session['session']['questions'][] = ['question' => $data['question'], 'answers' => $data['answers']];
        //dump($session); die();
        $this->get('session')->set('session',$session);
        //dump($request->request->all()); die();
        
        $quiz = $em->getRepository('KdvQuizBundle:Quiz')->find($session['session']['quiz_id']); 
        if(count($session['session']['questions']) < $quiz->getNbQuestions()){   
            return $this->redirect($this->generateUrl('kdv_quiz_quiz_index',['quiz' => $question->getQuiz()->getId()]));
        }else{      
            return $this->redirect($this->generateUrl('kdv_quiz_session_save',['s' => $session['session']['session_id']]));
        }
    }
    
  
}
