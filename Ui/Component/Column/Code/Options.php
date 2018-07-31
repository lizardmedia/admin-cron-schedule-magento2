<?php
namespace LizardMedia\CronScheduler\Ui\Component\Column\Code;

use Magento\Cron\Model\ConfigInterface;
use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class Options
 * @package LizardMedia\CronScheduler\Ui\Component\Column\Code
 */
class Options implements OptionSourceInterface
{
    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var ConfigInterface
     */
    private $cronConfig;

    /**
     * Options constructor.
     * @param ConfigInterface $cronConfig
     */
    public function __construct(
        ConfigInterface $cronConfig
    ) {
        $this->cronConfig = $cronConfig;
    }

    /**
     * Get all options available
     * @return array
     */
    public function toOptionArray()
    {
        if (empty($this->options)) {
            $cronConfigJobs = $this->cronConfig->getJobs();
            foreach (array_values($cronConfigJobs) as $jobs) {
                foreach (array_keys($jobs) as $code) {
                    array_push($this->options, ['label' => $code, 'value' => $code]);
                }
            }
        }
        return $this->options;
    }
}
