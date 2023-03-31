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

class CoVoiturageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('depart', TextType::class, [
                'label' => 'Departure',
            ])
            ->add('destination', TextType::class, [
                'label' => 'Destination',
            ])
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
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CoVoiturage::class,
        ]);
    }
}
