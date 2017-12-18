<?php
/**
 * Created by PhpStorm.
 * User: josuecamelo
 * Date: 18/12/17
 * Time: 11:50
 */
return [
    'model' => \App\Account::class,
    'field_name' => 'subdomain',
    'foreign_key' => 'account_id',
    'route_param' => 'account',
    'subdomains_except' => [
        'master'
    ]
];