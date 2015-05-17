<?php

namespace Robin\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< HEAD
 * Project
=======
 * Project.
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Robin\PortfolioBundle\Entity\ProjectRepository")
 */
class Project
{
    /**
<<<<<<< HEAD
     * @var integer
=======
     * @var int
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
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
     * Get id
     *
     * @return integer
=======
    /**
     * Get id.
     *
     * @return int
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
     */
    public function getId()
    {
        return $this->id;
    }

    /**
<<<<<<< HEAD
     * Set name
     *
     * @param string $name
=======
     * Set name.
     *
     * @param string $name
     *
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get name
=======
     * Get name.
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
<<<<<<< HEAD
     * Set description
     *
     * @param string $description
=======
     * Set description.
     *
     * @param string $description
     *
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get description
=======
     * Get description.
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
<<<<<<< HEAD
     * Set outils
     *
     * @param string $outils
=======
     * Set outils.
     *
     * @param string $outils
     *
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
     * @return Project
     */
    public function setOutils($outils)
    {
        $this->outils = $outils;

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get outils
=======
     * Get outils.
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
     *
     * @return string
     */
    public function getOutils()
    {
        return $this->outils;
    }

    /**
<<<<<<< HEAD
     * Set class
     *
     * @param string $class
=======
     * Set class.
     *
     * @param string $class
     *
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
     * @return Project
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get class
=======
     * Get class.
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
}
