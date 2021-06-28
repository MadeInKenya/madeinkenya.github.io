
// Default Site Name
var mik_site_title = 'Made in Kenya';

// Links that show on the footer of every webpage

var var_html = "";
var mik_footer = document.getElementById('mik_footer_groups');

var grouparr = '{ "groups" : [' +
'{ "title": "User Groups (Sites)",' +
'"links": [' +
        '{ "link_type" : "website", "link_url" : "http://opensource254.co.ke/", "link_label": "Opensource254" },' +
        '{ "link_type" : "website", "link_url" : "#", "link_label": "Android 254" },' +
        '{ "link_type" : "website", "link_url" : "#", "link_label": "Kotlin Kenya" },' +
        '{ "link_type" : "website", "link_url" : "#", "link_label": "Flutter Kenya" },' +
        '{ "link_type" : "website", "link_url" : "https://ace.atlassian.com/nairobi/", "link_label": "Atlassian Nairobi" },' +
        '{ "link_type" : "website", "link_url" : "#", "link_label": "Nairobi JS" },' +
        '{ "link_type" : "website", "link_url" : "#", "link_label": "Nairobi Gophers" },' +
        '{ "link_type" : "website", "link_url" : "#", "link_label": "Nairobi AI" },' +
        '{ "link_type" : "website", "link_url" : "#", "link_label": "Africa Game Developers" },' +
        '{ "link_type" : "website", "link_url" : "#", "link_label": "JVM Nairobi" }' +
    ']' +
'},' +
'{ "title": "User Groups (Chats)",' +
'"links": [' +
        '{ "link_type" : "telegram", "link_url" : "Android254", "link_label": "Android 254" },' +
        '{ "link_type" : "telegram", "link_url" : "kotlinkenya", "link_label": "Kotlin Kenya" },' +
        '{ "link_type" : "website", "link_url" : "https://spectrum.chat/flutter-kenya", "link_label": "Flutter Kenya" },' +
        '{ "link_type" : "telegram", "link_url" : "augnairobi", "link_label": "Atlassian Nairobi" },' +
        '{ "link_type" : "telegram", "link_url" : "nairobijs", "link_label": "Nairobi JS" },' +
        '{ "link_type" : "telegram", "link_url" : "nairobigophers", "link_label": "Nairobi Gophers" },' +
        '{ "link_type" : "telegram", "link_url" : "AfricaGameDevelopers", "link_label": "Africa Game Developers" } ' +
    ']' +
'},' +
'{ "title": "User Groups (Twitter)",' +
'"links": [' +
        '{ "link_type" : "twitter", "link_url" : "droidconKe", "link_label": "@DroidconKE" },' +
        '{ "link_type" : "twitter", "link_url" : "254AndroidDevs", "link_label": "@254AndroidDevs" },' +
        '{ "link_type" : "twitter", "link_url" : "KotlinKenya", "link_label": "@KotlinKenya" },' +
        '{ "link_type" : "twitter", "link_url" : "KenyaFlutterDev", "link_label": "@KenyaFlutterDev" },' +
        '{ "link_type" : "twitter", "link_url" : "ACNAirobi", "link_label": "@ACNAirobi" },' +
        '{ "link_type" : "twitter", "link_url" : "nairobijs", "link_label": "@NairobiJS" },' +
        '{ "link_type" : "twitter", "link_url" : "TheNairobiAI", "link_label": "@TheNairobiAI" }' +
    ']' +
'},' +
'{ "title": "Events and Meetups",' +
'"links": [' +
        '{ "link_type" : "meetup", "link_url" : "Android254", "link_label": "Android 254" },' +
        '{ "link_type" : "meetup", "link_url" : "KotlinKenya", "link_label": "Kotlin Kenya" },' +
        '{ "link_type" : "meetup", "link_url" : "ACNairobi", "link_label": "Atlassian Nairobi" },' +
        '{ "link_type" : "meetup", "link_url" : "nairobi-js", "link_label": "Nairobi JS" },' +
        '{ "link_type" : "meetup", "link_url" : "laravel-nairobi", "link_label": "Laravel Nairobi" },' +
        '{ "link_type" : "meetup", "link_url" : "Nairobi-Gophers", "link_label": "Nairobi Gophers" },' +
        '{ "link_type" : "meetup", "link_url" : "NairobiAI", "link_label": "Nairobi AI" },' +
        '{ "link_type" : "meetup", "link_url" : "Nairobi-Game-Development-Meetup", "link_label": "Nairobi Game Development" },' +
        '{ "link_type" : "meetup", "link_url" : "nairobi-jvm", "link_label": "JVM Nairobi" }' +
    ']' +
'}' +
']}';

var data = JSON.parse(grouparr);

for (var group in data.groups) 
{

    var_html = var_html + '<div class="chr-footer-links__group">';
    var_html = var_html + '<h4 class="chr-footer-links__heading js-footer-link" tabindex="0">' + data.groups[group].title + '</h4>';
    var_html = var_html + '<ul class="chr-footer-links__list">';

    for (var link in data.groups[group].links) 
    {
        var_html = var_html + '<li class="chr-footer-links__list-item footer-other-platform">';
        var_html = var_html + '<a href="';

        if (data.groups[group].links[link].link_type == 'telegram') var_html = var_html + 'https://t.me/';
        else if (data.groups[group].links[link].link_type == 'twitter') var_html = var_html + 'https://twitter.com/';
        else if (data.groups[group].links[link].link_type == 'facebook') var_html = var_html + 'https://facebook.com/';
        else if (data.groups[group].links[link].link_type == 'youtube') var_html = var_html + 'https://youtube.com/';
        else if (data.groups[group].links[link].link_type == 'meetup') var_html = var_html + 'https://meetup.com/';
        
        var_html = var_html + data.groups[group].links[link].link_url + '">';
        var_html = var_html + data.groups[group].links[link].link_label + '</a>';
        var_html = var_html + '</li>';
    }

    var_html = var_html + '</ul>';
    var_html = var_html + '</div>';
}
mik_footer.innerHTML = var_html;
