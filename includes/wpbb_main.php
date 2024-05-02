<?php

if (!defined('WPINC')) {
    exit;
}

if (!defined('ABSPATH')) {
    exit;
}

class WPBB_Main
{
    // This class creates a Block Binding plugin
    public function __construct()
    {
        add_action( 'admin_init', array( $this, 'projectslug_register_meta' ) );
    }

    function projectslug_register_meta() {
        register_meta( 'post', 'projectslug_meta_key', array(
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
        ) );
    }   
  
        
   
}

