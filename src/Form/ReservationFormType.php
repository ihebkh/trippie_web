<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank ;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ReservationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateDebut', DateTimeType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Date non valide'
                    ]),
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date doit être dans le futur'
                    ])
                ],
                'date_widget' => 'single_text',
                'date_format' => 'yyyy-MM-dd'
            ])
            ->add('dateFin', DateTimeType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Date non valide'
                    ]),
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date doit être dans le futur'
                    ])
                ],
                'date_widget' => 'single_text',
                'date_format' => 'yyyy-MM-dd'
            ])

            ->add('Voiture', HiddenType::class, [
                'data' => $options['id'],
                'mapped' => false,

            ]);
        /*
          ->add('voiture',EntityType::class,[
                'class'=>Voiture::class,
                'choice_label'=>'name'
                //'multiple'=>True
            ])
         */





    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('id');
        $resolver->setDefaults([
            'data_class' => Reservation::class,
            'id' => null,
        ]);
    }
}