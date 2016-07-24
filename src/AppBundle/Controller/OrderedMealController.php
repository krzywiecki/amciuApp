<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\OrderedMeal;
use AppBundle\Form\OrderedMealType;

/**
 * OrderedMeal controller.
 *
 * @Route("/orderedmeal")
 */
class OrderedMealController extends Controller
{
    /**
     * Lists all OrderedMeal entities.
     *
     * @Route("/", name="orderedmeal_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orderedMeals = $em->getRepository('AppBundle:OrderedMeal')->findAll();

        return $this->render('orderedmeal/index.html.twig', array(
            'orderedMeals' => $orderedMeals,
        ));
    }

    /**
     * Creates a new OrderedMeal entity.
     *
     * @Route("/new", name="orderedmeal_new")
     * @Method("POST")
     */
    public function newAction(Request $request)
    {
        $orderedMeal = new OrderedMeal();

        $r = json_decode($request->getContent(), true);

        $orderedMeal->setOrderId($r['orderId']);
        $orderedMeal->setMealId($r['mealId']);
        $orderedMeal->setOwnerId($r['ownerId']);
        $orderedMeal->setPrice(1000);

        $em = $this->getDoctrine()->getManager();
        $em->persist($orderedMeal);
        $em->flush();

        return new Response($orderedMeal->getId(), 200, array(
            'Content-Type' => 'application/json'
        ));
    }

    /**
     * Finds and displays a OrderedMeal entity.
     *
     * @Route("/{id}", name="orderedmeal_show")
     * @Method("GET")
     */
    public function showAction(OrderedMeal $orderedMeal)
    {
        $deleteForm = $this->createDeleteForm($orderedMeal);

        return $this->render('orderedmeal/show.html.twig', array(
            'orderedMeal' => $orderedMeal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing OrderedMeal entity.
     *
     * @Route("/{id}/edit", name="orderedmeal_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, OrderedMeal $orderedMeal)
    {
        $deleteForm = $this->createDeleteForm($orderedMeal);
        $editForm = $this->createForm('AppBundle\Form\OrderedMealType', $orderedMeal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderedMeal);
            $em->flush();

            return $this->redirectToRoute('orderedmeal_edit', array('id' => $orderedMeal->getId()));
        }

        return $this->render('orderedmeal/edit.html.twig', array(
            'orderedMeal' => $orderedMeal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a OrderedMeal entity.
     *
     * @Route("/{id}", name="orderedmeal_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, OrderedMeal $orderedMeal)
    {
        $form = $this->createDeleteForm($orderedMeal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($orderedMeal);
            $em->flush();
        }

        return $this->redirectToRoute('orderedmeal_index');
    }

    /**
     * Creates a form to delete a OrderedMeal entity.
     *
     * @param OrderedMeal $orderedMeal The OrderedMeal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OrderedMeal $orderedMeal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('orderedmeal_delete', array('id' => $orderedMeal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
