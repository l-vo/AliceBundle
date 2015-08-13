<?php

namespace Hautelook\AliceBundle\Tests\SymfonyApp\TestBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Doctrine\DataFixtures\AbstractLoader;

class DataLoader extends AbstractLoader
{
    /**
     * {@inheritdoc}
     */
    public function getFixtures()
    {
        return array(
            __DIR__.'/brand.yml',
            __DIR__.'/product.yml',
        );
    }
}
