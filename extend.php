<?php

namespace ClarkWinkelmann\PostPermissions;

use Flarum\Extend;
use Flarum\Post\Post;

return [
    (new Extend\Frontend('admin'))
        ->js(__DIR__ . '/js/dist/admin.js'),

    new Extend\Locales(__DIR__ . '/resources/locale'),

    (new Extend\Policy())
        ->modelPolicy(Post::class, PostPolicy::class),
];
