<?php

/**
 * SveaWebPay Payment Module for Magento.
 *   Copyright (C) 2012  SveaWebPay
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  Any questions may be directed to kundtjanst.sveawebpay@sveaekonomi.se
 */

$this->startSetup();
$this->run("
          DROP TABLE IF EXISTS {$this->getTable('sveawebpay')};
          CREATE TABLE {$this->getTable('sveawebpay')} (
            `sveawebpay_id` VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
            `handlingfee_amount` decimal(18,2) NOT NULL default '0',
            `handlingfee_base_amount` decimal(18,2) NOT NULL default '0',
            `handlingfee_tax_rate` decimal(18,2) NOT NULL default '0',
            PRIMARY KEY (`sveawebpay_id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
          ");
$this->endSetup();