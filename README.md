# Convert old HTML into WordPress Theme/Site
## Converting an old plain static html4 site into a wordpress theme/website
> Some functionalities, such as Contact Form, are replaced using plugins and WP built-in features

Original HTML4 site: [Clearly Expressed Translation Services](https://sageundschreibe.eu/)

~~WordPress 2017 version: [Clearly Expressed 2017 (demo)](https://clearlyexpressed.ca/wordpress)~~
WordPress 2019 version: [Clearly Expressed 2019 (production)](https://clearlyexpressed.ca/)

## TODO
- [x] ~~Convert HTML files to basic WP PHP templates~~
- [x] ~~Create WP structure such as Sidebars, Header, Footer, Widgets~~
- [x] ~~Enhance WP core functionality such as Customizer~~
- [x] ~~Move hard coded content into DB via dashboard and widgets for sidebars~~
- [x] ~~Image Optimization~~ needs extra TLC
- [x] ~~Remove Flash Audio Player and enhance media features widgets~~
- [x] ~~Plugins for Forms and Dynamic Widgets~~
- [x] ~~Basic SASS and CSS optimization~~
- [x] ~~Update documentation~~
- [x] ~~Install WP demo version~~
- [ ] Responsive Layout
- [ ] SASS logic and structure
- [ ] Logo features
- [ ] Multi-language support and implementation
- [ ] Multi Admin installation for EN/DE version
- [ ] Footer Widgets
- [ ] Review Spaghetti Code

## TIMELINE
###### >> 17 August 2017

Renamed folder to clearlyexpressed.
Added WP declaration on top of style.css
Renamed index.html into index.php, to comply with the basic requirements to create a WP theme.
Added placeholder image for WP dashboard.

Added wp_head/footer php functions into index.php
Created functions.php to enqueue styles and scripts.
Moved css rules to a css/style.css location.
Created js/main.js empty file in jquery noconflict mode

###### >> 18 August 2017

Converted static .html pages into .php
Assigned template name to each .php page
Created empty files for header/footer.php
Created equivalent pages via WP dashboard and assigned its own page template

Removed js scripts from the footer and moved to main.js
Removed hard coded header and footer code from each page.
Moved header/footer code to the default WP header/footer.php files.
Assigned functions to get header and footer to each page.

1. Implemented function setup into functions.php for:
	- translation ready + empty languages folder
	- create menu
	- title-tag support
	- HTML5 markups support
2. Implemented/cleaned ```<head>``` meta-tags, including:
	- title tag handled by WP
	- initial viewport meta

Implemented Menus.
This commit or the one before this introduced a regression on the content layout and on the Menu settings in the Dashboard.
Newly created and assigned menu won't display.
Instead a default menu will display with all the pages created.
I think there is a bug in WP and the Customizr when building themes from scratch.
TBI

FIXED issue on menu rendering:
keys for the menu array and theme_location arguments were different.
I changed from Main Menu and Footer Menu to primary and secondary without updating the arguments.

Cleaned Menus and code.
Removed menu function from footer.
Added function to assign .aktiv class to current menu item in the navigation.

Made default style.css the main style file.
Imported old css into main style.
Few tweak in the old css and few classes for the WP menu.
Temporary reverted the DOCTYPE to the old 4.0 since the HTML5 doctype introduces regressions in the layout and/or css conflicts.
It will be fixed in phase 2 when I'll move to SASS

###### >> 19 August 2017

Removed useless css files.
Added folders and files to comply a bit more with WP requirements.
Created front-page.php for home and a fresh index.php for the loop and posts.
Though posts and blogging won't probably be implemented for this project.
Updated internal links.

Improved header with WP built in functionality.
Improved footer with dynamic credits.
Removed hard coded privacy policy, a plugin will take over.

Added extra functions for:
	- Google Fonts
	- JS
	- excerpt link
Added Sidebars and Widgets capabilities.
Implemented WP loop in each page.
Implemented Sidebars in pages.
Implemented sidebars in FP as well.
Started implementing image rendering.

###### >> 20 August 2017

Implemented Customizer options.
Header images enabled.
Polished few styles with wrong selectors.
Enqueued Google Fonts via functions.php

**SASS** + Removed hard coded content from each visible page template.
Template that won't be used are left as they are, for now.
Sidebar content moved into Text Widgets.
Widget Dynamic Plugin used to select sidebar sections.
Contact Form replaced hard coded form in Contact Us.
Media items now displayed via Audio Widgets in the sidebar.
**SASS**: first round of cleaning/organizing styles.

###### >> 21 August 2017

Update readme.md.
Corrected few items according to theme checker.
