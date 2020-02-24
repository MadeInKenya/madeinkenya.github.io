<?php
/*
	MadeinKenya(MIK) by Developers from Kenya
	http://madeinkenya.github.io

	File: mobile/index.php
	Description: The mobile page for MIK

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
*/

    define('mik_base_dir', '../');
    define('mik_base_url', 'https://madeinkenya.github.io/');
    
    require mik_base_dir . 'config.php';
    require mik_base_dir . 'res/page.php';

    /** the array which holds basic page variables.*/
    $mik_page = array();    
    $mik_page['title'] = 'Mobile';
    $mik_page['description'] = 'A collection of awesome tools built by Kenyans that can be used by anybody anywhere in the world.';
    
    $mik_page['page'] = array(
        'type' => 'mobile',
    );

    return mik_page_view($mik_page);