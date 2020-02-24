<?php
/*
	MadeinKenya(MIK) by Developers from Kenya
	http://madeinkenya.github.io

	File: res/page.php
        Description: functions for mik_page views
    
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
*/

    /**
     * show the appropriate header for a particular mik_page
     */
    function mik_header($page)
    {
        $mik_html = '<!DOCTYPE html>';
        $mik_html .= '<html>';
        
        $mik_html .= '<head>';
        $mik_html .= '<title>' . mik_site_title . (isset($page['title']) ? ' - ' . $page['title'] : '').'</title>';
        $mik_html .= '<meta name="description" content="'.(isset($page['description']) ? $page['description'] : '').'">';
        $mik_html .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
        $mik_html .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        $mik_html .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
        $mik_html .= '<link href="https://fonts.googleapis.com/css?family=Google+Sans:400,500%7CRoboto:400,500%7C&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese&amp;display=swap" rel="preconnect stylesheet" crossorigin="">';
        $mik_html .= '<link rel="stylesheet" href="'.mik_base_dir . 'res/mik_styles.css">';
        $mik_html .= '<link rel="stylesheet" href="'.mik_base_dir . 'res/main.v2.min.css" as="style" nonce="">';
        $mik_html .= '</head>';
        return $mik_html;
    }

    /**
     * site navigation
     * @param $type of navigation
     */
    function mik_navigation($type)
    {
	$navigation = array();
        $navigation['mobile'] = array('label' => 'Mobile', 'sub' => array('java' => 'Java', 'kotlin' => 'Kotlin', 'flutter' => 'Flutter'));
        $navigation['desktop'] = array('label' => 'Desktop');
        $navigation['web'] = array('label' => 'Web');
        $navigation['games'] = array('label' => 'Games');

        $mik_html = '<nav class="chr-header__nav">';
        if ( $type == 'main'){
		$mik_html .= '<ul class="chr-header__nav-list" role="menubar">';
	} else {
		$mik_html .= '<ul class="chr-header__drawer-nav-list">';
	}

	foreach ($navigation as $nv => $nav)
	{                
		if (isset($nav['sub']))
		{
			$mik_html .= '<li class="chr-header__nav-li chr-header__nav-li--sub" aria-level="1" tabindex="0" role="menuitem"
			aria-haspopup="true" aria-expanded="false">';
			$mik_html .= '<span class="chr-header__nav-li-link" tabindex="-1">'.$nav['label'].'</span>';
			$mik_html .= '<ul class="chr-header__nav-sublist" role="menu">';
			
			foreach ($nav['sub'] as $sb => $sub)
			{
				$mik_html .= '<li class="chr-header__nav-li" aria-level="2" role="menuitem" tabindex="-1">';
				$mik_html .= '<a href="'.mik_base_url.$nv.'#'.$sb.'" class=" chr-header__nav-li-link" ga-on="click"
				ga-event-category="main_navigation" ga-event-action="clicked"
				ga-event-label="'.$sb.'" data-g-event="main_navigation"
				data-g-action="clicked" data-g-label="'.$sb.'">'.$sub.'</a>';
				$mik_html .= '</li>';
			}
			$mik_html .= '</ul> </li>';
		}
		else 
		{
			$mik_html .= '<li class="chr-header__drawer-nav-li" aria-level="1">';
			$mik_html .= '<a href="'.mik_base_url.$nv.'" target="_blank" rel="noopener" class=" chr-header__drawer-nav-li-link"
			ga-on="click" ga-event-category="main_navigation" ga-event-action="clicked"
			ga-event-label="extensions" data-g-event="main_navigation" data-g-action="clicked"
			data-g-label="extensions">'.$nav['label'].'</a>';
		}
		$mik_html .= '</li>';
	}
	$mik_html .= '</ul></nav>';

	return $mik_html;
    }
    
    /**
     *	show the body content
    */
    function mik_body()
    {
        $mik_html = '<div class="chr-header" id="js-header" aria-expanded="false" data-comp="Header" role="banner">';
        $mik_html .= '<div class="chr-header__wrapper">';
        $mik_html .= '<div class="chr-header__hamburger">';
        $mik_html .= '<div class="chr-header__hamburger-wrapper" id="js-hamburger-button">';
        $mik_html .= '<button type="button" class="chr-header__hamburger-button" aria-controls="js-header__drawer" aria-expanded="false" aria-label="Open the navigation drawer">';
        $mik_html .= '<svg role="img" class="chr-header__hamburger-icon chr-header__hamburger-icon--standard" aria-labelledby="hamburger-title">';
        $mik_html .= '<title id="hamburger-title">Menu</title>';
        $mik_html .= '<use xlink:href="#hamburger"></use>';
        $mik_html .= '</svg>';
        $mik_html .= '<svg role="img" class="chr-header__hamburger-icon chr-header__hamburger-icon--reversed" aria-labelledby="hamburger-reversed-title">';
        $mik_html .= '<title id="hamburger-reversed-title">Menu</title>';
        $mik_html .= '<use xlink:href="#hamburger"></use>';
        $mik_html .= '</svg>';
        $mik_html .= '</button>';
        $mik_html .= '</div>';
        $mik_html .= '</div>';
        $mik_html .= '<div class="chr-header__lockup">';
        $mik_html .= '<div class="chr-header__logo">';
        $mik_html .= '<a href="https://madeinkenya.github.io/" title="Made in Kenya" class=" chr-header__logo-link" ga-on="click" ga-event-category="main_navigation" ga-event-action="clicked" ga-event-label="google-chrome" data-g-event="main_navigation" data-g-action="clicked" data-g-label="google-chrome">';
        $mik_html .= '<img src="'.mik_base_dir.'mik_logo.png" alt="Made in Kenya" class="chr-header__logo-icon" width="222" height="25">';
        $mik_html .= '</a>';
        $mik_html .= '</div>';
        $mik_html .= '<a href="https://madeinkenya.github.io/#jump-content" class="chr-header__jump-to-content">';
        $mik_html .= '<span class="chr-header__jump-to-content-text">Skip to content</span>';
        $mik_html .= '</a>';
        $mik_html .= '</div>';
        
        $mik_html .= mik_navigation('main');

        $mik_html .= '</div>';
        $mik_html .= '<button type="button" class="chr-cta__button chr-cta__button--blue js-download show" id="js-download-header" ga-on="click" ga-event-category="cta" ga-event-action="clicked" ga-event-label="download|nav" data-g-event="cta" data-g-action="clicked" data-g-label="download|nav" aria-hidden="true" tabindex="-1">Pull Request</button>';
        $mik_html .= '<div id="js-header__drawer" class="chr-header__drawer" aria-label="Navigation drawer">';
        $mik_html .= '<div class="chr-header__drawer-content">';
        $mik_html .= '<div class="chr-header__logo">';
        $mik_html .= '<a href="https://madeinkenya.github.io/" title="Made in Kenya" class=" chr-header__logo-link" ga-on="click" ga-event-category="main_navigation" ga-event-action="clicked" ga-event-label="google-chrome" data-g-event="main_navigation" data-g-action="clicked" data-g-label="google-chrome">';
        $mik_html .= '<img src="'.mik_base_dir . 'mik_logo.png" alt="Made in Kenya" class="chr-header__logo-icon" width="222" height="25">';
        $mik_html .= '</a>';
        $mik_html .= '</div>';
        return $mik_html;
    }

    function mik_home()
    {
        $mik_html = '<p class="chr-subheadline chr-full-bleed-hero__sub js-subandheadings-hero">A collection of awesome tools built by Kenyans that can be used by anybody anywhere in the world.</p>';
        $mik_html .= '<div data-comp="HeroSwitcher">';
        $mik_html .= '<h1 class="chr-headline-1 chr-full-bleed-hero__title js-ndcm hidden">Made in Kenya</h1>';
        $mik_html .= '<p class="chr-subheadline chr-full-bleed-hero__sub js-ndcm hidden">In just a few clicks, you can access a whole catalogue of repos by Kenyans and easily search for what you are intrested in.</p>';
        $mik_html .= '<h1 class="chr-headline-1 chr-full-bleed-hero__title js-ggrf hidden">Seriously Kenyan</h1>';
        $mik_html .= '<p class="chr-subheadline chr-full-bleed-hero__sub js-ggrf hidden">Now more simple and faster than ever to get what is made by Kenyans.</p>';
        $mik_html .= '</div>';

        $mik_html .= '</div>';
        $mik_html .= '</div>';
        $mik_html .= '<a class="chr-anchor-arrow chr-full-bleed-hero__anchor" href="#Mobile-in-kenya" data-comp="AnchorArrow" ga-on="click" ga-event-category="scroll" ga-event-action="clicked" ga-event-label="down-arrow|hero|chrome-homepage" data-g-event="scroll" data-g-action="clicked" data-g-label="down-arrow|hero|chrome-homepage">Go to Next Section</a>';
        $mik_html .= '</div>';
        $mik_html .= '</div>';
        $mik_html .= '</section>';
        $mik_html .= '<section class="js-sticky-trigger">';
        
        foreach (mik_home_page as $crd => $card)
        {
                $mik_html .= '<div class="two-col-split" data-comp="TrackedSection" data-trackedsection="2|a-faster-way|chrome-homepage"
                data-trackedoffset="" id="Mobile-in-kenya">';
                $mik_html .= '<div class="chr-wrapper">';
                $mik_html .= '<div class="chr-grid">';
                $mik_html .= '<div class="chr-grid__col chr-grid__col--5 chr-grid__col-l--4 chr-grid__col--align-middle chr-grid__col--offset-1">';
                $mik_html .= '<header class="two-col-split__header chr-benefits-icon benefits-icon-fast">';
                $mik_html .= '<svg role="img">';
                $mik_html .= '<use xlink:href="#benefits-icon-fast"></use>';
                $mik_html .= '</svg>';
                $mik_html .= '<h2 class="chr-headline-2">'.$card['title1'].'</h2>';
                $mik_html .= '</header>';
                $mik_html .= '<div>';
                $mik_html .= '<p class="chr-copy">'.$card['description'].'</p>';
                $mik_html .= '</div>';
                $mik_html .= '<div class="two-col-split__footer">';
                $mik_html .= '<a href="'.$crd.'" class="chr-link chr-link--internal two-col-split__cta" ga-on="click" 
                ga-event-category="body-icon" ga-event-action="clicked" ga-event-label="explore-all-features|a-faster-way|chrome-homepage" 
                data-g-event="body-icon" data-g-action="clicked" data-g-label="explore-all-features|a-faster-way|chrome-homepage">'.$card['title2'].' <svg role="img" class="chr-icon chr-icon--link" aria-labelledby="arrow-productivity-title">';
                $mik_html .= '<title id="arrow-productivity-title">Arrow</title>';
                $mik_html .= '<use xlink:href="#mi-arrow-forward"></use>';
                $mik_html .= '</svg></a>';
                $mik_html .= '<a href="'.$crd.'" class=" chr-cta__button chr-cta__button--link chr-cta__button--blue hide" ga-on="click" ga-event-category="body-icon" ga-event-action="clicked" ga-event-label="explore-all-features|a-faster-way|chrome-homepage" data-g-event="body-icon" data-g-action="clicked" data-g-label="explore-all-features|a-faster-way|chrome-homepage">'.$card['title2'].'</a></div>';
                $mik_html .= '</div>';
                $mik_html .= '<div class="chr-grid__col chr-grid__col--6 two-col-split__image-wrapper '.$card['imgclass'].'">';
                $mik_html .= '<img data-src="'.$card['img'].'" alt="Mobile in Kenya" src="'.$card['img'].'">';
                $mik_html .= '</div>';
                $mik_html .= '</div>';
                $mik_html .= '</div>';
                $mik_html .= '</div>';
        }
        
        $mik_html .= '</section>';
        return $mik_html;
    }

    /**
     * show appropriate search page
     */
    function mik_search()
    {
        $mik_html = '<div class="search" jsname="search">';
        $mik_html .= '<div class="q_body">';
        $mik_html .= '<div class="q_icon" jsname="q_uFMOof">';
        $mik_html .= '<div class="q_hsuHs"><span class="q_wFncld q_z1asCe q_MZy1Rb"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></span></div>';
        $mik_html .= '</div>';
        $mik_html .= '<div jscontroller="iDPoPb" class="a4bIc" jsname="q_input" jsaction="h5M12e;input:d3sQLd;focus:dFyQEf;blur:jI3wzf">';
        $mik_html .= '<div class="q_pR49Ae q_txt" jsname="vdLsw"></div>';
        $mik_html .= '<input class="q_input q_txt" maxlength="2048" name="q" type="text" jsaction="paste:puy29d" aria-autocomplete="both" aria-haspopup="false" autocapitalize="off" autocomplete="off" autocorrect="off" role="combobox" spellcheck="false" title="Search" value="" aria-label="Search" data-ved="0ahUKEwimhMChiOrnAhVEyhoKHTp7C3EQ39UDCAk">';
        $mik_html .= '</div>';
        $mik_html .= '<div class="dRYYxd"></div>';
        $mik_html .= '</div>';
        $mik_html .= '<button class="q_btn" jsname="q_btn" aria-label="Made in Kenya Search" type="submit" data-ved="0ahUKEwimhMChiOrnAhVEyhoKHTp7C3EQ4dUDCAo">';
        $mik_html .= '<div class="q_FAuhyb"> <span class="q_z1asCe q_MZy1Rb"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></span> </div>';
        $mik_html .= '</button>';
        $mik_html .= '</div>';

        return $mik_html;
    }
        
    function mik_projects($panels)
    {
        $mik_html = '</div>';                       
        $mik_html .= '</div>';
            
        foreach($panels as $pnl => $panel)
        {
                $mik_html .= '<div id="'.$pnl.'">';
                $mik_html .= '<div class="chr-wrapper">';
                $mik_html .= '<h2 class="chr-headline-2">'.$panel.'</h2><hr>';
                $mik_html .= '</div>';
                $mik_html .= '</div>';
        }

        $mik_html .= '</div>';
        $mik_html .= '</div>';
        $mik_html .= '</section>';

        return $mik_html;
    }
    /**
     *	show the appropriate main content for a particular mik_page
    */
    function mik_main($page)
    {
        $mik_html = '<div role="main" class="chr-main" id="jump-content">';
        $mik_html .= '<section>';
        $mik_html .= '<div class="chr-full-bleed-hero home" id="chr-hero">';
        $mik_html .= '<div class="chr-wrapper">';
        $mik_html .= '<div class="chr-full-bleed-hero__grid chr-grid">';
        $mik_html .= '<img class="chr-full-bleed-hero__left-graphic" src="'.mik_base_dir . 'res/illo_left.png" alt="Hero right">';
        $mik_html .= '<div class="chr-grid__col chr-grid__col--6 chr-grid__col--offset-3 chr-grid__col--align-middle">';
        $mik_html .= '<img src="'.mik_base_dir . 'madeinkenya.png" alt="Made in Kenya" class="chr-full-bleed-hero__image" data-img-fallback="/chrome/static/images/fallback/chrome-logo.png">';

        switch ($page['page']['type'])
        {
            case 'mobile':
                $mik_html .= '<h1 class="chr-headline-1 chr-full-bleed-hero__title js-subandheadings-hero">Mobile Tools in Kenya</h1>';
                $mik_html .= mik_search();
                $mik_html .= mik_projects(
                        array('java' => 'Java Projects'),
                        array('kotlin' => 'Kotlin Projects'),
                        array('flutter' => 'Flutter Projects'),
                );
                break;
                
            case 'desktop':
                $mik_html .= '<h1 class="chr-headline-1 chr-full-bleed-hero__title js-subandheadings-hero">Desktop Tools in Kenya</h1>';
                $mik_html .= mik_search(); 
                $mik_html .= mik_projects(
                        array('desktop' => 'Desktop Projects'),
                );             
                break;
             
           case 'web':
                $mik_html .= '<h1 class="chr-headline-1 chr-full-bleed-hero__title js-subandheadings-hero">Web Tools in Kenya</h1>';
                $mik_html .= mik_search(); 
                $mik_html .= mik_projects(
                        array('web' => 'Web Projects'),
                );             
                break;
                
            case 'games':
                $mik_html .= '<h1 class="chr-headline-1 chr-full-bleed-hero__title js-subandheadings-hero">Game Tools in Kenya</h1>';
                $mik_html .= mik_search(); 
                $mik_html .= mik_projects(
                        array('games' => 'Games Projects'),
                );             
                break;
            
            default:
                $mik_html .= '<h1 class="chr-headline-1 chr-full-bleed-hero__title js-subandheadings-hero">Made in Kenya</h1>';
                $mik_html .= mik_home();
                break;
        }
        return  $mik_html;
    }

    /**
     * render a group of links at the footer
     */
    function mik_footer_links($footer_links, $mik_html = '')
    {
        foreach ($footer_links as $grp => $item)
        {
                $mik_html .= '<div class="chr-footer-links__group">';
                $mik_html .= '<h4 class="chr-footer-links__heading js-footer-link" tabindex="0">'.$grp.'</h4>';
                $mik_html .= '<ul class="chr-footer-links__list">';

                foreach ($item as $link)
                {
                        $mik_html .= '<li class="chr-footer-links__list-item footer-other-platform">';
                        if (isset($link['telegram']))
                                $mik_html .= '<a href="https://t.me/'.$link['telegram'].'">'.$link['label'].'</a>';
                        else if (isset($link['meetup']))
                                $mik_html .= '<a href="https://meetup.com/'.$link['meetup'].'">'.$link['label'].'</a>';
                        else if (isset($link['twitter']))
                                $mik_html .= '<a href="https://twitter.com/'.$link['twitter'].'">'.$link['label'].'</a>';
                        else $mik_html .= '<a href="'.$link['website'].'">'.$link['label'].'</a>';
                        $mik_html .= '</li>';
                }
                $mik_html .= '</ul>';
                $mik_html .= '</div>';
        }
	return $mik_html;
    }
   
    /**
     * show the appropriate footer for a particular mik_page
     */
    function mik_footer()
    {
        $mik_html = '<section>';
        $mik_html .= '<div data-comp="TrackedSection" data-trackedsection="6|download-chrome-today|chrome-homepage"
data-trackedoffset="" class="chr-download-now">';
        $mik_html .= '<div class="chr-wrapper">';
        $mik_html .= '<div class="chr-grid">';
        $mik_html .= '<div class="chr-grid__col chr-grid__col--8 chr-grid__col--offset-2 chr-grid__col--align-middle">';
        $mik_html .= '<h3 class="chr-headline-2 chr-download-now__title"><a
href="https://github.com/MadeInKenya/madeinkenya.github.io"
style="color:#fff;">Submit a Pull Request</a></h3>';

        $mik_html .= '</div>';
        $mik_html .= '</div>';
        $mik_html .= '</div>';
        $mik_html .= '</div>';
        $mik_html .= '</section>';
        $mik_html .= '</div>';
        $mik_html .= '<footer class="chr-footer" data-comp="Footer">';
        $mik_html .= '<div class="chr-footer-links">';
        $mik_html .= '<nav class="chr-footer-links__grid">';

        $mik_html .= mik_footer_links(mik_footer_links);

        $mik_html .= '</nav>';
        $mik_html .= '</div>';
        
        $mik_html .= '</footer>';
        return $mik_html;
    }

    /**
     *	links to scripts
    */
    function mik_scripts()
    {
        $mik_html = '<script src="'.mik_base_dir . 'res/ScrollMagic.min.js.download" nonce=""></script>';
        $mik_html .= '<script src="'.mik_base_dir . 'res/animation.gsap.min.js.download" nonce=""></script>';
        $mik_html .= '<script src="'.mik_base_dir . 'res/main.v2.min.js.download" nonce=""></script>';
        $mik_html .= '<script src="'.mik_base_dir . 'res/installer.min.js.download" nonce=""></script>';

        return $mik_html;
    }

    /**
     *	Run the appropriate mik_page variables for this mik_page and return back the appropiate view it passed
    */
    function mik_page_view($page)
    {   
        echo mik_header($page);
        echo '<body data-comp="EnvironmentDetect" data-locale="en_us" data-region="en_US" class="no-mobile">';
        echo mik_body();

        echo mik_navigation('mobile');
        echo '</div>';
        echo '</div>';
        echo '<div id="js-drawer-backdrop" class="chr-header__drawer-backdrop"></div>';
        echo '</div>';

        echo mik_main($page);

        echo mik_footer();
        
        echo mik_scripts();

        echo '</body>';
        echo '</html>';
    }

    