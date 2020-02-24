<?php
/*
	MadeinKenya(MIK) by Developers from Kenya
	http://madeinkenya.github.io

	File: index.php
	Description: The home page for MIK

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
*/

    define('mik_base_dir', '');
    define('mik_base_url', 'https://madeinkenya.github.io/');
    
    require mik_base_dir . 'config.php';
    require mik_base_dir . 'res/page.php';

    
    /** the array which holds basic page variables.*/
    $mik_page = array();    
    $mik_page['title'] = 'Made in Kenya';
    $mik_page['description'] = 'A collection of awesome tools built by Kenyans that can be used by anybody anywhere in the world.';
    
    $mik_page['page'] = array(
        'type' => 'home',
    );

    // home page content
    $home_page = array();

    $home_page['mobile'] = array(
        'title1' => 'Mobile in Kenya',
        'description' => 'Before you go searching out there for freaky awesome Mobile tools,
        take some time and explore the vast repositories written by fellow Kenyans.',
        'img' => mik_base_dir . 'res/mobile.jpg',
        'imgclass' => 'chr-grid__col-l--offset-1',
        'title2' => 'Explore Mobile Tools by Kenyans',
    );

    $home_page['desktop'] = array(
        'title1' => 'Kenyans still develop for Desktop',
        'description' => 'Well as much as Mobile development is on the rise, it doesn\'t mean
        desktop development is dead or declining. Explore our collection to learn more!',
        'img' => mik_base_dir . 'res/desktop.jpg',
        'imgclass' => 'two-col-split__image-left chr-grid__col--4',
        'title2' => 'Explore Desktop Tools by Kenyans',
    );

    $home_page['web'] = array(
        'title1' => 'Web in Kenya',
        'description' => 'You certainly have no idea how much of the web is being contributed
        to by Kenyans till you see what we have pieced together for you.',
        'img' => mik_base_dir . 'res/web.jpg',
        'imgclass' => 'chr-grid__col-l--offset-1',
        'title2' => 'Explore Web Tools by Kenyans',
    );

    $home_page['games'] = array(
        'title1' => 'Game Tools in Kenya',
        'description' => 'Kenyans are great gamers on mobile, desktop and online. But they
        also are on the upward trend to build their own.',
        'img' => mik_base_dir . 'res/game.png',
        'imgclass' => 'two-col-split__image-left chr-grid__col--4',
        'title2' => 'Explore Game Tools by Kenyans',
    );
    define('mik_home_page', $home_page);
    
    return mik_page_view($mik_page);