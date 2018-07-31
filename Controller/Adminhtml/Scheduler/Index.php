<?php
namespace LizardMedia\CronScheduler\Controller\Adminhtml\Scheduler;

use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action\Context;
use Magento\Backend\App\Action;

/**
 * Class Index
 * @package LizardMedia\CronScheduler\Controller\Adminhtml\Scheduler
 */
class Index extends Action
{
    /**
     * @const string
     */
    const ADMIN_RESOURCE = "LizardMedia_CronScheduler::cron";
    /**
     * @const string
     */
    const TITLE = 'Cron Jobs';

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Magento\Backend\App\Action\Context $context
     */
    public function __construct(
        PageFactory $resultPageFactory,
        Context $context
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE);
        $resultPage->getConfig()->getTitle()->prepend(__(self::TITLE));
        return $resultPage;
    }
}
