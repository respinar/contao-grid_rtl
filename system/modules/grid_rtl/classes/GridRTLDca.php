<?php

/**
 * Contao Open Source CMS, Copyright (C) 2005-2015 Leo Feyer
 *
 * @copyright  Hamid Abbaszadeh 2015 <http://respinar.org>
 * @author     Hamid Abbaszadeh (Respinar)
 * @package    grid_rtl
 * @license    LGPL
 * @filesource
 * @see        https://github.com/respinar/contao_grid_rtl
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace GridRTL;

/**
 * Class Grid1140Dca for Hook loadDataContainer
 * @author Data
 *
 */
class GridRTLDca extends \BackendModule
{
	 /**
    * Current object instance
    * @var object
    */
    protected static $instance = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->import('BackendUser', 'User');
        parent::__construct();
    }


    protected function compile()
    {

    }

    /**
     * Return the current object instance (Singleton)
     * @return Grid1140Dca
     */
    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new GridRTLDca();
        }

        return self::$instance;
    }

    /**
     * Hook loadDataContainer
     * @param string $strName    dca
     */
    public function loadDataContainerGridRTL($strName)
    {
    	if ($strName == 'tl_layout')
    	{
    		// Add the new css files
    		array_push($GLOBALS['TL_DCA']['tl_layout']['fields']['framework']['options'], 'grid_rtl.css');            
    	}
    }

}
