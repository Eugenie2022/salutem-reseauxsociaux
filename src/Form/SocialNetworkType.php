<?php

namespace App\Form;

use App\Entity\SocialNetwork;
use Awps\FontAwesome;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocialNetworkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $icons = new FontAwesome();

        $builder
            ->add('name')
            ->add('icon', ChoiceType::class, [
                'choices' =>  $icons->getCssClasses()
            ])


            ->add('link')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SocialNetwork::class,
        ]);
    }
}
