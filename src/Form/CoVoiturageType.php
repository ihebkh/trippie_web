<?php

namespace App\Form;

use App\Entity\CoVoiturage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class CoVoiturageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add(
                'depart',
                ChoiceType::class,
                array(
                    'choices' => array(
                        'Ariena' => 'Ariena',
                        'Bizerte' => 'Bizerte',
                        'Beja' => 'Beja',
                        'Tunis' => 'Tunis',
                        'Ben aarouse' => 'Ben aarouse',
                        'Jandouba' => 'Jandouba',
                        'Gabes' => 'Gabes',
                    )
                )
            )

            ->add(
                'destination',
                ChoiceType::class,
                array(
                    'choices' => array(
                        'Ariena' => 'Ariena',
                        'Bizerte' => 'Bizerte',
                        'Beja' => 'Beja',
                        'Tunis' => 'Tunis',
                        'Ben aarouse' => 'Ben aarouse',
                        'Jandouba' => 'Jandouba',
                        'Gabes' => 'Gabes',
                    )
                )
            )
            ->add('date_dep', DateTimeType::class, [
                'label' => 'Departure Date and Time',
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'yyyy-MM-dd HH:mm:ss',
            ])
            ->add('nmbr_place', IntegerType::class, [
                'label' => 'Number of seats',
            ])
            ->add('cov_img', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1000024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPEG or PNG image',
                    ])
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CoVoiturage::class,
        ]);
    }
}
