<?php

$installer = $this;
$installer->startSetup();

$this->getConnection()->addColumn(
        $this->getTable('newsletter/subscriber'), 'subscriber_gender', array(
    'type' => Varien_Db_Ddl_Table::TYPE_BOOLEAN,
    'length' => 1,
    'nullable' => true,
    'comment' => 'Gender'
        )
);

$this->getConnection()->addColumn(
        $this->getTable('newsletter/subscriber'), 'subscriber_firstname', array(
    'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length' => 255,
    'nullable' => true,
    'comment' => 'First Name'
        )
);

$this->getConnection()->addColumn(
        $this->getTable('newsletter/subscriber'), 'subscriber_lastname', array(
    'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length' => 255,
    'nullable' => true,
    'comment' => 'Last Name'
        )
);

$installer->endSetup();
