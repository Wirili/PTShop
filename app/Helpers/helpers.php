<?php

use Illuminate\Contracts\View\Factory as ViewFactory;

/**
 * Get the evaluated view contents for the given view.
 *
 * @param  string  $view
 * @param  array   $data
 * @param  array   $mergeData
 * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
 */
function themeView($view = null, $data = [], $mergeData = [])
{
    $factory = app(ViewFactory::class);

    if (func_num_args() === 0) {
        return $factory;
    }

    return $factory->make($view, $data, $mergeData);
}