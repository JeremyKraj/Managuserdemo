<?php


namespace WM\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationUserOneFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//         Si on veut faire dépendre l'inscription par une invitation
//         $builder->add('invitation', 'WM\UserBundle\Form\Type\InvitationFormType');
         $builder->add('phone');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}