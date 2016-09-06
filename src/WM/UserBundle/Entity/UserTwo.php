<?php

namespace WM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_two")
 * @UniqueEntity(fields = "username", targetClass = "WM\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "WM\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class UserTwo extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $structure;

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Set structure
     *
     * @param string $structure
     *
     * @return UserTwo
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;

        return $this;
    }

    public function setRoles(array $roles)
    {
        $this->roles = array('ROLE_USERTWO');
        return $this;
    }


    /**
     * Get structure
     *
     * @return string
     */
    public function getStructure()
    {
        return $this->structure;
    }
}
