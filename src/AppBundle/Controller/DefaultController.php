<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('index.html', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/createOrder", name="create_order_popup")
     */
    public function createOrderPopupAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('createOrderPopup.html', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/addMeal/{id}", name="add_meal_popup")
     */
    public function addMealPopupAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('addMealPopup.html', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}
