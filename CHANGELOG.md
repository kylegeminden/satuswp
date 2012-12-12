### 1.0.0 November 27, 2012

* Initial Release

### 1.0.1 November 29, 2012

* Removed categories list from `post-meta.php` and `content-single.php`.
* Changed class name from `.actions` to `.comment-count` in post-meta.php.
* Changed class name from `.section.tags` to just `.section` in `post-meta.php` and `content-single.php`.
* Put tags in a `ul`.
* Updated `page-header.php` based on Roots Theme.
* Edited `satus_typeof()` tag condition in `config.php`. Made it so the else statement returns nothing and if on the post type of page it returns `typeof="WebPage"`.

### 1.0.2 December 11, 2012

* Fixed css table of content comments as some were `-n-` instead of `!n!`.
* Updated head cleanup in `cleanup.php`.
* Removed post type check in feed link in `head.php` as it was not needed.