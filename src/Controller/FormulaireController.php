<?php

namespace App\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\FormulaireRepository;
use App\Entity\Formulaire;


class FormulaireController extends AbstractController
{
    /**
     * @Route("/EntretienPro", name="formulaire_home")
     */
    public function home()
    {
        return $this->render('formulaire/home.html.twig');
    }

    /**
     * @Route("/EntretienPro/create", name="formulaire_create")
     * @Route("/EntretienPro/{id}/edit", name="formulaire_edit")
     */
    public function form(Request $request, ObjectManager $manager, Formulaire $formulaire = null)
    {
        if(!$formulaire){
            $formulaire = new Formulaire();
        }

        $form = $this->createFormBuilder($formulaire)
                     ->add('nom')
                     ->add('prenom')
                     ->add('dateprecentretien')
                     ->add('dateentretien')
                     ->add('motifentretien')
                     ->add('conge')
                     ->add('absence')
                     ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($formulaire);
            $manager->flush();

            return $this->redirectToRoute('formulaire_show');
        }

        return $this->render('formulaire/create.html.twig', [
            'formUser' => $form->createView(),
            'editMode' => $formulaire->getId() !== null
        ]);
    }

    /**
     * @Route("/EntretienPro/show", name="formulaire_show")
     */
    public function show()
    {
        return $this->render('formulaire/show.html.twig', [
            'controller_name' => 'FormulaireController',
        ]);
    }
}
