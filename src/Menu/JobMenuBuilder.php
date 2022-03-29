<?php


namespace HelloJonzz\SyliusJobPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

class JobMenuBuilder
{
    public function buildMenu(MenuBuilderEvent $menuBuilderEvent): void
    {
        $menu = $menuBuilderEvent->getMenu();

        $cmsRootMenuItem = $menu
            ->addChild('hello_jonzz_sylius_job_plugin')
            ->setLabel('hello_jonzz_sylius_job_plugin.ui.job')
        ;

        $cmsRootMenuItem
            ->addChild('blocks', [
                'route' => 'hello_jonzz_sylius_job_plugin_admin_job_index',
            ])
            ->setLabel('hello_jonzz_sylius_job_plugin.ui.jobs')
            ->setLabelAttribute('icon', 'block layout')
        ;

    }
}
