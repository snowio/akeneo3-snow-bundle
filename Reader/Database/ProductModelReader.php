<?php

namespace Snowio\Bundle\CsvConnectorBundle\Reader\Database;

use Pim\Component\Connector\Reader\Database\ProductReader as BaseProductModelReader;

class ProductModelReader extends BaseProductModelReader
{
    protected function getConfiguredFilters()
    {
        return [];
    }
}
