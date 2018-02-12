<?php

class AV_NewsletterSignup_Model_Admingrid {

    public function blockCreateAfter(Varien_Event_Observer $observer) {
        $block = $observer->getBlock();

        if ($block instanceof Mage_Adminhtml_Block_Newsletter_Subscriber_Grid) {
            $block->addColumnAfter('subscriber_gender', array(
                'header' => Mage::helper('newsletter')->__('Subscriber Gender'),
                'index' => 'subscriber_gender',
                'type' => 'options',
                'options' => array(
                    1 => Mage::helper('newsletter')->__('Mr'),
                    2 => Mage::helper('newsletter')->__('Ms/Mrs')
                ),
                    ), 'subscriber_gender'
            );
            $block->addColumnAfter('subscriber_firstname', array(
                'header' => Mage::helper('newsletter')->__('Subscriber Firstname'),
                'index' => 'subscriber_firstname'
                    ), 'subscriber_gender'
            );
            $block->addColumnAfter('subscriber_lastname', array(
                'header' => Mage::helper('newsletter')->__('Subscriber Lastname'),
                'index' => 'subscriber_lastname'
                    ), 'subscriber_firstname'
            );
        }
    }

}
