<?php

namespace Alba\Bundle\Controller;

use Alba\Bundle\Entity\Order_info;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Order_info controller.
 *
 * @Route("order_info")
 */
class Order_infoController extends Controller
{
    /**
     * Lists all order_info entities.
     *
     * @Route("/", name="order_info_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $order_infos = $em->getRepository('AlbaBundle:Order_info')->findAll();

        return $this->render('order_info/index.html.twig', array(
            'order_infos' => $order_infos,
        ));
    }

    /**
     * Creates a new order_info entity.
     *
     * @Route("/new", name="order_info_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $order_info = new Order_info();
        $form = $this->createForm('Alba\Bundle\Form\Order_infoType', $order_info);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($order_info);
            $em->flush();

            return $this->redirectToRoute('order_info_show', array('id' => $order_info->getId()));
        }

        return $this->render('order_info/new.html.twig', array(
            'order_info' => $order_info,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a order_info entity.
     *
     * @Route("/{id}", name="order_info_show")
     * @Method("GET")
     */
    public function showAction(Order_info $order_info)
    {
        $deleteForm = $this->createDeleteForm($order_info);

        return $this->render('order_info/show.html.twig', array(
            'order_info' => $order_info,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing order_info entity.
     *
     * @Route("/{id}/edit", name="order_info_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Order_info $order_info)
    {
        $deleteForm = $this->createDeleteForm($order_info);
        $editForm = $this->createForm('Alba\Bundle\Form\Order_infoType', $order_info);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('order_info_edit', array('id' => $order_info->getId()));
        }

        return $this->render('order_info/edit.html.twig', array(
            'order_info' => $order_info,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a order_info entity.
     *
     * @Route("/{id}", name="order_info_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Order_info $order_info)
    {
        $form = $this->createDeleteForm($order_info);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($order_info);
            $em->flush($order_info);
        }

        return $this->redirectToRoute('order_info_index');
    }

    /**
     * Creates a form to delete a order_info entity.
     *
     * @param Order_info $order_info The order_info entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Order_info $order_info)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('order_info_delete', array('id' => $order_info->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
