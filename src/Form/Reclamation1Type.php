<?php

namespace App\Form;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints\File as AssertFile;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Reclamation1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class,
            array(
                'choices' => array(
                    'Technique' => 'Technique',
                    'Other' => 'Other',

                )))
            ->add('commentaire')
            ->add('date_creation')

            ->add('image', FileType::class, [
                'label' => 'Image (JPG, JPEG, PNG or GIF file)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new AssertFile([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file (JPG, JPEG, PNG or GIF)',
                    ])
                ],
            ])
            
            
          
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
