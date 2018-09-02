<?php
namespace LizardMedia\CronScheduler\Model\Cron;

use Magento\Cron\Model\ConfigInterface;

/**
 * Class Configuration
 * @package LizardMedia\CronScheduler\Model\Cron
 */
class Configuration
{
    /**
     * @var ConfigInterface
     */
    private $cronConfigurationInterface;

    /**
     * Configuration constructor.
     * @param ConfigInterface $config
     */
    public function __construct(ConfigInterface $config)
    {
        $this->cronConfigurationInterface = $config;
    }

    /**
     * @return array
     */
    public function getCronConfiguration()
    {
        $cronConfiguration = [];
        $cronJobs = $this->cronConfigurationInterface->getJobs();
        foreach ($cronJobs as $group => $jobs) {
            foreach ($jobs as $code => $job) {
                $job['group'] = $group;
                $job['code'] = $code;
                if (!isset($job['config_schedule'])) {
                    $job['config_schedule'] = (isset($job['schedule'])) ? $job['schedule'] : '';
                }
                $cronConfiguration[$code] = $job;
            }
        }
        return $cronConfiguration;
    }
}
