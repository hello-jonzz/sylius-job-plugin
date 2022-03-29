<?php


namespace HelloJonzz\SyliusJobPlugin\Entity;


use Sylius\Component\Channel\Model\ChannelsAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;


interface JobInterface extends ResourceInterface, ChannelsAwareInterface //, TranslatableInterface
{

}
