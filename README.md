# [Satus Framework for WordPress](http://satusframework.com/) 

Satus Framework for WordPress is a minimalist, [LESS](http://lesscss.org/) powered, mobile first responsive theme for developers based off of [Satus Framework](http://satusframework.com/) and inspired from [Roots Theme](http://rootstheme.com).

Satus Framework is based off of the [HTML5 Boilerplate](https://github.com/h5bp/html5-boilerplate).

I've opted to keep this theme minimal and as close to WordPress' default functionality as I could. As a result it uses WordPress' jQuery and it's code output isn't nice and clean but of course all of that can be modified by you, the mighty developer. If you desire to clean things up be sure to read [How to Hide The Fact That You’re Using WordPress](http://benword.com/how-to-hide-that-youre-using-wordpress/).

## Overview

### WordPress
 
* [Theme wrapper](http://scribu.net/wordpress/theme-wrappers.html).
* Custom author page that supports bio, gravatar, social networking links. Google profile link uses `[rel="me"]` ([Authorship markup video](http://youtu.be/FgFb6Y-UJUI)).
* `archive.php`, `category.php` and `tag.php` support description.
* Custom search results page.
* Editor CSS file.
* HTML output cleanup on gallery and images with captions. Gallery uses `ul` and images with captions use `figure` and `figcaption`.
* Custom template tags and shortcodes.
* Supports child themes.
* Nav menu supports description and contains classes and data attributes for Twitter Bootstrap's dropdowns if needed.
* Front page switches to full width if a page is selected.
* [Posts pagination]((http://wp-snippets.com/pagination-without-plugin/) from [WP-Snippets](http://wp-snippets.com/).
* Included page template `page-elements.php` with sample typography and form elements for quick styling.
* Included page template `page-grid.php` with grid examples and documentaion.

### HTML and CSS

* Uses [RDFAa Lite 1.1](http://www.w3.org/TR/rdfa-lite/) and [schema.org](http://schema.org/).
* Supports HTML4 and HTML5 document outlines for accessibility. Following are some great links on this subject: [HTML5 document outline revisited](http://www.456bereastreet.com/archive/201104/html5_document_outline_revisited/) and [Make sure your HTML5 document outline is backwards compatible](http://www.456bereastreet.com/archive/201205/make_sure_your_html5_document_outline_is_backwards_compatible/).
* Development [Modernizr](http://modernizr.com/) included.
* Does not support Internet Explorer 7.
* Uses box-sizing on all elements.
* Minimal styling.
* Fluid videos.
* Uses [Less](http://lesscss.org/) to compile a single style sheet for modern browsers and one for Internet Explorer 8 that has the media queries removed rather than using a js media query reader.
* Grid system inspired from [Object Oriented CSS Framework](https://github.com/stubbornella/oocss/tree/master/core/grid). Also includes Less mixins for semantic grid if desired.
* Fix for [iPhone viewport scale bug](http://www.blog.highub.com/mobile-2/a-fix-for-iphone-viewport-scale-bug/).
* Favicon and touch icons.

## Configuration

See `inc/config.php` to enable and disable theme functionality, define constants that are used throughout the theme, edit itemscope body tag and edit the post protected password form.

## Template Tags

* `satus_short_title(20)` Use to truncate the title if needed.
* `satus_the_excerpt(40,'characters', true, 'read&nbsp;more', 'excerpt')` Allows for multiple excerpt lengths in theme using either words or characters, optional read more link, ability to change read more text and ability to change the excerpt class.
* `is_tree(id)` Checks to see if pages are children or grand-children of the entered id.

## Shortcodes

* `[youtube id="YE7VzlLtp-4" ratio="widescreen"]` `[vimeo id="6284199" ratio="widescreen"]` Use these YouTube and Vimeo shortcodes for fuid videos. If ratio="widescreen" is not used it defaults to 4:3.
* `[field name="name-of-your-custom-field"]` Add iframes, image maps, html etc, via custom fields and this shortcode.
* `[html tag="article" atr='class="cool"']` `[close-html tag="article"]` This allows for adding custom wrapper html tags with attributes. To properly use these make sure they are on lines/paragraphs by themselves.
* `[row class=""]`, `[end-row]`, `[column width="1of2" class=""]`, `[end-column]` For using the grid in the editor. To properly use these make sure they are on lines/paragraphs by themselves.

## Child Theme Minimum Required Folders and Files

* `assets/`
* `inc/` with `config.php` and `enqueue.php` ONLY

## Troubleshooting

The only item that I see that could cause an issue is in `config.php`. The post protected form output is modified and this could potentially cause an issue on a WordPress update but I would think that is highly unlikely to happen.

## Project Information

* Source: [https://github.com/kylegeminden/satuswp](https://github.com/kylegeminden/satuswp)
* Website: [http://satusframework.com](http://satusframework.com)
* Author: [Kyle Geminden](http://kylegeminden.com)

## Thanks

Thanks to the open source web community's contributions as this project simply would not be possible for me alone.

