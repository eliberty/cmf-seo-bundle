<?php

use Sonata\SeoBundle\SonataSeoBundle;
use Symfony\Cmf\Bundle\SeoBundle\CmfSeoBundle;
use Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle;
use Symfony\Cmf\Bundle\CoreBundle\CmfCoreBundle;

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2017 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
return [
    SonataSeoBundle::class => ['all' => true],
    CmfSeoBundle::class => ['all' => true],
    CmfRoutingBundle::class => ['all' => true],
    CmfCoreBundle::class => ['all' => true],
];
