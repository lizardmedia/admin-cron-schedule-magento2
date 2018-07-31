<?php
declare(strict_types=1);
/**
 * File: Delete.php
 * @package     LizardMedia
 * @category    CronScheduler
 * @author:     Krzysztof Kuźniar <krzysztof.kuzniar@lizardmedia.pl>
 * @copyright   Copyright (C) 2018 LizardMedia (http://www.lizardmedia.pl)
 */
namespace LizardMedia\CronScheduler\Model\Manage\MassActions;

use Exception;
use Magento\Cron\Model\ResourceModel\Schedule as ScheduleResource;
use Magento\Cron\Model\ScheduleFactory;
use Psr\Log\LoggerInterface;

/**
 * Class Delete
 * @package LizardMedia\CronScheduler\Model\Manage\MassActions
 */
class Delete
{
    /**
     * @var ScheduleFactory
     */
    private $scheduleFactory;

    /**
     * @var ScheduleResource
     */
    private $scheduleResource;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Delete constructor.
     * @param ScheduleResource $scheduleResource
     * @param ScheduleFactory $scheduleFactory
     * @param LoggerInterface $logger
     */
    public function __construct(
        ScheduleResource $scheduleResource,
        ScheduleFactory $scheduleFactory,
        LoggerInterface $logger
    ) {
        $this->scheduleFactory = $scheduleFactory;
        $this->scheduleResource = $scheduleResource;
        $this->logger = $logger;
    }

    /**
     * @param array $jobsIds
     * @throws Exception
     */
    public function deleteJobs(array $jobsIds)
    {
        $job = $this->scheduleFactory->create();

        foreach ($jobsIds as $jobId) {
            $this->scheduleResource->load($job, $jobId);

            try {
                $this->scheduleResource->delete($job);
            } catch (Exception $e) {
                $this->logger->error(
                    'Delete job item id: ' . $jobId . ' cause error: ' . $e->getMessage()
                );
            }
        }
    }
}
