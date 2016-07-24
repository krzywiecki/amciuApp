<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\Orders;
use AppBundle\Form\OrdersType;

/**
 * Orders controller.
 *
 * @Route("/orders")
 */
class OrdersController extends Controller
{
    /**
     * Lists all Orders entities.
     *
     * @Route("/", name="orders_index")
     * @Method("GET")
     *
     * @return JsonResponse
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $serializer = $this->container->get('serializer');

        $orders['orders'] = $em->getRepository('AppBundle:Orders')->findAll();
        $orders = json_decode($serializer->serialize($orders, 'json'));

        for($i = 0; $i < sizeof($orders->orders); $i++) {
            $orderedMeals = $em->getRepository('AppBundle:OrderedMeal')->findByOrderId($orders->orders[$i]->id);
            $k = sizeof($orderedMeals);

            for($j = 0; $j < $k; $j++) {
                $orderedMealsObj = json_decode($serializer->serialize($orderedMeals[$j], 'json'));
                
                $meal = $em->getRepository('AppBundle:Meal')->findOneById($orderedMealsObj->meal_id);
                $meal = json_decode($serializer->serialize($meal, 'json'));
                
                $user = $em->getRepository('AppBundle:User')->findOneById($orderedMealsObj->owner_id);
                $user = json_decode($serializer->serialize($user, 'json'));

                $orderedMealsObj->mealName = $meal->name;
                $orderedMealsObj->owner = $user->user;

                unset($orderedMealsObj->meal_id);
                unset($orderedMealsObj->order_id);
                unset($orderedMealsObj->owner_id);
                
                $orders->orders[$i]->orderedMeals[$j] = $orderedMealsObj;
            }
            
        }

        $orders = json_encode($orders);

        return new Response($orders, 200, array(
            'Content-Type' => 'application/json'
        ));
    }

    /**
     * Creates a new Orders entity.
     *
     * @Route("/new", name="orders_new")
     * @Method("POST")
     *
     * @param $id
     * @return JsonResponse
     */
    public function newAction(Request $request)
    {
        $order = new Orders();

        $r = json_decode($request->getContent(), true);

        $order->setRestaurant($r['restaurant']);
        $order->setOwner($r['owner']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($order);
        $em->flush();

        return new Response($order->getId(), 200, array(
            'Content-Type' => 'application/json'
        ));
    }

    /**
     * Finds and displays a Orders entity.
     *
     * @Route("/{id}", name="orders_show")
     * @Method("GET")
     */
    public function showAction(Orders $order)
    {
        $deleteForm = $this->createDeleteForm($order);

        return $this->render('orders/show.html.twig', array(
            'order' => $order,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Orders entity.
     *
     * @Route("/{id}/edit", name="orders_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Orders $order)
    {
        $deleteForm = $this->createDeleteForm($order);
        $editForm = $this->createForm('AppBundle\Form\OrdersType', $order);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush();

            return $this->redirectToRoute('orders_edit', array('id' => $order->getId()));
        }

        return $this->render('orders/edit.html.twig', array(
            'order' => $order,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Orders entity.
     *
     * @Route("/{id}", name="orders_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Orders $order)
    {
        $form = $this->createDeleteForm($order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($order);
            $em->flush();
        }

        return $this->redirectToRoute('orders_index');
    }

    /**
     * Creates a form to delete a Orders entity.
     *
     * @param Orders $order The Orders entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Orders $order)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('orders_delete', array('id' => $order->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
