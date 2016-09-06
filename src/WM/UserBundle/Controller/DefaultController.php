<?php

namespace WM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WMUserBundle:Default:index.html.twig');
    }
    
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/login_ok/", name="login_ok")
     * @Security("has_role('ROLE_USER')")
     */
    public function ShowinfosuserAction(){

        return $this->render('WMUserBundle:Identification:login_success.html.twig');

    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route"'/user/", name="user_info")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function ShowUserAction() {

        if($this->get('security.authorization_checker')->isGranted('ROLE_USERONE')){
        return $this->render('WMUserBundle:UserOne:profil.html.twig');}

        if($this->get ('security.authorization_checker')->isGranted('ROLE_USERTWO')){
        return $this->render('WMUserBundle:UserTwo:profil.html.twig');
        }
    }

    /**
     *
     * @/Route("/who-is-user", name"user_question")
     *
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
   public function determineUser(){
       return $this->render('WMUserBundle:utilisateur.html.twig');
   }

}
