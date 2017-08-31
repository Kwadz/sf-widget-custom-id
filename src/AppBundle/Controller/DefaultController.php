<?php

namespace AppBundle\Controller;

use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $form = $this->createForm(TaskType::class);

        return $this->render('AppBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
