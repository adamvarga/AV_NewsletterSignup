<?php

class AV_NewsletterSignup_Model_Mysql4_Subscriber_Collection extends Mage_Newsletter_Model_Mysql4_Subscriber_Collection {

    public function showCustomerGender() {
        $adapter = $this->getConnection();
        $customer = Mage::getModel('customer/customer');
        $gender = $customer->getAttribute('gender');

        $this->getSelect()
                ->joinLeft(
                        array('customer_gender_table' => $gender->getBackend()->getTable()), $adapter->quoteInto('customer_gender_table.entity_id=main_table.customer_id
                 AND customer_gender_table.attribute_id = ?', (int) $gender->getAttributeId()), array('customer_gender' => 'value')
        );

        return $this;
    }

}
