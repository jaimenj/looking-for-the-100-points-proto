<?php

defined('ABSPATH') or die();

class Lft100pAjaxController
{
    private static $instance;

    public static function get_instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        add_action('testing', [$this, 'testing']);
        add_action('no_priv_testing', [$this, 'testing']);
    }

    public function testing()
    {
        get_template_part('template-parts/testing');
        wp_die();
    }
}

// Launch once..
Lft100pAjaxController::get_instance();