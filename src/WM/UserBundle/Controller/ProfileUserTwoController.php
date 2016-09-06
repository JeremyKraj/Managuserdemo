<?php

namespace WM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileUserTwoController extends Controller
{
    public function profileAction()
    {
        return $this->container
            ->get('pugx_multi_user.profile_manager')
            ->edit('WM\UserBundle\Entity\UserTwo');
    }
}