<?php

namespace App\Entity;

use App\Repository\EmpresasRepartosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpresasRepartosRepository::class)]
class EmpresasRepartos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nombre = null;

    #[ORM\Column(length: 140)]
    private ?string $direccion = null;

    #[ORM\Column(length: 100)]
    private ?string $email = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $email_verified_at = null;

    #[ORM\Column(length: 9)]
    private ?string $telefono = null;

    #[ORM\Column(length: 255)]
    private ?string $imagen = null;

    #[ORM\Column]
    private ?float $coste_pedido_normal = null;

    #[ORM\Column]
    private ?float $coste_pedido_urgente = null;

    #[ORM\Column(nullable: true)]
    private ?bool $deleted = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmailVerifiedAt(): ?\DateTimeImmutable
    {
        return $this->email_verified_at;
    }

    public function setEmailVerifiedAt(?\DateTimeImmutable $email_verified_at): self
    {
        $this->email_verified_at = $email_verified_at;

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

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getCostePedidoNormal(): ?float
    {
        return $this->coste_pedido_normal;
    }

    public function setCostePedidoNormal(float $coste_pedido_normal): self
    {
        $this->coste_pedido_normal = $coste_pedido_normal;

        return $this;
    }

    public function getCostePedidoUrgente(): ?float
    {
        return $this->coste_pedido_urgente;
    }

    public function setCostePedidoUrgente(float $coste_pedido_urgente): self
    {
        $this->coste_pedido_urgente = $coste_pedido_urgente;

        return $this;
    }

    public function isDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(?bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }
}
