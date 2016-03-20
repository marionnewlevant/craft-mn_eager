# MN Eager plugin for Craft CMS

access data that may or may not have been eager-loaded

## Installation

To install MN Eager, follow these steps:

1. Download & unzip the file and place the `mneager` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins

MN Eager works on Craft 2.4.x, Craft 2.5.x., and Craft 2.6.x

## MN Eager Overview

The code to [fetch the elements](https://craftcms.com/docs/templating/elementcriteriamodel#fetching-the-elements) from a Craft [ElementCriteriaModel](https://craftcms.com/docs/templating/elementcriteriamodel) is different when the elements have been [eager-loaded](https://craftcms.com/docs/templating/eager-loading-elements).

This plugin provides a uniform syntax for fetching elements whether or not they have been eager loaded.

## Using MN Eager

The MN Eager functions are available as craft variables and as twig extensions.

### [find](https://craftcms.com/docs/templating/elementcriteriamodel#find)

Use any of:

- `craft.mneager.find(someField)`
- `mnFind(someField)`
- `someField | mnFind`

### [first](https://craftcms.com/docs/templating/elementcriteriamodel#first)

Use any of:

- `craft.mneager.first(someField)`
- `mnFirst(someField)`
- `someField | mnFirst`

### [last](https://craftcms.com/docs/templating/elementcriteriamodel#last)

Use any of:

- `craft.mneager.last(someField)`
- `mnLast(someField)`
- `someField | mnLast`

### [nth](https://craftcms.com/docs/templating/elementcriteriamodel#nth)

Use any of:

- `craft.mneager.nth(someField, index)`
- `mnNth(someField, index)`
- `someField | mnNth(index)`

### [ids](https://craftcms.com/docs/templating/elementcriteriamodel#ids)

Use any of:

- `craft.mneager.ids(someField)`
- `mnIds(someField)`
- `someField | mnIds`

### [total](https://craftcms.com/docs/templating/elementcriteriamodel#total)

Use any of:

- `craft.mneager.total(someField)`
- `mnTotal(someField)`
- `someField | mnTotal`

### isEager

In addition to the fetching function, `isEager` will tell you whether an ElementCriteriaModel has been eager loaded:

- `craft.mneager.isEager(someField)`
- `isEager(someField)`
- `someField | isEager`

## MN Eager Changelog

### 1.0.0 -- 2016.03.16

* Initial release

### 1.0.1 -- 2016.03.19

* added `last`, `nth`, `ids`, `total` to round out the fetching functions.
* added `isEager`
* added twig filters and functions

Brought to you by [Marion Newlevant](http://marion.newlevant.com)
