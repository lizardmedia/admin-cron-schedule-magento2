<?php
declare(strict_types=1);
/**
 * File: MassActionHandler.php
 * @package     LizardMedia
 * @category    CronScheduler
 * @author:     Krzysztof Kuźniar <krzysztof.kuzniar@lizardmedia.pl>
 * @copyright   Copyright (C) 2018 LizardMedia (http://www.lizardmedia.pl)
 */
namespace LizardMedia\CronScheduler\Logger\Handler;

use \Magento\Framework\Logger\Handler\Base;
use \Monolog\Logger;

/**
 * Class MassActionHandler
 * @package LizardMedia\CronScheduler\Logger\Handler
 */
class MassActionHandler extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/cron_mass_action.log';

    /**
     * @var int
     */
    protected $loggerType = Logger::DEBUG;
}
