<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Sonata\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationType extends BaseType
{
	/**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        parent::__construct($class);
    }
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder->add('lastname', 'text');
        $builder->add('firstname', 'text');
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}