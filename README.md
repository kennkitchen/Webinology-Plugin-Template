# Webinology Plugin Template
This is a copy of the WordPress Plugin Boilerplate (WPPB) which has been modified to use some of the things we rely on at 
Webinology when developing plugins.

## Installation Instructions
First, clone this repo into a location where you can edit the files.

### Renaming
This is the hardest part! Pick a name for your new plugin. For example, say your plugin is going to be "Super Awesome 
Widgetizer".

* Rename the root folder from `webinology-plugin-template` to `super-awesome-widgetizer`.
* Rename all files from `*webinology-plugin-template*` to `*super-awesome-widgetizer*`, keeping the remainder of the original filename. For example, `class-webinology-plugin-template-activator.php` would become `class-super-awesome-widgetizer-activator.php`.
* In all files, change:
  * `*Webinology_Plugin_Template*` to `*Super_Awesome_Widgetizer*`;
  * `*webinology-plugin-template*` to `*super-awesome-widgetizer*`;
  * `*WEBINOLOGY_PLUGIN_TEMPLATE*` to `*SUPER_AWESOME_WIDGETIZER*`.
* FINALLY, don't forget to update `composer.json`, `README.md`, `readme.txt`, and the comments at the top of the plugin.

#### Help for renaming files
On Linux, the easiest way to do the renames is with the `rename` command. On Ubuntu, this can be installed with 
`sudo apt install rename`.
Using our example, the command would look like this:
```shell
shopt -s globstar
rename 's/webinology-plugin-template/super-awesome-widgetizer/g' **/*.php -v
```
#### Help for global replacements
```shell
find . -type f -name "*.php" -exec sed -i 's/Webinology_Plugin_Template/Super_Awesome_Widgetizer/g' {} +
```
```shell
find . -type f -name "*.php" -exec sed -i 's/webinology-plugin-template/super-awesome-widgetizer/g' {} +
```
```shell
find . -type f -name "*.php" -exec sed -i 's/WEBINOLOGY_PLUGIN_TEMPLATE/SUPER_AWESOME_WIDGETIZER/g' {} +
```
## Composer
After all of the renaming is done, run `composer install` from the root directory of your plugin.

## Usage
### Custom Features
This plugin uses Composer to install some dependencies that we frequently use. These are:
* Prod
  * [Twig](https://twig.symfony.com/)
  * [Monolog](https://github.com/Seldaek/monolog)
  * [PHP dotenv](https://github.com/vlucas/phpdotenv)
* Dev
  * [PHPUnit](https://phpunit.de/)
  * [PHPStan](https://phpstan.org/)

Composer is also used to bring in all classes that are present in the custom `classes` subdirectory. There's an example 
class file in there already.

### General WordPress Plugin Boilerplate info
For general information about using the WordPress Plugin Boilerplace, see
See [WordPress Plugin Boilerplate Part One](https://kenn.kitchen/wordpress-plugin-boilerplate-part-one/) and [WordPress Plugin Boilerplate Part Two](https://kenn.kitchen/wordpress-plugin-boilerplate-part-two/) at Kenn Kitchen's blog.

## TODO
It's probably a good idea to switch to namespaces at some point, but WPPB doesn't by default; it loads its classes
manually. To use a different method of loading might mean refactoring a lot of their original code, which would then 
make it more work for us to update our base code (in the event that they update theirs). 