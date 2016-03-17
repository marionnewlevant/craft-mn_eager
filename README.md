# MN Eager plugin for Craft CMS

access data that may or may not have been eager-loaded

## Installation

To install MN Eager, follow these steps:

1. Download & unzip the file and place the `mneager` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins

MN Eager works on Craft 2.4.x, Craft 2.5.x., and Craft 2.6.x

## MN Eager Overview

Simplify fetching of fields in an environment where they may have been [Eager Loaded](https://craftcms.com/docs/templating/eager-loading-elements)

## Using MN Eager

`{% set image = craft.mnEager.first(entry.assetsField) %}` will set `image` to the first item in `entry.assetsField` (or `null`) whether or not `assetsField` has been [eager loaded](https://craftcms.com/docs/templating/eager-loading-elements).

`{% set images = craft.mnEager.find(entry.assetsField) %}` will set `images` to an array of items whether or not `assetsField` has been [eager loaded](https://craftcms.com/docs/templating/eager-loading-elements).

You may find this especially useful in writing twig [macros](http://twig.sensiolabs.org/doc/tags/macro.html) which are agnositic as to whether a field has been eager loaded.

## MN Eager Changelog

### 1.0.0 -- 2016.03.16

* Initial release

Brought to you by [Marion Newlevant](http://marion.newlevant.com)