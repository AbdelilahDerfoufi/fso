<?php

namespace App\Entity;

use App\Repository\InterventionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InterventionRepository::class)]
class Intervention
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    #[ORM\Column(type: 'string', length: 255)]
    private $descriptif_panne;


    #[ORM\Column(type: 'string', length: 255)]
    private $status;

    #[ORM\Column(type: 'datetime')]
    private $date_creation;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $date_fin;

    #[ORM\Column(type: 'string', length: 255)]
    private $lieu;


    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $descriptif_intervention;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $remarque;

    #[ORM\Column(type: 'string', length: 255)]
    private $num_intervention;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'interventions')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[ORM\ManyToOne(targetEntity: Departement::class, inversedBy: 'interventions')]
    #[ORM\JoinColumn(nullable: false)]
    private $departement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescriptifPanne()
    {
        return $this->descriptif_panne;
    }

    /**
     * @param mixed $descriptif_panne
     */
    public function setDescriptifPanne($descriptif_panne): void
    {
        $this->descriptif_panne = $descriptif_panne;
    }

//    public function getObjet(): ?string
//    {
//        return $this->objet;
//    }
//
//    public function setObjet(string $objet): self
//    {
//        $this->objet = $objet;
//
//        return $this;
//    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(?\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    

    public function getDescriptifIntervention(): ?string
    {
        return $this->descriptif_intervention;
    }

    public function setDescriptifIntervention(?string $descriptif_intervention): self
    {
        $this->descriptif_intervention = $descriptif_intervention;

        return $this;
    }

    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    public function setRemarque(?string $remarque): self
    {
        $this->remarque = $remarque;

        return $this;
    }

    public function getNumIntervention(): ?string
    {
        return $this->num_intervention;
    }

    public function setNumIntervention(string $num_intervention): self
    {
        $this->num_intervention = $num_intervention;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getDepartement(): ?Departement
    {
        return $this->departement;
    }

    public function setDepartement(?Departement $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

}

