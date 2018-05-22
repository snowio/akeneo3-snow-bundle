<?php

namespace Snowio\Bundle\CsvConnectorBundle\Writer\File\Csv;

use Pim\Component\Connector\Writer\File\Csv\ProductModelWriter as BaseProductModelWriter;

class ProductModelWriter extends BaseProductModelWriter
{
    use WriterOverriderTrait;
}
