<?php

namespace App\Form;

use Onlinq\FormCollectionBundle\Form\OnlinqCollectionType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class FruitsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fruits', OnlinqCollectionType::class, [
                'label' => 'Enter your favorite fruits:',
                'entry_type' => TextType::class,
                'entry_options' => [
                    'label' => false,
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'allow_move' => true,
            ])
        ;
    }
}
