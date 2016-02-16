<?php
/**
 * 日志信息配置
 */
return array(

    /**
     * file 日志配置信息
     */
    'file' => array(

        'run_log' => array(

            'name' => 'run_log',
            'path' => APPPATH.'/logs',
            'path_format' => '',
        ),

        'error_log' => array(

            'name' => 'error_log',
            'path' => APPPATH.'/logs',
            'path_format' => ''
        ),
    ),

    /**
     * database 日志配置信息
     */
    'database' => array(

        'account_log' => array (

            'hostname'   => 'localhost',
            'database'   => 'account',
            'username'   => 'root',
            'password'   => '123456',
            'persistent' => FALSE,
            'charset'    => 'utf8',
            'table'      => 'account_log',
        ),

        'topic_log' => array (

            'hostname'   => 'localhost',
            'database'   => 'topic',
            'username'   => 'root',
            'password'   => '123456',
            'persistent' => FALSE,
            'charset'    => 'utf8',
            'table'      => 'topic_log',
        ),
    ),
);
