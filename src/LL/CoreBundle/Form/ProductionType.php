<?php

namespace LL\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProductionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('name', 'text',[
                'label' => 'Nom de la fiche'
            ])
                
            ->add('nbPerson', 'integer',[
                'label' => 'Nombre personne prévue pour la fiche'
            ]) 
            
            ->add('category',  ChoiceType::class, array(
                'choices' => array('Entrée'=>"entrée", 'Plat'=> 'plat', 'Fromage'=>"fromage", 'Déssert'=>"déssert", 'Pause'=>"pause", "Pain"=>"pain", "Boisson"=>"boisson", "Brasserie"=>"brasserie"),
                'empty_value'=>'Séléctionner une catégorie',
                'label' => 'Catégorie de la fiche',
                
                'choices_as_values' => true

            ))
                
            ->add('productQuantity', 'collection', [
                'label' => 'Produits de la fiche',
                'type' => new ProductQuantityType(),
                'allow_add' => true,
                'prototype' => true,
                'prototype_name' => 'tag__name__',
                'allow_delete' => true
            ])
                
            ->add('priceSellingHt', 'money',[
                'label'=>'Prix de vente du produit (Facultatif)',
                'required' => false
            ])
            
                
            ->add('author', 'text',[
                'label' => 'Auteur de la fiche',
                'required' => false
            ])
            ->add('description', 'textarea',[
                'label' => 'Description de la fiche',
                'required' => false
            ])
            ->add('materiels', 'textarea',[
                'label' => 'Matériels à utilisé',
                'required' => false
            ])
            ->add('productionStep', 'textarea',[
                'label' => 'Etapes de fabrication',
                'required' => false
            ])
            ->add('preparationTime', 'time',[
                
                'label' => 'Temps de préparation',
                'required' => false
            ])
            ->add('cookingTime', 'time',[
                
                'label' => 'Temps de cuisson',
                'required' => false
            ])
            
            
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LL\CoreBundle\Entity\Production'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'll_production';
    }
}
