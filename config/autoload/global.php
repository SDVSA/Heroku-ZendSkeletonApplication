<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
return array(
    'db' => array(
        'dsn' => getenv("DATABASE_TYPE") . ':dbname=' . getenv("DATABASE_NAME") . ';host=' . getenv("DATABASE_HOST") . ';port=' . getenv("DATABASE_PORT"),
        'username' => getenv("DATABASE_USER"),
        'password' => getenv("DATABASE_PASS"),
    ),
    'facebook_sdk' => array(
        array(
            'app_id' => getenv('FACEBOOK_APP_ID'),
            'app_secret' => getenv('FACEBOOK_APP_SECRET'),
            'default_graph_version' => getenv('FACEBOOK_VERSION'),
        )
    ),
);
