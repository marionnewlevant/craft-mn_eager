<?php
namespace Craft;

class MnEagerHelper
{
    public static function isEager($stuff)
    {
        return is_array($stuff);
    }

    public static function find($stuff)
    {
        if (is_array($stuff))
        {
            return ($stuff);
        } else {
            return $stuff->find();
        }
    }

    public static function first($stuff)
    {
        if (is_array($stuff))
        {
            return (count($stuff) ? $stuff[0] : null);
        } else {
            return $stuff->first();
        }
    }

    public static function last($stuff)
    {
        if (is_array($stuff))
        {
            $count = count($stuff);
            return ($count ? $stuff[$count-1] : null);
        } else {
            return $stuff->last();
        }
    }

    public static function nth($stuff, $n=0)
    {
        if (is_array($stuff))
        {
            $count = count($stuff);
            return (0 <= $n && $n < $count ? $stuff[$n] : null);
        } else {
            return $stuff->nth($n);
        }
    }

    public static function ids($stuff)
    {
        if (is_array($stuff))
        {
            $result = array();
            foreach ($stuff as $thing) {
                $result[] = $thing->id;
            }
            return $result;
        } else {
            return $stuff->ids();
        }
    }

    public static function total($stuff)
    {
        if (is_array($stuff))
        {
            return count($stuff);
        } else {
            return $stuff->total();
        }
    }
}