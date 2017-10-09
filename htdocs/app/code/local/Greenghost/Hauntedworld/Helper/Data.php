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

class Greenghost_Hauntedworld_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * getConfig
     *
     * @param string $config
     * @return mixed
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig('greenghost_hauntedworld/' . $config);
    }

    /**
     * isEnabled
     *
     * Returns true if the module works
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig('configuration/enabled');
    }
}