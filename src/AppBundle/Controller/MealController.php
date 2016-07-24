<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Meal;
use AppBundle\Form\MealType;

/**
 * Meal controller.
 *
 * @Route("/meal")
 */
class MealController extends Controller
{
    /**
     * Lists all Meal entities.
     *
     * @Route("/{id}", name="meal_index")
     * @Method("GET")
     *
     * @param $id
     * @return JsonResponse
     */
    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $meals['meals'] = $em->getRepository('AppBundle:Meal')->findByRestaurantId($id);

        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($meals, 'json');
        
        return new Response($reports, 200, array(
            'Content-Type' => 'application/json'
        ));
    }

    /**
     * Creates a new Meal entity.
     *
     * @Route("/new", name="meal_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $meal = new Meal();
        $form = $this->createForm('AppBundle\Form\MealType', $meal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($meal);
            $em->flush();

            return $this->redirectToRoute('meal_show', array('id' => $meal->getId()));
        }

        return $this->render('meal/new.html.twig', array(
            'meal' => $meal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Meal entity.
     *
     * @Route("/{id}", name="meal_show")
     * @Method("GET")
     */
    public function showAction(Meal $meal)
    {
        $deleteForm = $this->createDeleteForm($meal);

        return $this->render('meal/show.html.twig', array(
            'meal' => $meal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Meal entity.
     *
     * @Route("/{id}/edit", name="meal_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Meal $meal)
    {
        $deleteForm = $this->createDeleteForm($meal);
        $editForm = $this->createForm('AppBundle\Form\MealType', $meal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($meal);
            $em->flush();

            return $this->redirectToRoute('meal_edit', array('id' => $meal->getId()));
        }

        return $this->render('meal/edit.html.twig', array(
            'meal' => $meal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Meal entity.
     *
     * @Route("/{id}", name="meal_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Meal $meal)
    {
        $form = $this->createDeleteForm($meal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($meal);
            $em->flush();
        }

        return $this->redirectToRoute('meal_index');
    }

    /**
     * Creates a form to delete a Meal entity.
     *
     * @param Meal $meal The Meal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Meal $meal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('meal_delete', array('id' => $meal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
