<?php

if (!function_exists('collect')) {

    /**
     * @param $arr
     * @return \RummyKhan\Collection\Collection
     */
    function collect($arr)
    {
        return \RummyKhan\Collection\Collection::make($arr);
    }
}