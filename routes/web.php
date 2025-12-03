<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));
Route::get('feed', function () {
    $feedItems = [
        [
            'profile'      => [
                'avatar'      => '/images/michael.png',
                'displayName' => 'Michael',
                'handle'      => '@mmich_jj'
            ],
            'postedDateTime'   => '3h',
            'content' => <<<str
                <p>
                    I made this!
                    <a href="#">#myartwork</a>
                    <a href="#">#pixl</a>
                </p>

                <img src="/images/simon-chilling.png" alt="Simon" />
            str,
            'likeCount'   => 23,
            'replyCount'  => 45,
            'repostCount' => 151,
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
    $feedItems = [
        [
            'profile'      => [
                'avatar'      => '/images/michael.png',
                'displayName' => 'Michael',
                'handle'      => '@mmich_jj'
            ],
            'postedDateTime'   => '3h',
            'content' => <<<str
                <p>
                    I made this!
                    <a href="#">#myartwork</a>
                    <a href="#">#pixl</a>
                </p>

                <img src="/images/simon-chilling.png" alt="Simon" />
            str,
            'likeCount'   => 23,
            'replyCount'  => 45,
            'repostCount' => 151,
        ],
        // add more items...
    ];

    // Convert to objects so we can use $item->profile->avatar in views
    $feedItems = json_decode(json_encode($feedItems));

    return view('profile', [
        'feedItems' => $feedItems
    ]);
});
