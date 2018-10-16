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
    private $dateprecentretien;

    /**
     * @ORM\Column(type="date")
     */
    private $dateentretien;

    /**
     * @ORM\Column(type="text")
     */
    private $motifentretien;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $conge;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $absence;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateprecentretien(): ?\DateTimeInterface
    {
        return $this->dateprecentretien;
    }

    public function setDateprecentretien(?\DateTimeInterface $dateprecentretien): self
    {
        $this->dateprecentretien = $dateprecentretien;

        return $this;
    }

    public function getDateentretien(): ?\DateTimeInterface
    {
        return $this->dateentretien;
    }

    public function setDateentretien(\DateTimeInterface $dateentretien): self
    {
        $this->dateentretien = $dateentretien;

        return $this;
    }

    public function getMotifentretien(): ?string
    {
        return $this->motifentretien;
    }

    public function setMotifentretien(string $motifentretien): self
    {
        $this->motifentretien = $motifentretien;

        return $this;
    }

    public function getConge(): ?\DateTimeInterface
    {
        return $this->conge;
    }

    public function setConge(?\DateTimeInterface $conge): self
    {
        $this->conge = $conge;

        return $this;
    }

    public function getAbsence(): ?\DateTimeInterface
    {
        return $this->absence;
    }

    public function setAbsence(?\DateTimeInterface $absence): self
    {
        $this->absence = $absence;

        return $this;
    }
}
