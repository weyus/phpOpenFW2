<?php
//*****************************************************************************
//*****************************************************************************
/**
* SQL Update Class
*
* @package		SwellCore
* @subpackage	Plugins
* @author 		Christian J. Clark
* @copyright	Copyright (c) Swell Development LLC
* @link			http://www.swelldevelopment.com/
**/
//*****************************************************************************
//*****************************************************************************

namespace SwellDevelopment\SwellCore\Builders\SQL;

class Update extends Core
{

    //=========================================================================
    //=========================================================================
    // Constructor Method
    //=========================================================================
    //=========================================================================
    public function __construct($db_type=false)
    {
	    $this->sql_type = 'update';
		parent::__construct($db_type);
	}

    //=========================================================================
    //=========================================================================
    // Get Method
    //=========================================================================
    //=========================================================================
    public function Get()
    {

	}

}
