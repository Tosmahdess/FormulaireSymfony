<?php

namespace App\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\FormulaireRepository;
use App\Entity\Formulaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Common\Persistence\ObjectRepository;


class FormulaireController extends AbstractController
{
    /**
     * @Route("/", name="formulaire_home")
     */
    public function home()
    {
        return $this->render('formulaire/home.html.twig');
    }

    /**
     * @Route("/EntretienPro/create", name="formulaire_create")
     * @Route("/EntretienPro/{nom}/edit", name="formulaire_edit")
     */
    public function form(Request $request, ObjectManager $manager, Formulaire $formulaire = null)
    {

        if(!$formulaire){
            $formulaire = new Formulaire();
        }

        $form = $this->createFormBuilder($formulaire)
                     ->add('filiaire', ChoiceType::class, array(
                            'choices' => array(
                                '' => '',
                                'Tourisme' => 'tourisme',
                                'Etudiant' => 'etudiant',
                                'Affaire' => 'affaire'
                            )
                     ))
                     ->add('raisonsociale', ChoiceType::class, array(
                         'choices' => array(
                             '' => '',
                             'LE DOMAINE DE LA BAIE' => 'LE DOMAINE DE LA BAIE',
                             'LE GRAND TETRAS' => 'LE GRAND TETRAS',
                             'LE MAS DES OLIVIERS' => 'LE MAS DES OLIVIERS',
                             'LES TERRASSES DE L\'OCEAN' => 'LES TERRASSES DE L\'OCEAN',
                             'NEMEA PEYRAGUDES' => 'NEMEA PEYRAGUDES',
                             'SARL KERMAEL' => 'SARL KERMAEL',
                             'SARL LES CHALETS DE CAUTERETS' => 'SARL LES CHALETS DE CAUTERETS',
                             'SARL LES KER' => 'SARL LES KER',
                             'SAS LA SOULANE' => 'SAS LA SOULANE',
                             'VILLAGE CLUB ST BRICE' => 'VILLAGE CLUB ST BRICE'
                         )
                     ))
                     ->add('etablissement', ChoiceType::class, array(
                         'choices' => array(
                             '' => '',
                             'Plougonvelin (Bertheaume)' => 'Plougonvelin (Bertheaume)',
                             'Audierne (Domaine de la Baie)' => 'Audierne (Domaine de la Baie)',
                             'Locmaria (Iroise)' => 'Locmaria (Iroise)',
                             'Saint Pol de Léon (Les Roches)' => 'Saint Pol de Léon (Les Roches)',
                             'Saint-Malo (Les Mauriers)' => 'Saint-Malo (Les Mauriers)',
                             'Saint-Briac (Kermael)' => 'Saint-Briac (Kermael)',
                             'Olonne (Les Grands Rochers)' => 'Olonne (Les Grands Rochers)',
                             'Saint-Georges (Sables Vignier)' => 'Saint-Georges (Sables Vignier)',
                             'Dolus (La Cascade)' => 'Dolus (La Cascade)',
                             'Arès (Saint-Brice)' => 'Arès (Saint-Brice)',
                             'Capbreton (L\'Estacade)' => 'Capbreton (L\'Estacade)',
                            'Moliets (Terrasses de l\'Océan)' => 'Moliets (Terrasses de l\'Océan)',
                            'Mimizan (Balcons des Pêcheurs)' => 'Mimizan (Balcons des Pêcheurs)',
                            'Mimizan (Les Dunes)' => 'Mimizan (Les Dunes)',
                            'Mimizan (Les Gourbets)' => 'Mimizan (Les Gourbets)',
                            'Mimizan (Le Marché de La Plage)' => 'Mimizan (Le Marché de La Plage)',
                            'Anglet (La Croisière)' => 'Anglet (La Croisière)',
                            'Malaucène (Les Mazets du Ventoux)' => 'Malaucène (Les Mazets du Ventoux)',
                            'Sauve (Les Portes des Cévennes)' => 'Sauve (Les Portes des Cévennes)',
                            'Saint Mandrier (Cap Azur)' => 'Saint Mandrier (Cap Azur)',
                            'Saint-Saturnin (Les rives du Lac)' => 'Saint-Saturnin (Les rives du Lac)',
                            'Font-Romeu (Chalets Belvédère)' => 'Font-Romeu (Chalets Belvédère)',
                            'Ax-Les-Thermes (Les Grands Ax)' => 'Ax-Les-Thermes (Les Grands Ax)',
                            'Bonascre (Les Balcons d\'Ax)' => 'Bonascre (Les Balcons d\'Ax)',
                            'Peyragudes (Royal Peyragudes)' => 'Peyragudes (Royal Peyragudes)',
                            'Peyragudes (Balestas)' => 'Peyragudes (Balestas)',
                            'Loudenvielle (La Soulane)' => 'Loudenvielle (La Soulane)',
                            'Cauterets (les Chalets d\'Estive)' => 'Cauterets (les Chalets d\'Estive)',
                            'Samoens (Le Grand Tetras)' => 'Samoens (Le Grand Tetras)',
                            'Morillon (Bois de Champelle)' => 'Morillon (Bois de Champelle)',
                            'Les Contamines (Le Nevez)' => 'Les Contamines (Le Nevez)',
                            'Chatel (Grand Lodge)' => 'Chatel (Grand Lodge)',
                            'Chatel (Grand Ermitage)' => 'Chatel (Grand Ermitage)',
                            'Flumet (Chalets des Evettes)' => 'Flumet (Chalets des Evettes)',
                            'La Toussuire (Chalets des Cîmes)' => 'La Toussuire (Chalets des Cîmes)',
                            'Briancon-Serre Chevalier (L\'aigle Bleu)' => 'Briancon-Serre Chevalier (L\'aigle Bleu)',
                            'Chantemerle - Serre Chevalier (l\'Adret)' => 'Chantemerle - Serre Chevalier (l\'Adret)',
                            'Toulouse (Saint-Martin)' => 'Toulouse (Saint-Martin)',
                            'Toulouse (Constellation)' => 'Toulouse (Constellation)',
                            'Toulouse (Concorde)' => 'Toulouse (Concorde)',
                            'Cagnes (Le Lido)' => 'Cagnes (Le Lido)',
                            'Sophia Antipolis (Green Side)' => 'Sophia Antipolis (Green Side)',
                            'Tours - Quai Victor' => 'Tours - Quai Victor',
                            'Nancy Appart\'hôtel' => 'Nancy Appart\'hôtel',
                            'Mérignac Stadium' => 'Mérignac Stadium',
                            'Cannes Palais' => 'Cannes Palais',
                            'AIX CAMPUS 1' => 'AIX CAMPUS 1',
                            'AIX CAMPUS 2' => 'AIX CAMPUS 2',
                            'AIX SAINTE VICTOIRE' => 'AIX SAINTE VICTOIRE',
                            'AMIENS BEFFROI' => 'AMIENS BEFFROI',
                            'CAEN BEAUMOIS' => 'CAEN BEAUMOIS',
                            'CAEN CAMPUS 1' => 'CAEN CAMPUS 1',
                            'CLERMONT CENTRE' => 'CLERMONT CENTRE',
                            'CRETEIL CAMPUS' => 'CRETEIL CAMPUS',
                            'CRETEIL CAMPUS 2' => 'CRETEIL CAMPUS 2',
                            'DIJON EIFFEL' => 'DIJON EIFFEL',
                            'EURASANTE' => 'EURASANTE',
                            'LE MAGISTER' => 'LE MAGISTER',
                            'LYON 8' => 'LYON 8',
                            'MARSEILLE TIMONE' => 'MARSEILLE TIMONE',
                            'MONTECRISTO' => 'MONTECRISTO',
                            'MONTPELLIER CARRE DU ROI' => 'MONTPELLIER CARRE DU ROI',
                            'NANCY CAMPUS' => 'NANCY CAMPUS',
                            'NANTERRE CAMPUS' => 'NANTERRE CAMPUS',
                            'RENNES VILLEJEAN' => 'RENNES VILLEJEAN',
                            'ROUBAIX EUROTELEPORT' => 'ROUBAIX EUROTELEPORT',
                            'STANFORD' => 'STANFORD',
                            'STRASBOURG MEINAU' => 'STRASBOURG MEINAU',
                            'STRASTBOURG ELYPSEO' => 'STRASTBOURG ELYPSEO',
                            'THESEE' => 'THESEE',
                            'TOLOSA' => 'TOLOSA',
                            'VILLENEUVE METROPOLE' => 'VILLENEUVE METROPOLE')))
                     ->add('nom')
                     ->add('prenom')
                     ->add('dateembauche', DateType::class, array(
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('personnechargeentretien')
                     ->add('dernierentretien', DateType::class, array('required' => false,
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('dateentretien', DateType::class, array('required' => false,
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('convocationenvoye', DateType::class, array('required' => false,
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('convocationtype', ChoiceType::class, array(
                         'choices' => array(
                             'Mail' => 'Mail',
                             'Papier' => 'Papier'
                         )
                     ))
                     ->add('retourdossier', DateType::class, array('required' => false,
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('progressionpro')
                     ->add('actionformation1')
                     ->add('dateformation1', DateType::class, array('required' => false,
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('actionformation2')
                     ->add('dateformation2', DateType::class, array('required' => false,
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('certification')
                     ->add('objectifsct')
                     ->add('objectifsmlt')
                     ->add('demandeformation1')
                     ->add('dateprevi1', DateType::class, array('required' => false,
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('demandeformation2')
                     ->add('dateprevi2', DateType::class, array('required' => false,
                         'placeholder' => array(
                             'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                         'format' => 'dd-MM-yyyy'))
                     ->add('avisresponsable')
                     ->add('projet', ChoiceType::class, array(
                         'choices' => array(
                             'VAE' => 'VAE',
                             'Bilan de compétences' => 'Bilan de compétences',
                             'CIF' => 'CIF',
                             'CPF' => 'CPF',
                             'CEP' => 'CEP'
                         )
                     ))
                     ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($formulaire);
            $manager->flush();

            $this->addFlash('success', 'Utilisateur enregistré');

            return $this->redirectToRoute('formulaire_create');
        }
        return $this->render('formulaire/create.html.twig', [
            'formUser' => $form->createView(),
            'editMode' => $formulaire->getNom() !== null
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

    /**
     * @Route("/Export", name="formulaire_export")
     */
    public function generateCsvAction(){

        //Connexion à la base de données avec le service database_connection
        $repo = $this->getDoctrine()->getRepository(Formulaire::class);

        //Requête
        $results = $repo->findAll();

        $response = new StreamedResponse();
        $response->setCallback(function() use($results){

            $handle = fopen('c:\\Users\\thomas\\Desktop\\export.csv', 'w+');
            // Nom des colonnes du CSV
            fputcsv($handle, array('ID',
                'Filiaire',
                'Raison sociale société',
                'Intitulé établissement',
                'Nom',
                'Prénom',
                'Date d\'embauche dans la société',
                'Personne en charge de l\'entretien',
                'Dernier entretien professionnel',
                'Date entretien professionnel',
                'Convocation envoyée le',
                'Convocation par : Mail - Papier',
                'Retour du dossier',
                'Progression professionnelle depuis le dernier entretien professionnel',
                'Action de formation réalisée n°1',
                'Date de la formation réalisée n°1',
                'Action de formation réalisée n°2',
                'Date de la formation réalisée n°2',
                'Certification obtenus depuis le dernier entretien',
                'Objectifs professionnels à CT',
                'Objectifs professionnels à MLT',
                'Demande de formation n°1',
                'Date prévisionnelle n°1',
                'Demande de formation n°2',
                'Date prévisionnelle n°2',
                'Avis du responsable',
                'Le collaborateur a-t-il un projet de : VAE, Bilan de compétences, CIF, CPF, CEP'
            ), ';');

            //Champs
            foreach ($results as $index => $result)
            {
                //dump($client);die();
                fputcsv($handle,array(
                    $result->getId(),
                    $result->getFiliaire(),
                    $result->getRaisonsociale(),
                    $result->getEtablissement(),
                    $result->getNom(),
                    $result->getPrenom(),
                    $result->getDateembauche() instanceof \DateTime ? $result->getDateembauche()->format('dd-MM-yyyy') : "",
                    $result->getPersonnechargeentretien(),
                    $result->getDernierentretien() instanceof \DateTime ? $result->getDernierentretien()->format('dd-MM-yyyy') : "",
                    $result->getDateentretien() instanceof \DateTime ? $result->getDateentretien()->format('dd-MM-yyyy') : "",
                    $result->getConvocationenvoye()instanceof \DateTime ? $result->getConvocationenvoye()->format('dd-MM-yyyy') : "",
                    $result->getConvocationtype(),
                    $result->getRetourdossier()instanceof \DateTime ? $result->getRetourdossier()->format('dd-MM-yyyy') : "",
                    $result->getProgressionpro(),
                    $result->getActionformation1(),
                    $result->getDateformation1()instanceof \DateTime ? $result->getDateformation1()->format('dd-MM-yyyy') : "",
                    $result->getActionformation2(),
                    $result->getDateformation2()instanceof \DateTime ? $result->getDateformation2()->format('dd-MM-yyyy') : "",
                    $result->getCertification(),
                    $result->getObjectifsct(),
                    $result->getObjectifsmlt(),
                    $result->getDemandeformation1(),
                    $result->getDateprevi1()instanceof \DateTime ? $result->getDateprevi1()->format('dd-MM-yyyy') : "",
                    $result->getDemandeformation2(),
                    $result->getDateprevi2()instanceof \DateTime ? $result->getDateprevi2()->format('dd-MM-yyyy') : "",
                    $result->getAvisresponsable(),
                    $result->getProjet()
                ),';');
            }
            fclose($handle);
        });


       $response->setStatusCode(200);
       $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
       $response->headers->set('Content-Disposition','attachment; filename="export.csv"');

       return $response;

    }

    /**
     * @Route("/Search", name="formulaire_search")
     */
    public function research(Request $request, EntityManagerInterface $em): Response
    {
        $researchName = $request->request->get("researchName");

        $entretiens = $em->getRepository(Formulaire::class)->findEntretien($researchName);

        return $this->render('formulaire/show.html.twig', [
            'entretiens' => $entretiens,
        ]);
    }
}


