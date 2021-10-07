<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $contenu;

    /**
     * @ORM\Column(type="date")
     */
    private $datePublication;

    /**
     * @ORM\OneToOne(targetEntity=Utilisateur::class, mappedBy="commentaire", cascade={"persist", "remove"})
     */
    private $utilisateur;

    /**
     * @ORM\OneToOne(targetEntity=Article::class, mappedBy="commentaire", cascade={"persist", "remove"})
     */
    private $article;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(\DateTimeInterface $datePublication): self
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(Utilisateur $utilisateur): self
    {
        // set the owning side of the relation if necessary
        if ($utilisateur->getCommentaire() !== $this) {
            $utilisateur->setCommentaire($this);
        }

        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(Article $article): self
    {
        // set the owning side of the relation if necessary
        if ($article->getCommentaire() !== $this) {
            $article->setCommentaire($this);
        }

        $this->article = $article;

        return $this;
    }
}
