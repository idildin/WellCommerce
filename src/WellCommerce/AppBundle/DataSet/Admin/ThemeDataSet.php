<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\AppBundle\DataSet\Admin;

use WellCommerce\Component\DataSet\Configurator\DataSetConfiguratorInterface;
use WellCommerce\CoreBundle\DataSet\AbstractDataSet;

/**
 * Class ThemeDataSet
 *
 * @author Adam Piotrowski <adam@wellcommerce.org>
 */
class ThemeDataSet extends AbstractDataSet
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(DataSetConfiguratorInterface $configurator)
    {
        $configurator->setColumns([
            'id'     => 'theme.id',
            'name'   => 'theme.name',
            'folder' => 'theme.folder',
        ]);
    }
}
