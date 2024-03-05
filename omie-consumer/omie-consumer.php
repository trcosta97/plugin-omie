<?php

/*
Plugin Name: Omie Consumer
Plugin URI: 
Description: Omie API consumer
Author: Thiago Ribeiro
Version: 1.0
Author URI: github.com/trcosta97
*/

$url_endpoint = 'https://app.omie.com.br/api/v1/crm/contas/';

if (!defined("ABSPATH")) {
    exit;
};

if (!class_exists("Omie_Consumer")) {
    class Omie_Consumer{

        private $omie_app_key;
        private $omie_app_secret;
        private $omie_call;

        function __construct($omie_app_key, $omie_app_secret, $omie_call){
            $this->omie_app_key = $omie_app_key;
            $this->omie_app_secret = $omie_app_secret;
            $this->omie_call = $omie_call;
            $this->define_constants();

            require_once(OMIE_CONSUMER_PATH . 'post-types/class.omie-consumer-cpt.php');
            $Omie_Consumer_Post_Type = new Omie_Consumer_Post_Type();
        }

        function define_constants(){
            define( 'OMIE_CONSUMER_PATH',plugin_dir_path(__FILE__));
            define( 'OMIE_CONSUMER_URL',plugin_dir_url(__FILE__));
            define( 'OMIE_CONSUMER_VERSION','1.0.0');
        }

        public static function activate(){
            update_option('rewrite_rules', '');
        }

        public static function deactivate(){
            flush_rewrite_rules();
        }

        public static function uninstall(){
            
        }
    }   
}

if (class_exists("Omie_Consumer")) {
    register_activation_hook(__FILE__, array('Omie_Consumer', 'activate'));
    register_deactivation_hook(__FILE__, array('Omie_Consumer', 'deactivate'));
    register_uninstall_hook(__FILE__, array('Omie_Consumer', 'uninstall'));
    $omieConsumer = new Omie_Consumer("38333295000", "fed2163e2e8dccb53ff914ce9e2f1258", "IncluirConta");
}


