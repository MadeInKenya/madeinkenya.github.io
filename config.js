
// Default Site Name
var mik_site_title = 'Made in Kenya';

// Links that show on the footer of every webpage

var var_html = "";
var mik_footer = document.getElementById('mik_footer_groups');

var grouparr = '{ "groups" : [' +
'{ "title": "User Groups (Sites)",' +
'"links": [' +
        '{ "website": "#", "label": "Android 254" },' +
        '{ "website": "#", "label": "Kotlin Kenya" },' +
        '{ "website": "#", "label": "Flutter Kenya" },' +
        '{ "website": "https://ace.atlassian.com/nairobi/", "label": "Atlassian Nairobi" },' +
        '{ "website": "#", "label": "Nairobi JS" },' +
        '{ "website": "#", "label": "Nairobi Gophers" },' +
        '{ "website": "#", "label": "Nairobi AI" },' +
        '{ "website": "#", "label": "Africa Game Developers" },' +
        '{ "website": "#", "label": "JVM Nairobi" }' +
    ']' +
'},' +
'{ "title": "User Groups (Chats)",' +
'"links": [' +
        '{ "telegram": "Android254", "label": "Android 254" },' +
        '{ "telegram": "kotlinkenya", "label": "Kotlin Kenya" },' +
        '{ "website": "https://spectrum.chat/flutter-kenya", "label": "Flutter Kenya" },' +
        '{ "telegram": "augnairobi", "label": "Atlassian Nairobi" },' +
        '{ "telegram": "nairobijs", "label": "Nairobi JS" },' +
        '{ "telegram": "nairobigophers", "label": "Nairobi Gophers" },' +
        '{ "telegram": "AfricaGameDevelopers", "label": "Africa Game Developers" } ' +
    ']' +
'},' +
'{ "title": "User Groups (Twitter)",' +
'"links": [' +
        '{ "twitter": "droidconKe", "label": "@DroidconKE" },' +
        '{ "twitter": "254AndroidDevs", "label": "@254AndroidDevs" },' +
        '{ "twitter": "KotlinKenya", "label": "@KotlinKenya" },' +
        '{ "twitter": "KenyaFlutterDev", "label": "@KenyaFlutterDev" },' +
        '{ "twitter": "ACNAirobi", "label": "@ACNAirobi" },' +
        '{ "twitter": "nairobijs", "label": "@NairobiJS" },' +
        '{ "twitter": "TheNairobiAI", "label": "@TheNairobiAI" }' +
    ']' +
'},' +
'{ "title": "Events and Meetups",' +
'"links": [' +
        '{ "meetup": "Android254", "label": "Android 254" },' +
        '{ "meetup": "KotlinKenya", "label": "Kotlin Kenya" },' +
        '{ "meetup": "ACNairobi", "label": "Atlassian Nairobi" },' +
        '{ "meetup": "nairobi-js", "label": "Nairobi JS" },' +
        '{ "meetup": "laravel-nairobi", "label": "Laravel Nairobi" },' +
        '{ "meetup": "Nairobi-Gophers", "label": "Nairobi Gophers" },' +
        '{ "meetup": "NairobiAI", "label": "Nairobi AI" },' +
        '{ "meetup": "Nairobi-Game-Development-Meetup", "label": "Nairobi Game Development Meetup" },' +
        '{ "meetup": "nairobi-jvm", "label": "JVM Nairobi" }' +
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
        var_html = var_html + '<a href="#">';
        var_html = var_html + data.groups[group].links[link].label + '</a>';
        var_html = var_html + '</li>';
    }

    var_html = var_html + '</ul>';
    var_html = var_html + '</div>';
}
mik_footer.innerHTML = var_html;