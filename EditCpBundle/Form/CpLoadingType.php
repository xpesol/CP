<?php

namespace FCS\CP\EditCpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CpLoadingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
		->add('ref', TextType::class)
		->add('loadingAddress', TextareaType::class)
		->add('loadingContact', TextType::class)
		->add('deliveryContact', TextareaType::class)
		->add('remarks', TextareaType::class)
		->add('loadingEstimatedDate', TextType::class)
		->add('loadingEstimatedTime', TextType::class)
		->add('deliveryEstimatedDate', TextType::class)
		->add('deliveryEstimatedTime', TextType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FCS\CP\EditCpBundle\Entity\CpLoading'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fcs_cp_editcpeditbundle_cploading';
    }


}
