<?php

namespace LL\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductQuantityType extends AbstractType
{
    
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('quantity')
            ->add('product', 'entity', [
                'class' => 'LLCoreBundle:Product',
            ])
    
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LL\CoreBundle\Entity\ProductQuantity'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'll_product_quantity';
    }
}
