<?php

namespace LizardMedia\CronScheduler\Model\Schedule\Source;

use Magento\Cron\Model\Schedule;
use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class Status
 * @package LizardMedia\CronScheduler\Model\Schedule\Source
 */
class Status implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => Schedule::STATUS_ERROR,
                'label' => __('Error'),
            ],
            [
                'value' => Schedule::STATUS_MISSED,
                'label' => __('Missed'),
            ],
            [
                'value' => Schedule::STATUS_PENDING,
                'label' => __('Pending'),
            ],
            [
                'value' => Schedule::STATUS_RUNNING,
                'label' => __('Running'),
            ],
            [
                'value' => Schedule::STATUS_SUCCESS,
                'label' => __('Success'),
            ],
        ];
    }
}
