
Themx
===

Hi. I'm a starter theme called `themx`. I'm a theme quipped with - `Tailwindcss` and `Theme Helper Functions`. That makes me powerful enough to start right on.

My ultra-minimal CSS will ease your starting process. That makes me a cute little starter template.
 
* A modern workflow with necessary files to start a theme.
* HTML5 semantic elements included with proper commenting.
* A powerful framework, i.e - `Codestar Framework` support added to the theme. The core functionality comes from the support plugin called `Themx-Core`. Admin options, menu options, metaboxes etc. 
  are included.
* `inc/custom-header.php`. Just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample layouts in `sass/layouts/` made using CSS Grid for a sidebar on either side of your content. Just uncomment the layout of your choice in `sass/style.scss`.
Note: `.no-sidebar` styles are automatically loaded.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
* Licensed under GPLv2 or later. :) Use it to make something cool.

[//]: # ()
[//]: # (Installation)

[//]: # (---------------)

[//]: # ()
[//]: # (### Requirements)

[//]: # ()
[//]: # (`_s` requires the following dependencies:)

[//]: # ()
[//]: # (- [Node.js]&#40;https://nodejs.org/&#41;)

[//]: # (- [Composer]&#40;https://getcomposer.org/&#41;)

[//]: # ()
[//]: # (### Quick Start)

[//]: # ()
[//]: # (Clone or download this repository, change its name to something else &#40;like, say, `megatherium-is-awesome`&#41;, and then you'll need to do a six-step find and replace on the name in all the templates.)

[//]: # ()
[//]: # (1. Search for `'_s'` &#40;inside single quotations&#41; to capture the text domain and replace with: `'megatherium-is-awesome'`.)

[//]: # (2. Search for `_s_` to capture all the functions names and replace with: `megatherium_is_awesome_`.)

[//]: # (3. Search for `Text Domain: _s` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.)

[//]: # (4. Search for <code>&nbsp;_s</code> &#40;with a space before it&#41; to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.)

[//]: # (5. Search for `_s-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.)

[//]: # (6. Search for `_S_` &#40;in uppercase&#41; to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.)

[//]: # ()
[//]: # (Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.)

[//]: # ()
[//]: # (### Setup)

[//]: # ()
[//]: # (To start using all the tools that come with `_s`  you need to install the necessary Node.js and Composer dependencies :)

[//]: # ()
[//]: # (```sh)

[//]: # ($ composer install)

[//]: # ($ npm install)

[//]: # (```)

[//]: # ()
[//]: # (### Available CLI commands)

[//]: # ()
[//]: # (`_s` comes packed with CLI commands tailored for WordPress theme development :)

[//]: # ()
[//]: # (- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards]&#40;https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/&#41;.)

[//]: # (- `composer lint:php` : checks all PHP files for syntax errors.)

[//]: # (- `composer make-pot` : generates a .pot file in the `languages/` directory.)

[//]: # (- `npm run compile:css` : compiles SASS files to css.)

[//]: # (- `npm run compile:rtl` : generates an RTL stylesheet.)

[//]: # (- `npm run watch` : watches all SASS files and recompiles them to css when they change.)

[//]: # (- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards]&#40;https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/&#41;.)

[//]: # (- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards]&#40;https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/&#41;.)

[//]: # (- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.)

[//]: # ()
[//]: # (Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :&#41;)

[//]: # ()
[//]: # (Good luck!)
