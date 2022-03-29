<?php


namespace HelloJonzz\SyliusJobPlugin\Form\Type;


use Sylius\Bundle\ChannelBundle\Form\Type\ChannelChoiceType;
use Sylius\Bundle\CustomerBundle\Form\Type\CustomerGroupChoiceType;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\FormBuilderInterface;

class JobType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code')
            ->add('title')
            ->add('description')
            ->add('channels', ChannelChoiceType::class, [
                'multiple' => true,
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'hello_jonzz_sylius_job_plugin_job';
    }
}
