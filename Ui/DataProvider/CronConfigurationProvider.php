<?php
namespace LizardMedia\CronScheduler\Ui\DataProvider;

use Magento\Ui\DataProvider\AbstractDataProvider;
use LizardMedia\CronScheduler\Model\Cron\Configuration;

/**
 * Class CronConfigurationProvider
 * @package LizardMedia\CronScheduler\Ui\DataProvider
 */
class CronConfigurationProvider extends AbstractDataProvider
{
    /**
     * @var Configuration
     */
    private $cronConfiguration;

    /**
     * CronConfigurationProvider constructor.
     * @param Configuration $configuration
     * @param $name
     * @param $primaryFieldName
     * @param $requestFieldName
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        Configuration $configuration,
        $name,
        $primaryFieldName,
        $requestFieldName,
        $meta = [],
        $data = []
    ) {
        $this->cronConfiguration = $configuration;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * @return array
     */
    public function getData()
    {
        $data = array_values($this->cronConfiguration->getCronConfiguration());
        $totalRecords = count($data);

        return [
            'totalRecords' => $totalRecords,
            'items' => $data,
        ];
    }
}
