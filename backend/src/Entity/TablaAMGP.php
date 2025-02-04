<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "secretosAMGP")]
class TablaAMGP
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;
    #[ORM\Column(type: "string", length: 255)]
    private string $fraseAMGP;
    public function getId(): int
    {
        return $this->id;
    }
    public function getFraseAMGP(): string
    {
        return $this->fraseAMGP;
    }
    public function setFraseAMGP(string $fraseAMGP): self
    {
        $this->fraseAMGP = $fraseAMGP;
        return $this;
    }
}
