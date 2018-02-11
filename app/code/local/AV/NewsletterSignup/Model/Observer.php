<?php

class AV_NewsletterSignup_Model_Observer {

    public function newsletterSubscriberChange(Varien_Event_Observer $observer) {
        $subscriber = $observer->getEvent()->getSubscriber();
        $data = Mage::app()->getRequest()->getParams();

        if (is_array($data) && isset($data['email'])) {

            if (isset($data['gender']))
                $subscriber->setSubscriberGender($data['gender']);
            if (isset($data['firstname']))
                $subscriber->setSubscriberFirstname($data['firstname']);
            if (isset($data['lastname']))
                $subscriber->setSubscriberLastname($data['lastname']);
        }

        return $this;
    }

}
