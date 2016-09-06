<?php

namespace WM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_one")
 * @UniqueEntity(fields = "username", targetClass = "WM\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "WM\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class UserOne extends User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

//         Si on veut faire dépendre l'inscription par une invitation
//    /**
//     * @ORM\OneToOne(targetEntity="Invitation")
//     * @ORM\JoinColumn(referencedColumnName="code", nullable=true)
//     * @Assert\NotNull(message="Vous vous inscrivez sans invitations", groups={"Registration"})
//     */
//    protected $invitation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $phone;

    public function __construct()
    {
       parent::__construct();
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return UserOne
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function setRoles(array $roles)
    {
        $this->roles = array('ROLE_USERONE');
        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set invitation
     *
     * @param \WM\UserBundle\Entity\Invitation $invitation
     *
     * @return UserOne
     */
    public function setInvitation(\WM\UserBundle\Entity\Invitation $invitation = null)
    {
        $this->invitation = $invitation;

        return $this;
    }

    /**
     * Get invitation
     *
     * @return \WM\UserBundle\Entity\Invitation
     */
    public function getInvitation()
    {
        return $this->invitation;
    }

}
