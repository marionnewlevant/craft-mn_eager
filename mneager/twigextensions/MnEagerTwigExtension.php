<?php
/**
 * MN Eager plugin for Craft CMS
 *
 * MN Eager Twig Extension
 *
 * @author    Marion Newlevant
 * @copyright Copyright (c) 2016 Marion Newlevant
 * @link      http://marion.newlevant.com
 * @package   MnEager
 * @since     1.0.1
 */

namespace Craft;

// use Twig_Extension;
// use Twig_Filter_Method;

class MnEagerTwigExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'MnEager';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return array(
            'isEager' => new \Twig_Filter_Method($this, '_isEager'),
            'mnFind' => new \Twig_Filter_Method($this, '_find'),
            'mnFirst' => new \Twig_Filter_Method($this, '_first'),
            'mnLast' => new \Twig_Filter_Method($this, '_last'),
            'mnNth' => new \Twig_Filter_Method($this, '_nth'),
            'mnIds' => new \Twig_Filter_Method($this, '_ids'),
            'mnTotal' => new \Twig_Filter_Method($this, '_total'),
        );
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'isEager' => new \Twig_Function_Method($this, '_isEager'),
            'mnFind' => new \Twig_Function_Method($this, '_find'),
            'mnFirst' => new \Twig_Function_Method($this, '_first'),
            'mnLast' => new \Twig_Function_Method($this, '_last'),
            'mnNth' => new \Twig_Function_Method($this, '_nth'),
            'mnIds' => new \Twig_Function_Method($this, '_ids'),
            'mnTotal' => new \Twig_Function_Method($this, '_total'),
        );
    }

    public function _isEager($stuff)
    {
        return MnEagerHelper::isEager($stuff);
    }

    public function _find($stuff)
    {
        return MnEagerHelper::find($stuff);
    }

    public function _first($stuff)
    {
        return MnEagerHelper::first($stuff);
    }

    public function _last($stuff)
    {
        return MnEagerHelper::last($stuff);
    }

    public function _nth($stuff, $n)
    {
        return MnEagerHelper::nth($stuff, $n);
    }

    public function _ids($stuff)
    {
        return MnEagerHelper::ids($stuff);
    }

    public function _total($stuff)
    {
        return MnEagerHelper::total($stuff);
    }

}