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
 
class SveaWebPay_Webservice_Model_Session extends Mage_Core_Model_Session_Abstract
{
	public function __construct()
    {
		$this->init('sveawebpayws');
	}

	public function resetError()
    {
        $this->unsErrorArray();	
    }
    
    public function addError( $str )
    {
        $errorArray = $this->getErrorArray();
        if( is_array($errorArray) == false )
            $errorArray = Array();
        
        $errorArray[] = $str;
        $this->setErrorArray( $errorArray );
    }
}