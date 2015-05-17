<?php
<<<<<<< HEAD
// src/Acme/UserBundle/Entity/User.php

=======

// src/Acme/UserBundle/Entity/User.php


>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
namespace Robin\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< HEAD
* @ORM\Entity
* @ORM\Table(name="fos_user")
*/
class User extends BaseUser
{
  /**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  protected $id;

  public function __construct()
  {
    parent::__construct();
    // your own logic
  }
=======
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

    public function __construct()
    {
        parent::__construct();
    // your own logic
    }
>>>>>>> 9652dbc0f473744fff092f7ee6737f947ed4d7cf
}
