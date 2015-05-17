<?php

namespace Robin\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< HEAD
 * Project.
=======
 * Project
>>>>>>> github
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Robin\PortfolioBundle\Entity\ProjectRepository")
 */
class Project
{
    /**
<<<<<<< HEAD
     * @var int
=======
     * @var integer
>>>>>>> github
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="outils", type="string", length=255)
     */
    private $outils;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;

<<<<<<< HEAD
    /**
     * Get id.
     *
     * @return int
=======

    /**
     * Get id
     *
     * @return integer
>>>>>>> github
     */
    public function getId()
    {
        return $this->id;
    }

    /**
<<<<<<< HEAD
     * Set name.
     *
     * @param string $name
     *
=======
     * Set name
     *
     * @param string $name
>>>>>>> github
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get name.
=======
     * Get name
>>>>>>> github
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
<<<<<<< HEAD
     * Set description.
     *
     * @param string $description
     *
=======
     * Set description
     *
     * @param string $description
>>>>>>> github
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get description.
=======
     * Get description
>>>>>>> github
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
<<<<<<< HEAD
     * Set outils.
     *
     * @param string $outils
     *
=======
     * Set outils
     *
     * @param string $outils
>>>>>>> github
     * @return Project
     */
    public function setOutils($outils)
    {
        $this->outils = $outils;

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get outils.
=======
     * Get outils
>>>>>>> github
     *
     * @return string
     */
    public function getOutils()
    {
        return $this->outils;
    }

    /**
<<<<<<< HEAD
     * Set class.
     *
     * @param string $class
     *
=======
     * Set class
     *
     * @param string $class
>>>>>>> github
     * @return Project
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get class.
=======
     * Get class
>>>>>>> github
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
}
