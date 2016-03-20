<?php
/**
 * MN Eager plugin for Craft CMS
 *
 * MN Eager Variable
 *
 * @author    Marion Newlevant
 * @copyright Copyright (c) 2016 Marion Newlevant
 * @link      http://marion.newlevant.com
 * @package   MnEagerFetch
 * @since     1.0.0
 */

namespace Craft;

class MnEagerVariable
{
    public function isEager($stuff)
    {
        return MnEagerHelper::isEager($stuff);
    }

    public function find($stuff)
    {
        return MnEagerHelper::find($stuff);
    }

    public function first($stuff)
    {
        return MnEagerHelper::first($stuff);
    }

    public function last($stuff)
    {
        return MnEagerHelper::last($stuff);
    }

    public function nth($stuff, $n)
    {
        return MnEagerHelper::nth($stuff, $n);
    }

    public function ids($stuff)
    {
        return MnEagerHelper::ids($stuff);
    }

    public function total($stuff)
    {
        return MnEagerHelper::total($stuff);
    }
}