# Webinology Plugin Template
This is a copy of the WordPress Plugin Boilerplate which has been modified to use some of the things we rely on at 
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

## Usage
See https://kenn.kitchen/wordpress-plugin-boilerplate-part-one/ and https://kenn.kitchen/wordpress-plugin-boilerplate-part-two/

## Additional Details
