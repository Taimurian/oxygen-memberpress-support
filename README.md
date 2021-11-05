# Oxygen MemberPress Template Support #
**Contributors:** Taimur Aziz 
**Tags:** memberpress, oxygen  
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html

To customise the default MemberPress Templates you need to create a directory in your theme or child theme's base folder named "memberpress." Inside that folder, you can place any of the templates files (found in memberpress/app/views/…) to override them with your own. 

This plugin is made for [Oxygen Builder](http://oxygenbuilder.com/) users where the theme is completely disabled. Simply add your customised MemberPress template files inside the /mepr_templates/ directory inside this plugin.

See [How to Override Template Files? in MemberPress](https://docs.memberpress.com/article/165-how-to-override-template-files).
 

## Installation ##

1. [Download the plugin here.](https://github.com/Taimurian/oxygen-memberpress-support/archive/main.zip)
2. Go to Plugins > Add New in your WordPress admin. Click on `Upload Plugin` and browse for the zip file.
3. Activate the plugin.

## Usage ##

1. Just copy over the files that you need to override (found in memberpress/app/views/…) 
2. Paste files into the 'mepr_templates' directory in this plugin.
2. Customize the files to create your custom memberpress templates.

## Note
Copying the entire memberpress/app/views/ folder over is not recommended. But instead, just copy over the files that you need to override. This will limit the chance of conflicts with future upgrades to MemberPress.

## Credit
This plugin is based on [Oxygen-EDD-Support](https://github.com/wplit/Oxygen-EDD-Support) By [David Browne](https://github.com/wplit)

## Changelog ##

### 1.0.0 - Oct 5, 2021 ###
* Initial Release
