<?php
namespace LizardMedia\CronScheduler\Ui\Component\Column\Group;

use Magento\Cron\Model\ConfigInterface;
use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class Options
 * @package LizardMedia\CronScheduler\Ui\Component\Column\Group
 */
class Options implements OptionSourceInterface
{
    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var \Magento\Cron\Model\ConfigInterface
     */
    public $cronConfig;

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
     * @return array
     */
    public function toOptionArray()
    {
        if (empty($this->options)) {
            $configCronJobs = $this->cronConfig->getJobs();
            foreach (array_keys($configCronJobs) as $group) {
                array_push($this->options,
                    [
                        'label' => $group,
                        'value' => $group
                    ]);
            }
        }
        return $this->options;
    }
}
