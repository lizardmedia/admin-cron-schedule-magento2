<?php
declare(strict_types=1);
/**
 * File: Delete.php
 * @package     LizardMedia
 * @category    CronScheduler
 * @author:     Krzysztof Kuźniar <krzysztof.kuzniar@lizardmedia.pl>
 * @copyright   Copyright (C) 2018 LizardMedia (http://www.lizardmedia.pl)
 */
namespace LizardMedia\CronScheduler\Controller\Adminhtml\Manage\MassActions;

use Exception;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use LizardMedia\CronScheduler\Model\Manage\MassActions\Delete as MassActionDelete;
use Magento\Framework\App\ResponseInterface;

/**
 * Class Delete
 * @package LizardMedia\CronScheduler\Controller\Adminhtml\Manage\MassActions
 */
class Delete extends Action
{
    /**
     * @const string
     */
    const DELETE_MESSAGE = 'Successfully Deleted Job Item';

    /**
     * @var MassActionDelete
     */
    private $deleteAction;

    /**
     * Delete constructor.
     * @param MassActionDelete $deleteAction
     * @param Context $context
     */
    public function __construct(
        MassActionDelete $deleteAction,
        Context $context
    ) {
    
        $this->deleteAction = $deleteAction;
        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     * @throws Exception
     */
    public function execute()
    {
        $jobsIds = $this->getRequest()->getParam('selected');
        $this->deleteAction->deleteJobs($jobsIds);

        $this->getMessageManager()->addSuccessMessage(self::DELETE_MESSAGE);
        $this->_redirect("cron/scheduler/index/");
    }
}
