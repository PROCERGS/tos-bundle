<?php
/*
 *  This file is part of the login-cidadao project or it's bundles.
 *
 *  (c) Guilherme Donato <guilhermednt on github>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace LoginCidadao\TOSBundle\Form;

use LoginCidadao\TOSBundle\Entity\Agreement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgreementType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('agreedAt', AgreementDateType::class, [
            'label' => 'tos.form.agreed_at.label',
            'required' => true,
            'invalid_message' => 'tos.form.agreed_at.error',
        ]);
    }

    /**
     * @inheritDoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Agreement::class,
            'translation_domain' => 'LoginCidadaoTOSBundle',
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'logincidadao_tosbundle_agreement';
    }
}
