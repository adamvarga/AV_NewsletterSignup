<?php

class AV_NewsletterSignup_Adminhtml_Block_Newsletter_Subscriber_Grid extends Mage_Adminhtml_Block_Newsletter_Subscriber_Grid {

    protected function _prepareColumns() {

        $this->addColumn('subscriber_gender', array(
            'header' => Mage::helper('newsletter')->__('Subscriber Gender'),
            'index' => 'subscriber_gender',
            'default' => '----',
            'type' => 'options',
            'options' => array('1' => 'Male', '2' => 'Female')
        ));

        $this->addColumn('subscriber_firstname', array(
            'header' => Mage::helper('newsletter')->__('Subscriber Firstname'),
            'index' => 'subscriber_firstname',
            'default' => '----'
        ));

        $this->addColumn('subscriber_lastname', array(
            'header' => Mage::helper('newsletter')->__('Subscriber Lastname'),
            'index' => 'subscriber_lastname',
            'default' => '----'
        ));

        return parent::_prepareColumns();
    }

}
