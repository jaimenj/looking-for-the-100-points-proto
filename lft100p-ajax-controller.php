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
        add_action('wp_ajax_testing', [$this, 'testing']);
        add_action('wp_ajax_no_priv_testing', [$this, 'testing']);

        add_action('wp_ajax_testing_json', [$this, 'testing_json']);
        add_action('wp_ajax_no_priv_testing_json', [$this, 'testing_json']);
    }

    public function testing()
    {
        get_template_part('template-parts/testing');
        wp_die();
    }

    public function testing_json()
    {
        header('Content-type: application/json');
        echo json_encode([
            'error' => false,
            'message' => 'Ok',
            'data' => [],
        ]);
        wp_die();
    }
}

// Launch once..
Lft100pAjaxController::get_instance();
