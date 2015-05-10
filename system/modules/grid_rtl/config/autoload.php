<?php

/**
 * Contao Open Source CMS, Copyright (C) 2005-2014 Leo Feyer
 *
* @copyright  Hamid Abbaszadeh 2015 <http://respinar.org>
 * @author     Hamid Abbaszadeh (Respinar)
 * @package    grid_rtl
 * @license    LGPL
 * @filesource
 * @see        https://github.com/respinar/contao_grid_rtl
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'GridRTL',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'GridRTL\GridRTLDca' => 'system/modules/grid_rtl/classes/GridRTLDca.php',
));
