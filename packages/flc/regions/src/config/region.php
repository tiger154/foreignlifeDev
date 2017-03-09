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
        'KR' => ['name' => 'South Korea', 'native' => '대한민국', 'sub_domain' => 'kr'],
        'GB' => ['name' => 'United Kingdom', 'native' => 'United Kingdom', 'sub_domain' => 'gb'],
        'IE' => ['name' => 'Ireland', 'native' => 'Ireland', 'sub_domain' => 'ie'],
        //'JP' => ['name' => 'Japan', 'native' => '日本', 'sub_domain' => 'jp'],
        //'CN' => ['name' => 'China', 'native' => '中国', 'sub_domain' => 'cn'],
        //'US' => ['name' => 'United States of America', 'native' => 'United States of America', 'sub_domain' => 'us'],
        //'CA' => ['name' => 'Canada', 'native' => 'Canada', 'sub_domain' => 'ca'],
        //'AU' => ['name' => 'Australia', 'native' => 'Australia', 'sub_domain' => 'au'],
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

    'realIP' => false

];