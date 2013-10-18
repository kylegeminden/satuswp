### HEAD October 17, 2013

* Removed `satus_get_search_form()`, `Satus_Nav_Walker` and `Satus_Navbar_Waker` function from `cleanup.php`.
* Removed reference to walker class in `header.php`.
* Deleted `sidebar.php` as it was no longer needed and adjusted `wrapper.php` accordingly.
* Added `searchform.php` file in root of theme and referenced the template part.


### 2.5.0 June 22, 2013

* Changed id's to classes where possible.
* Cleaned up code comments.
* Made `templates/content-author.php` and referenced it in `author.php`.
* Made read more in `satus_the_excerpt()` optional, added the ability to change the read more text and add or change class names.
* Made comment navigation accept the posts navigation symbols from `inc/config.php`.
* Made `inc/init.php` and moved all inital theme functions from `functions.php` to it.
* Made nice search optional in `inc/config.php`.
* Made gallery and images with captions rewrites optional in `inc/config.php`.
* Custom comment form is now optional to avoid issues with plugins.
* Fixed document outline for `templates/comments.php` when there are no comments.
* Removed `hgroup` from `head` as it's no longer valid.



### 2.0.1 March 28, 2013

* Class name changes for posts.
* Updated first and last widget function in `cleanup.php`.
* Updated nav walker function to allow for multiple dropdowns in `cleanup.php`.
* Updated sidebar register function in `functions.php`.
* Minor style updates to post thumbnails and comments.
* Updates from Satus HTML 2.0.1.


### 2.0.0 February 12, 2013

* Changed back to mobile first responsive similar to the initial release.
* Added changes from Satus HTML 2.0.0.
* Updated `enqueue.php` to load `main.css` and `main-ie.css`.
* Added `content-home-page.php` and modified `front-page.php` to load that if a page is selected to display for the front page and it also switches to full width.
* Modified the `satus_display_sidebar()` function to go full width on the front page if a page is selected to display.
* Updated galley and caption in `cleanup.php` to that from [roots](https://github.com/retlehs/roots/blob/master/lib/cleanup.php) but kept in the ability to add classes via `config.php`.
* Simplified editor styles in `editor.less`.

### 1.5.1 January 14, 2013

* Removed code comments in `grid.less` regarding only using even numbers as that is no longer valid.
* Removed `px` unit from code font size variable.

### 1.5.0 January 13, 2013

* Applied 1.5.0 changes from [satushtml](https://github.com/kylegeminden/satushtml).
* Added any needed wrappers and classes for grid.
* Added page template `page-grid.php`. Contains grid examples and documentation.
* Renamed page template `page-satusframework.php` to `page-elements.php`.
* Added ability to add classes to gallery `ul`, `#main`, `#sidebar` and post thumbnail.
* Added text to protected post form in `config.php`.
* Added grid shortcodes and shortcode select box.
* Updated `enqueue.php` to load `satus.css` and `app.css`. Removed not-ie conditional function as it was no longer needed and fixed bug with comment reply script not loading.
* Added automatic feed link support in `functions.php`.
* Made it so all links get put in the `head` except for the WordPress version generator.

### 1.0.2 December 11, 2012

* Fixed css table of content comments as some were `-n-` instead of `!n!`.
* Updated head cleanup in `cleanup.php`.
* Removed post type check in feed link in `head.php` as it was not needed.

### 1.0.1 November 29, 2012

* Removed categories list from `post-meta.php` and `content-single.php`.
* Changed class name from `.actions` to `.comment-count` in post-meta.php.
* Changed class name from `.section.tags` to just `.section` in `post-meta.php` and `content-single.php`.
* Put tags in a `ul`.
* Updated `page-header.php` based on Roots Theme.
* Edited `satus_typeof()` tag condition in `config.php`. Made it so the else statement returns nothing and if on the post type of page it returns `typeof="WebPage"`.

### 1.0.0 November 27, 2012

* Initial Release