<?php

namespace App\Entity;

use App\Repository\ShippingsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShippingsRepository::class)]
class Shippings
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 120)]
    private ?string $direccion = null;

    #[ORM\Column]
    private ?int $portal = null;

    #[ORM\Column(length: 80)]
    private ?string $nombreCalle = null;

    #[ORM\Column]
    private ?int $piso = null;

    #[ORM\Column]
    private ?int $codigoPostal = null;

    #[ORM\Column(length: 90)]
    private ?string $ciudad = null;

    #[ORM\Column(length: 70)]
    private ?string $provincia = null;

    #[ORM\Column(length: 60)]
    private ?string $pais = null;

    #[ORM\Column(length: 9)]
    private ?string $telefono = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $observaciones = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getPortal(): ?int
    {
        return $this->portal;
    }

    public function setPortal(int $portal): self
    {
        $this->portal = $portal;

        return $this;
    }

    public function getNombreCalle(): ?string
    {
        return $this->nombreCalle;
    }

    public function setNombreCalle(string $nombreCalle): self
    {
        $this->nombreCalle = $nombreCalle;

        return $this;
    }

    public function getPiso(): ?int
    {
        return $this->piso;
    }

    public function setPiso(int $piso): self
    {
        $this->piso = $piso;

        return $this;
    }

    public function getCodigoPostal(): ?int
    {
        return $this->codigoPostal;
    }

    public function setCodigoPostal(int $codigoPostal): self
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }
}
