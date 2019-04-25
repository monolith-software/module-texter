<?php

namespace Monolith\Module\Texter\Form\Type;

use Monolith\Bundle\CMSBundle\Module\AbstractNodePropertiesFormType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;

class NodePropertiesFormType extends AbstractNodePropertiesFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text_item_id', IntegerType::class, ['attr' => ['autofocus' => 'autofocus']]) // 'integer'
            ->add('editor', CheckboxType::class,      ['required' => false]) // 'checkbox'
        ;
    }

    public function getBlockPrefix()
    {
        return 'monolith_module_texter_node_properties';
    }
}
