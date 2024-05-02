<?php

if (!defined('WPINC')) {
    exit;
}

if (!defined('ABSPATH')) {
    exit;
}

class WPBB_Main
{
    public function __construct()
    {
        add_action('init', array($this, 'test'));
    }

    function test()
    {
        echo "Hello World!";
        die();
    }

   
}

