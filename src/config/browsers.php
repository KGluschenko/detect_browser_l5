<?php
return array(

    'viewLocation' => 'errors.old_browser',

    'browsers' => array(
        'Chrome' => array(
            'allowed_version' => 46,
            'full_name'       => 'Google Chrome',
            'icon'            => '/packages/vis/detect_browser/img/google.png',
            'download_link'   => 'https://www.google.com/chrome/browser/desktop/',
        ),
        'Edge' => array(
            'allowed_version' => 14,
            'full_name'       => 'Microsoft Edge',
            'icon'            => '/packages/vis/detect_browser/img/ms_edge.png',
            'download_link'   => false,
        ),
        'Firefox' => array(
            'allowed_version' => 42,
            'full_name'       => 'Mozilla Firefox',
            'icon'            => '/packages/vis/detect_browser/img/mozila.png',
            'download_link'   => 'https://www.mozilla.org/en-US/firefox/new/',

        ),
        'IE' => array(
            'allowed_version' => 10,
            'full_name'       => 'Internet Explorer',
            'icon'            => '/packages/vis/detect_browser/img/ie.png',
            'download_link'   => false,
        ),
        'Opera' => array(
            'allowed_version' => 33,
            'full_name'       => 'Opera',
            'icon'            => '/packages/vis/detect_browser/img/opera.png',
            'download_link'   => 'http://www.opera.com/?utm_medium=roc&utm_source=burocratik&utm_campaign=outdatedbrowser',
        ),
        'Safari' => array(
            'allowed_version' => 5,
            'full_name'       => 'Safari',
            'icon'            => '/packages/vis/detect_browser/img/safari.png',
            'download_link'   => 'http://www.apple.com/macos/sierra/',
        ),
    ),
);