<?php
/**
 * Haunted World
 */

/**
 * Haunted World
 *
 * Haunted World Index Controller
 * @author Green Ghost <ghosty.dev@gmail.com>
 * @package Haunted
 * @version 0.1.0
 */

class Greenghost_Hauntedworld_Block_Hauntedworld extends Mage_Core_Block_Template
{
    /**
     * isEnabled
     * is this enabled?
     * @return mixed
     */
    public function isEnabled()
    {
        return Mage::helper('greenghost_hauntedworld')->isEnabled();
    }

    /**
     * getMessage
     * grab the message from the textarea in the panel
     * @return mixed
     */
    public function getMessage()
    {
        return Mage::helper('greenghost_hauntedworld')->getConfig('configuration/message');
    }
}