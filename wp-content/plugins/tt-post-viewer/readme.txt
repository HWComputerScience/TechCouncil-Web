=== TT Post Viewer ===
Contributors: rashed.latif
Donate link: http://www.knowhowto.com.au/donate
Tags: post, posts, widget, thumbnail, shortcode, excerpt, latest, recent, commented, related, popular, sidebar, sidebar widget, plugin, related post, popular post, post by date, post by author, post by category, list, comments, images, image
Requires at least: 3.0.1
Tested up to: 3.8.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin to display posts in different ways.

== Description ==

*I Appreciate if you please give reviews and any suggestions after using this plugin.*

TT Post Viewer is a plugin that lets you display Most recent posts, Most popular posts, Most commented posts, Related Posts, Featured Posts, Posts by author, Posts by category, Posts by date in widget area and also can be displayed in post area by using short codes.  Posts can be displayed as List or with thumbnail. You can also select whether you want the excerpt to be displayed or not and you can also set the number of words to display.

*This plugin is checked on different popular themes and it works fine in most themes. In some themes you may need to tweak style sheet to make it look better. Few more features will be added in the future versions.*

= How to Use: =
TT Post viewer option page can be accessed by going to 'Settings' and then 'Post Viewer Options'.
There are 9 sections in the option page.

* General Settings
* Recent Posts
* Most Popular Posts
* Most Commented Posts
* Related Posts
* Featured Posts
* Posts by Authors
* Posts by Categories
* Posts By Date

= 1. General Settings: =

This section is to set the thumbnail size that will be displayed in widget area and post area. Width and Height is in pixel. After the size is set and saved you need to run any plugin that regenerate thumbnail sizes to take that into effect. One such plugin is Force Regenerate Thumbnails.

= 2. Recent Posts: =
 
* **Title**: This field is to set the title that will be displayed in widget area or post area when short code is used for recent posts. If this field is empty then default title will be displayed.

* **Enable Sidebar Widget**: If this check box is selected then a widget for recent post will be enabled and that widget can be used in sidebar or footer or any other widget area that a theme supports. By checking this option few more options will be displayed. Those are:
	* *Number of posts*: Set the number of posts to be displayed.
	* *Display posts as*: Select between list view or thumbnail view.
	* *By author*: Select one or multiple authors.
	* *By Category*: Select one or multiple Categories.

When the widget is enabled in order to use that widget you need to go to 'Appearance' -> 'Widgets' and then select "TTPV: Recent Posts" widget and drag and drop to the widget area. Once the it is placed in the widget area all the values that are set for this widget in the Post Viewer Options page will be available here as well. You can also change the values or options from the widget page.  Any values that will be set from widget page will override the values set from Post Viewer main option page.

* **Enable Shortcode**: By checking this shortcode will be enable for recent posts. Anywhere in the post shortcode can be placed. Basic shortcode for recent post is [ttpv-recent]. Few more options will be displayed when this checkbox will be selected.
	* *Number of posts*: Set the number of posts to be displayed.
	* *Display posts as*: Select between list view or thumbnail view.
	* *Show Excerpt*: To enable and disable excerpts to be displayed
	* *Excerpt size*: Size of excerpts in word numbers.
	* *By author*: Select one or multiple authors.
	* *By Category*: Select one or multiple Categories.

= Use of shortcode: = 

>*`[ttpv-recent]`: Shows recent posts  depending on the options set from main Post Viewer Option page.*

>*`[ttpv-recent auths='1,2']`: Shows posts by selected authors. Here Posts by user id 1 and 2 will be displayed.*

>*`[ttpv-recent cats='1,2']`: Shows posts from selected categories. Here Posts category id 1 and 2 will be displayed.*

>*`[ttpv-recent cats='1,2' auths='1,2']`: Can be used this way to customise more.*

>*`[ttpv-recent disp='thumbnail']`: Display all posts with thumbnail*

>*`[ttpv-recent disp='list']`: Display all posts as list.*

>*`[ttpv-recent posts='4']`: Displays 4 posts.*

>*`[ttpv-recent title='Most Recent Posts']`: Display '"Most Recent Posts" as title in recent post area.*

>*`[ttpv-recent exrpt='yes' exrptlen='10']`: Displays posts with excerpts enabled and excerpt size is set to 10 words.*

These options can be used in any combination. Any values that will be set in shortcode will override the values set from main option page. Otherwise it will use the values set from main option page as default values.

= 3. Most Popular Posts: =  Similar use as Recent Posts. Only when using shortcode you need to type [ttpv-mostpopular].

**Some example:**
>*`[ttpv-mostpopular]`: Shows recent posts  depending on the options set from main Post Viewer Option page.*

>*`[ttpv-mostpopular auths='1,2']`: Shows posts by selected authors. Here Posts by user id 1 and 2 will be displayed.*

>*`[ttpv-mostpopular cats='1,2']` : Shows posts from selected categories. Here Posts category id 1 and 2 will be displayed.*

>*`[ttpv-mostpopular cats='1,2' auths='1,2']`: Can be used this way to customise more.*

>*`[ttpv-mostpopular disp='thumbnail']`: Display all posts with thumbnail*

>*`[ttpv-mostpopular disp='list']`: Display all posts as list.*

>*`[ttpv-mostpopular posts='4']`: Displays 4 posts.*

>*`[ttpv-mostpopular title='Most Recent Posts']`: Display "Most Recent Posts" as title in recent post area.*

>*`[ttpv-mostpopular exrpt='yes' exrptlen='10']`: Displays posts with excerpts enabled and excerpt size is set to 10 words.*

= 4. Most Commented Posts: = Similar use as the previous options. Only when using shortcode you need to type `[ttpv-mostcommented]`.

= 5. Featured Posts: = Similar use as the previous options. *When this plugin is activated a check box is added in post edit page so any post can be selected as a featured post. For whichever post this check box is selected that will appear in featured post list*. When using shortcode you need to type `[ttpv-featured]`.

= 6. Posts by Authors: = Similar use as the previous options. Only when using shortcode you need to type `[ttpv-author]`.

= 7. Related Posts: = similar use as previous options. Only difference is there is no option to select author or category. Widgets and shortcodes will only be used in single page. For shortcodes you need to type `[ttpv-related]`.

= 8. Posts by Category: = This is also similar to the other ones but it doesn't have the option to select author. Apart from that everything is similar. For shortcodes you need to type `[ttpv-category]`.
= 9. Posts by Date: = This one is also used exactly same as other options. In addition it have 2 additional fields to select the date range. One is for the start date and other is for end date. So the posts which are posted between that date range will be displayed. For shortcodes you need to type `[ttpv-bydate]`.

**Example:** 

>*`[ttpv-bydate from_date='01-01-2010' to_date='23-02-2014' posts='4' exrpt='yes' exrptlen='5']`*


== Installation ==

1. Unzip & upload the plugin directory inside your /wp-content/plugins/ directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to 'Settings' and ‘Post Viewer Options'



== Screenshots ==

1. General Settings
2. Recent Post Option Section
3. Most commented post widget
4. Posts by Date option section
5. Options Page