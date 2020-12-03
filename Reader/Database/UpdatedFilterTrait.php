<?php
namespace Snowio\Bundle\CsvConnectorBundle\Reader\Database;

use Akeneo\Pim\Enrichment\Component\Product\Query\Filter\Operators;

trait UpdatedFilterTrait
{
    /**
     * Apply filter to configured filters by force
     * @param array $configuredFilters
     * @return array
     * @author Alex Wanyoike <amw@amp.co>
     */
    private function updateConfiguredFilters(array $configuredFilters)
    {
        $filters = array_filter($configuredFilters, function ($item) {
            return $item["field"] !== "updated";
        });
        return array_merge([
            [
                "field" => "updated",
                "operator" => Operators::SINCE_LAST_JOB,
                "value" => $this->stepExecution
                    ->getJobExecution()
                    ->getJobInstance()
                    ->getCode()
            ]
        ], $filters);
    }
}