<?php

    // Default Site Name
    define('mik_site_title', 'Made in Kenya');

    // Links that show on the footer of every webpage
    $footer_links = array();

    $footer_links['User Groups (Sites)'] = array(
        'link1' => array('website' => '#', 'label' => 'Android 254'),
        'link2' => array('website' => '#', 'label' => 'Kotlin Kenya'),
        'link3' => array('website' => '#', 'label' => 'Flutter Kenya'),
        'link4' => array('website' => 'https://ace.atlassian.com/nairobi/', 'label' => 'Atlassian Nairobi'),
        'link5' => array('website' => '#', 'label' => 'Nairobi JS'),
        'link6' => array('website' => '#', 'label' => 'Nairobi Gophers'),
        'link7' => array('website' => '#', 'label' => 'Nairobi AI'),
        'link8' => array('website' => '#', 'label' => 'Africa Game Developers'),
        'link9' => array('website' => '#', 'label' => 'JVM Nairobi'),
    );

    $footer_links['User Groups (Chats)'] = array(
        'link1' => array('telegram' => 'Android254', 'label' => 'Android 254'),
        'link2' => array('telegram' => 'kotlinkenya', 'label' => 'Kotlin Kenya'),
        'link3' => array('website' => 'https://spectrum.chat/flutter-kenya', 'label' => 'Flutter Kenya'),
        'link4' => array('telegram' => 'augnairobi', 'label' => 'Atlassian Nairobi'),
        'link5' => array('telegram' => 'nairobijs', 'label' => 'Nairobi JS'),
        'link6' => array('telegram' => 'nairobigophers', 'label' => 'Nairobi Gophers'),
        'link8' => array('telegram' => 'AfricaGameDevelopers', 'label' => 'Africa Game Developers'),
    );

    $footer_links['User Groups (Twitter)'] = array(
        'link1' => array('twitter' => 'droidconKe', 'label' => '@DroidconKE'),
        'link1' => array('twitter' => '254AndroidDevs', 'label' => '@254AndroidDevs'),
        'link2' => array('twitter' => 'KotlinKenya', 'label' => '@KotlinKenya'),
        'link3' => array('twitter' => 'KenyaFlutterDev', 'label' => '@KenyaFlutterDev'),
        'link4' => array('twitter' => 'ACNAirobi', 'label' => '@ACNAirobi'),
        'link5' => array('twitter' => 'nairobijs', 'label' => '@NairobiJS'),
        'link7' => array('twitter' => 'TheNairobiAI', 'label' => '@TheNairobiAI'),
    );

    $footer_links['Events and Meetups'] = array(
        'link1' => array('meetup' => 'Android254', 'label' => 'Android 254'),
        'link2' => array('meetup' => 'KotlinKenya', 'label' => 'Kotlin Kenya'),
        'link4' => array('meetup' => 'ACNairobi', 'label' => 'Atlassian Nairobi'),
        'link5' => array('meetup' => 'nairobi-js', 'label' => 'Nairobi JS'),
        'link6' => array('meetup' => 'laravel-nairobi', 'label' => 'Laravel Nairobi'),
        'link6' => array('meetup' => 'Nairobi-Gophers', 'label' => 'Nairobi Gophers'),
        'link7' => array('meetup' => 'NairobiAI', 'label' => 'Nairobi AI'),
        'link7' => array('meetup' => 'Nairobi-Game-Development-Meetup', 'label' => 'Nairobi Game Development Meetup'),
        'link9' => array('meetup' => 'nairobi-jvm', 'label' => 'JVM Nairobi'),
    );

    define('mik_footer_links', $footer_links);