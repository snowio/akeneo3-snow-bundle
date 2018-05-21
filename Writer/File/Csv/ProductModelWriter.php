<?php

namespace Snowio\Bundle\CsvConnectorBundle\Writer\File\Csv;

use Pim\Component\Connector\Writer\File\Csv\VariantGroupWriter as BaseVariantGroupWriter;

class ProductModelWriter extends BaseVariantGroupWriter
{
    use WriterOverriderTrait;
}
