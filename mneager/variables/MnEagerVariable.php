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
    public function first($stuff)
    {
        if (is_array($stuff))
        {
            return (count($stuff) ? $stuff[0] : null);
        } else {
            return $stuff->first();
        }
    }

    public function find($stuff)
    {
        if (is_array($stuff))
        {
            return ($stuff);
        } else {
            return $stuff->find();
        }
    }
}