<?php
/************************************** For Active sidebar created by : vikas katariya (09-09-2021) *****************************/

function activeMenu($uri = '') {
    $active = '';
    if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
        $active = 'mm-active';
    }
    return $active;
}
