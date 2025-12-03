<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;

Route::get('/', fn() => view('welcome'));
Route::get('feed', function () {
    $simonImage = Vite::asset('resources/images/simon-chilling.png');

    $feedItems = [
        [
            'profile'        => [
                'avatar'      => 'images/michael.png',
                'displayName' => 'Michael',
                'handle'      => '@mmich_jj'
            ],
            'postedDateTime' => '3h',
            'content'        => <<<str
                <p>
                    I made this!
                    <a href="#">#myartwork</a>
                    <a href="#">#pixl</a>
                </p>

                <img src="{$simonImage}" alt="Simon" />
            str,
            'likeCount'      => 23,
            'replyCount'     => 45,
            'repostCount'    => 151,
            'replies'        => [
                [
                    'profile'     => [
                        'avatar'      => 'images/simon-chilling.png',
                        'displayName' => 'Simon',
                        'handle'      => '@simonswiss'
                    ],
                    'content'     => '<p>Heh - this looks just like me!</p>',
                    'postedDateTime' => '1h',
                    'likeCount'   => 52,
                    'replyCount'  => 12,
                    'repostCount' => 200,
                ]
            ]
        ],
        // add more items...
    ];

    // Convert to objects so we can use $item->profile->avatar in views
    $feedItems = json_decode(json_encode($feedItems));

    return view('feed', [
        'feedItems' => $feedItems
    ]);
});
Route::get('profile', function () {
    $simonImage = Vite::asset('resources/images/simon-chilling.png');

    $feedItems = [
        [
            'profile'        => [
                'avatar'      => 'images/michael.png',
                'displayName' => 'Michael',
                'handle'      => '@mmich_jj'
            ],
            'postedDateTime' => '3h',
            'content'        => <<<str
                <p>
                    I made this!
                    <a href="#">#myartwork</a>
                    <a href="#">#pixl</a>
                </p>

                <img src="{$simonImage}" alt="Simon" />
            str,
            'likeCount'      => 23,
            'replyCount'     => 45,
            'repostCount'    => 151,
            'replies'        => [
                [
                    'profile'     => [
                        'avatar'      => 'images/simon-chilling.png',
                        'displayName' => 'Simon',
                        'handle'      => '@simonswiss'
                    ],
                    'content'     => '<p>Heh - this looks just like me!</p>',
                    'postedDateTime' => '1h',
                    'likeCount'   => 52,
                    'replyCount'  => 12,
                    'repostCount' => 200,
                ]
            ]
        ],
        // add more items...
    ];

    // Convert to objects so we can use $item->profile->avatar in views
    $feedItems = json_decode(json_encode($feedItems));

    return view('profile', [
        'feedItems' => $feedItems
    ]);
});
