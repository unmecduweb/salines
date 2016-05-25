<?php

namespace LL\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('name','text',[
                'label' => 'Nom du produit'
            ])
            ->add('priceHt', 'money',[
                'label'=>'Prix HT / unité',
            ])
            
            ->add('unity', ChoiceType::class, array(
                'choices' => array('Kilogramme' => 'kg', 'Litre' => 'L', 'Pièce'=>'Pièce', 'Pour mémoire'=> 'PM'),
                'label'=>'Unité',
                // always include this
                'choices_as_values' => true
            ))
            
            ->add('category', ChoiceType::class, array(
                'label'=>'Catégorie',
                'choices' => array(
                    'BOF' => 'BOF',
                    'Viandes'=> "Viandes",
                    'Poissons' =>"Poissons",
                    'Charcuteries' =>'Charcuteries',
                    'Fruits/Légumes' =>'Fruits/Légumes',
                    'Pauses' =>'Pauses',
                    'Pains' =>'Pains',
                    'Softs' =>'Softs',
                    'Alcools' =>'Alcools',
                    'Vins régionaux' =>'Vins régionaux',
                    'Vins UNESCO' =>'Vins UNESCO',
                    'Autres vins' =>'Autres vins',
                    'Bar' =>'Bar',
                    'Autres' =>'Autres'
                ),
                // always include this
                'choices_as_values' => true
            ))
            ->add('isAllergen', ChoiceType::class, array(
                'choices' => array('non' => 0, 'oui'=>1),
                'label'=>'Produit allergène',
                "expanded" =>true,
                
                // always include this
                'choices_as_values' => true
            ))
                
            ->add('provider', 'entity', [
                'expanded' => false,
                'label'=>'Fournisseurs',
                'class' => 'LL\CoreBundle\Entity\Provider',
//                'query_builder' => function ($em) {
//                    return $em->findAll();
//                },
//                'multiple' => true,
                'attr' => ['field_class' => 'checkbox-button facility-check']
            ])
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LL\CoreBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'll_product';
    }
}
