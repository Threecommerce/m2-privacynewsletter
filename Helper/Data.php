<?php
declare(strict_types=1);

namespace Threecomerce\NewsletterPrivacy\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface as StoreInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends AbstractHelper
{
    protected $scopeConfig;

    public function __construct(
        Context              $context,
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }
    public function getIsActive()
    {
        return $this->scopeConfig->getValue('newsletter_privacy/general/active', StoreInterface::SCOPE_STORE);
    }
    public function getLabelPrivacy()
    {
        return $this->scopeConfig->getValue('newsletter_privacy/general/text_privacy', StoreInterface::SCOPE_STORE);
    }
}
