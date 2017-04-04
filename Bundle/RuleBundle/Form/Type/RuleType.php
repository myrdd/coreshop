<?php

namespace CoreShop\Bundle\RuleBundle\Form\Type;

use CoreShop\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RuleType extends AbstractResourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'coreshop.form.rule.name',
            ])
            ->add('conditions', RuleConditionCollectionType::class, [
                'label' => 'coreshop.form.rule.conditions'
            ])
            ->add('actions', RuleActionCollectionType::class, [
                'label' => 'coreshop.form.rule.actions'
            ])
            ->add('active', CheckboxType::class, [
                'label' => 'coreshop.form.rule.name',
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'coreshop_rule';
    }
}
