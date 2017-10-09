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
class Greenghost_Hauntedworld_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     *  function indexAction
     *  load & print the layout
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}

