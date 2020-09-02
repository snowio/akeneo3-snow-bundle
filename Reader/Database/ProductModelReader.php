<?php

namespace Snowio\Bundle\CsvConnectorBundle\Reader\Database;

use Akeneo\Pim\Enrichment\Component\Product\Connector\Reader\Database\ProductReader as BaseProductModelReader;

class ProductModelReader extends BaseProductModelReader
{
    protected function getConfiguredFilters()
    {
        if ($this->stepExecution->getJobExecution()->getJobInstance()->getJobName() === "partial_export") {
            return [
                [
                    "field" => "updated",
                    "operator" => "SINCE LAST JOB",
                    "value" => $this->stepExecution
                        ->getJobExecution()
                        ->getJobInstance()
                        ->getCode()
                ]
            ];
        }
        return [];
    }
}
