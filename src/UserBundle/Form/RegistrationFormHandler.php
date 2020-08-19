<?php

namespace UserBundle\Form;
use FOS\UserBundle\Model\UserInterface;
use Sonata\UserBundle\Form\Handler\RegistrationFormHandler as BaseHandler;
use Application\Sonata\UserBundle\Entity\User;

class RegistrationFormHandler extends BaseHandler 
{
    public function process($user)
    {
        $this->form->setData($user);
        if ('POST' == $this->request->getMethod()) {
            $this->form->bindRequest($this->request);
            $this->userManager->reloadUser($user);
        }
        return false;
    }

    protected function onSuccess(UserInterface $user)
    {
        $this->userManager->updateUser($user);
    }
}