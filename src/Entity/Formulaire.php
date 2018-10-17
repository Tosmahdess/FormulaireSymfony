<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormulaireRepository")
 */
class Formulaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $filiaire;

    /**
     * @ORM\Column(type="text")
     */
    private $raisonsociale;

    /**
     * @ORM\Column(type="text")
     */
    private $etablissement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateembauche;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $personnechargeentretien;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dernierentretien;

    /**
     * @ORM\Column(type="date")
     */
    private $dateentretien;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $convocationenvoye;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $convocationtype;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $retourdossier;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $progressionpro;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $actionformation1;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateformation1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $actionformation2;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateformation2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $certification;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $objectifsct;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $objectifsmlt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $demandeformation1;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateprevi1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $demandeformation2;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateprevi2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $avisresponsable;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $projet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFiliaire(): ?string
    {
        return $this->filiaire;
    }

    public function setFiliaire(string $filiaire): self
    {
        $this->filiaire = $filiaire;

        return $this;
    }

    public function getRaisonsociale(): ?string
    {
        return $this->raisonsociale;
    }

    public function setRaisonsociale(string $raisonsociale): self
    {
        $this->raisonsociale = $raisonsociale;

        return $this;
    }

    public function getEtablissement(): ?string
    {
        return $this->etablissement;
    }

    public function setEtablissement(string $etablissement): self
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateembauche(): ?\DateTimeInterface
    {
        return $this->dateembauche;
    }

    public function setDateembauche(?\DateTimeInterface $dateembauche): self
    {
        $this->dateembauche = $dateembauche;

        return $this;
    }

    public function getPersonnechargeentretien(): ?string
    {
        return $this->personnechargeentretien;
    }

    public function setPersonnechargeentretien(?string $personnechargeentretien): self
    {
        $this->personnechargeentretien = $personnechargeentretien;

        return $this;
    }

    public function getDernierentretien(): ?\DateTimeInterface
    {
        return $this->dernierentretien;
    }

    public function setDernierentretien(?\DateTimeInterface $dernierentretien): self
    {
        $this->dernierentretien = $dernierentretien;

        return $this;
    }

    public function getDateentretien(): ?\DateTimeInterface
    {
        return $this->dateentretien = new \DateTime();
    }

    public function setDateentretien(\DateTimeInterface $dateentretien): self
    {
        $this->dateentretien = $dateentretien;

        return $this;
    }

    public function getConvocationenvoye(): ?\DateTimeInterface
    {
        return $this->convocationenvoye;
    }

    public function setConvocationenvoye(?\DateTimeInterface $convocationenvoye): self
    {
        $this->convocationenvoye = $convocationenvoye;

        return $this;
    }

    public function getConvocationtype(): ?string
    {
        return $this->convocationtype;
    }

    public function setConvocationtype(?string $convocationtype): self
    {
        $this->convocationtype = $convocationtype;

        return $this;
    }

    public function getRetourdossier(): ?\DateTimeInterface
    {
        return $this->retourdossier;
    }

    public function setRetourdossier(?\DateTimeInterface $retourdossier): self
    {
        $this->retourdossier = $retourdossier;

        return $this;
    }

    public function getProgressionpro(): ?string
    {
        return $this->progressionpro;
    }

    public function setProgressionpro(?string $progressionpro): self
    {
        $this->progressionpro = $progressionpro;

        return $this;
    }

    public function getActionformation1(): ?string
    {
        return $this->actionformation1;
    }

    public function setActionformation1(?string $actionformation1): self
    {
        $this->actionformation1 = $actionformation1;

        return $this;
    }

    public function getDateformation1(): ?\DateTimeInterface
    {
        return $this->dateformation1;
    }

    public function setDateformation1(?\DateTimeInterface $dateformation1): self
    {
        $this->dateformation1 = $dateformation1;

        return $this;
    }

    public function getActionformation2(): ?string
    {
        return $this->actionformation2;
    }

    public function setActionformation2(?string $actionformation2): self
    {
        $this->actionformation2 = $actionformation2;

        return $this;
    }

    public function getDateformation2(): ?\DateTimeInterface
    {
        return $this->dateformation2;
    }

    public function setDateformation2(?\DateTimeInterface $dateformation2): self
    {
        $this->dateformation2 = $dateformation2;

        return $this;
    }

    public function getCertification(): ?string
    {
        return $this->certification;
    }

    public function setCertification(?string $certification): self
    {
        $this->certification = $certification;

        return $this;
    }

    public function getObjectifsct(): ?string
    {
        return $this->objectifsct;
    }

    public function setObjectifsct(?string $objectifsct): self
    {
        $this->objectifsct = $objectifsct;

        return $this;
    }

    public function getObjectifsmlt(): ?string
    {
        return $this->objectifsmlt;
    }

    public function setObjectifsmlt(?string $objectifsmlt): self
    {
        $this->objectifsmlt = $objectifsmlt;

        return $this;
    }

    public function getDemandeformation1(): ?string
    {
        return $this->demandeformation1;
    }

    public function setDemandeformation1(?string $demandeformation1): self
    {
        $this->demandeformation1 = $demandeformation1;

        return $this;
    }

    public function getDateprevi1(): ?\DateTimeInterface
    {
        return $this->dateprevi1;
    }

    public function setDateprevi1(?\DateTimeInterface $dateprevi1): self
    {
        $this->dateprevi1 = $dateprevi1;

        return $this;
    }

    public function getDemandeformation2(): ?string
    {
        return $this->demandeformation2;
    }

    public function setDemandeformation2(?string $demandeformation2): self
    {
        $this->demandeformation2 = $demandeformation2;

        return $this;
    }

    public function getDateprevi2(): ?\DateTimeInterface
    {
        return $this->dateprevi2;
    }

    public function setDateprevi2(?\DateTimeInterface $dateprevi2): self
    {
        $this->dateprevi2 = $dateprevi2;

        return $this;
    }

    public function getAvisresponsable(): ?string
    {
        return $this->avisresponsable;
    }

    public function setAvisresponsable(?string $avisresponsable): self
    {
        $this->avisresponsable = $avisresponsable;

        return $this;
    }

    public function getProjet(): ?string
    {
        return $this->projet;
    }

    public function setProjet(?string $projet): self
    {
        $this->projet = $projet;

        return $this;
    }
}
