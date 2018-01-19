<?php
/**
 * Copyright © 2011-2018 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\ReCaptcha\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Faonni\ReCaptcha\Helper\Data as ReCaptchaHelper;

/**
 * ReCaptcha Block Form
 */
class Form extends Template
{
    /**
     * Helper
     *
     * @var \Faonni\ReCaptcha\Helper\Data
     */
    protected $_helper;  
    
    /**
     * Initialize block
     * 	
     * @param Context $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
		Context $context, 
		ReCaptchaHelper $helper,
		array $data = []
	) {
        $this->_helper = $helper;
		
        parent::__construct(
			$context, 
			$data
		);
    }
    
    /**
     * Check ReCaptcha functionality should be enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_helper->isEnabled();
    } 
	
    /**
     * Retrieve Assoc Array Of ReCaptcha Configuration
     *
     * @return array
     */
    public function getConfig()
    {
        return $this->_helper->getConfig();
    }
	
    /**
     * Retrieve Site Key
     *
     * @return  string|null
     */
    public function getSiteKey()
    {
        return $this->_helper->getSiteKey();
    }

    /**
     * Retrieve Type of ReCAPTCHA
     *
     * @return  string|null
     */
    public function getType()
    {
        return $this->_helper->getType();
    } 

    /**
     * Retrieve Size of ReCAPTCHA
     *
     * @return  string|null
     */
    public function getSize()
    {
        return $this->_helper->getSize();
    } 

    /**
     * Retrieve Color theme of ReCAPTCHA
     *
     * @return  string|null
     */
    public function getTheme()
    {
        return $this->_helper->getTheme();
    }               
} 
