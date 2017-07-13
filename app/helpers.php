<?php

function current_page($uri = "/")
{
    // echo strstr(request()->path(), $uri);
    return strstr(request()->path(), $uri);
}

function bread_crumbs($uri = "/")
{
    // $name = str_replace('/', '', current_page());
    // return ucfirst($name);
    // return strstr(request()->path(), $uri);
    // echo request()->path();

    // echo request()->path();
}