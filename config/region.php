<?php
return [
    /*
   |--------------------------------------------------------------------------
   | Application supported region
   |--------------------------------------------------------------------------
   |
   | All supported regions
   | If uncomment it's active supported region. for now we set two main country (kr,gb)
   |
   */
    'supportedRegions' => [
        'KR' => ['name' => 'South Korea', 'native' => '대한민국', 'sub_domain' => 'kr', 'key' => 'KR'],
        'GB' => ['name' => 'United Kingdom', 'native' => 'United Kingdom', 'sub_domain' => 'gb', 'key' => 'GB'],
        'IE' => ['name' => 'Ireland', 'native' => 'Ireland', 'sub_domain' => 'ie', 'key' => 'IE'],
        //'JP' => ['name' => 'Japan', 'native' => '日本', 'sub_domain' => 'jp', 'key' => 'JP'],
        //'CN' => ['name' => 'China', 'native' => '中国', 'sub_domain' => 'cn', 'key' => 'CN'],
        //'US' => ['name' => 'United States of America', 'native' => 'United States of America', 'sub_domain' => 'us', 'key' => 'US'],
        //'CA' => ['name' => 'Canada', 'native' => 'Canada', 'sub_domain' => 'ca', 'key' => 'CA'],
        //'AU' => ['name' => 'Australia', 'native' => 'Australia', 'sub_domain' => 'au', 'key' => 'AU'],
    ],
    /*
    |--------------------------------------------------------------------------
    | Application default region
    |--------------------------------------------------------------------------
    |
    | Default region. region can be also sub-domain name
    | If access to www | dev. region is empty. later it will be more likely about company
    */
    'region' => 'GB',

    /*
    |--------------------------------------------------------------------------
    | Application default region
    |--------------------------------------------------------------------------
    |
    | If it's true it check users real IP even thought it's internal IP
    |
    */
    'realIP' => false


];