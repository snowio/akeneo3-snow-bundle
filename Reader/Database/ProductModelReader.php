<?php

namespace Snowio\Bundle\CsvConnectorBundle\Reader\Database;

use Akeneo\Pim\Enrichment\Component\Product\Connector\Reader\Database\ProductReader as BaseProductModelReader;

class ProductModelReader extends BaseProductModelReader
{
    use UpdatedFilterTrait;
    const PARTIAL_EXPORT = "partial_export";

    /**
     * Force the updated filter iff the export is a partial export
     * @author Alex Wanyoike <amw@amp.co>
     * @return array
     */
    protected function getConfiguredFilters()
    {

        $jobName = $this->stepExecution
            ->getJobExecution()
            ->getJobInstance()
            ->getJobName();

        if ($jobName !== self::PARTIAL_EXPORT) {
            return [];
        }

        return $this->updateConfiguredFilters([]);
    }
}
