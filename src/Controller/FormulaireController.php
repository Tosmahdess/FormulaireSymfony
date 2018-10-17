<?php

namespace App\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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
                     ->add('filiaire')
                     ->add('raisonsociale')
                     ->add('etablissement')
                     ->add('nom')
                     ->add('prenom')
                     ->add('dateembauche', DateType::class, array(
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('personnechargeentretien')
                     ->add('dernierentretien', DateType::class, array(
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('dateentretien', DateType::class, array(
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('convocationenvoye', DateType::class, array(
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('convocationtype')
                     ->add('retourdossier', DateType::class, array(
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('progressionpro')
                     ->add('actionformation1')
                     ->add('dateformation1', DateType::class, array(
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('actionformation2')
                     ->add('dateformation2', DateType::class, array(
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('certification')
                     ->add('objectifsct')
                     ->add('objectifsmlt')
                     ->add('demandeformation1')
                     ->add('dateprevi1', DateType::class, array(
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('demandeformation2')
                     ->add('dateprevi2', DateType::class, array(
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('avisresponsable')
                     ->add('projet')
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
