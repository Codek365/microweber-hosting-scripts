#!/usr/bin/php
<?php


$config = $_SERVER;

if (isset($config["VIRTUALSERVER_ACTION"])) {
    if (($config["VIRTUALSERVER_ACTION"]) == 'CREATE_DOMAIN') {

        $opts = array();
        // folder for the microweber source
        // $opts['source_folder'] = '/usr/share/microweber/';

        // debug email
        // $opts['debug_email'] = 'boksiora@gmail.com';
        // $opts['debug_email_subject'] = 'New site';


        $opts['user'] = $config["VIRTUALSERVER_USER"];
        $opts['pass'] = $config["VIRTUALSERVER_PASS"];
        $opts['email'] = $config["VIRTUALSERVER_EMAILTO"];
        $opts['default_template'] = 'liteness';
        $opts['database_name'] = $config["VIRTUALSERVER_DB_MYSQL"];
        $opts['database_user'] = $config["VIRTUALSERVER_MYSQL_USER"];
        $opts['database_password'] = $config["VIRTUALSERVER_PASS"];
        require __DIR__ . "/run.php";
    }
}
