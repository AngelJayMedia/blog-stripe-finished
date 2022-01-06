<?php

return [
    'twitter' => [
        'handle' => env('TWITTER_HANDLE'),
    ],
    'comments' => [
        'max'   => env('MAX_LEVEL_COMMENTS'),
    ],
    'replies' => [
        'max'   => env('MAX_REPLIES_TO_COMMENT'),
    ],
];
