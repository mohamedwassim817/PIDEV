<?php

namespace ProduitBundle\Controller;

use ProduitBundle\Entity\Categorie_Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Categorie_produit controller.
 *
 * @Route("categorie_produit")
 */
class Categorie_ProduitController extends Controller
{
    /**
     * Lists all categorie_Produit entities.
     *
     * @Route("/", name="categorie_produit_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categorie_Produits = $em->getRepository('ProduitBundle:Categorie_Produit')->findAll();

        return $this->render('categorie_produit/index.html.twig', array(
            'categorie_Produits' => $categorie_Produits,
        ));
    }

    /**
     * Creates a new categorie_Produit entity.
     *
     * @Route("/new", name="categorie_produit_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $categorie_Produit = new Categorie_produit();
        $form = $this->createForm('ProduitBundle\Form\Categorie_ProduitType', $categorie_Produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie_Produit);
            $em->flush();

            return $this->redirectToRoute('categorie_produit_show', array('id' => $categorie_Produit->getId()));
        }

        return $this->render('categorie_produit/new.html.twig', array(
            'categorie_Produit' => $categorie_Produit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categorie_Produit entity.
     *
     * @Route("/{id}", name="categorie_produit_show")
     * @Method("GET")
     */
    public function showAction(Categorie_Produit $categorie_Produit)
    {
        $deleteForm = $this->createDeleteForm($categorie_Produit);

        return $this->render('categorie_produit/show.html.twig', array(
            'categorie_Produit' => $categorie_Produit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categorie_Produit entity.
     *
     * @Route("/{id}/edit", name="categorie_produit_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Categorie_Produit $categorie_Produit)
    {
        $deleteForm = $this->createDeleteForm($categorie_Produit);
        $editForm = $this->createForm('ProduitBundle\Form\Categorie_ProduitType', $categorie_Produit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categorie_produit_edit', array('id' => $categorie_Produit->getId()));
        }

        return $this->render('categorie_produit/edit.html.twig', array(
            'categorie_Produit' => $categorie_Produit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categorie_Produit entity.
     *
     * @Route("/{id}", name="categorie_produit_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Categorie_Produit $categorie_Produit)
    {
        $form = $this->createDeleteForm($categorie_Produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorie_Produit);
            $em->flush();
        }

        return $this->redirectToRoute('categorie_produit_index');
    }

    /**
     * Creates a form to delete a categorie_Produit entity.
     *
     * @param Categorie_Produit $categorie_Produit The categorie_Produit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Categorie_Produit $categorie_Produit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categorie_produit_delete', array('id' => $categorie_Produit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
