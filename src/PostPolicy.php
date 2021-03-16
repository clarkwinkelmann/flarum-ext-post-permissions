<?php

namespace ClarkWinkelmann\PostPermissions;

use Flarum\Post\Post;
use Flarum\User\Access\AbstractPolicy;
use Flarum\User\User;

class PostPolicy extends AbstractPolicy
{
    public function edit(User $actor, Post $post)
    {
        // Same logic that wraps the original PostPolicy::edit
        if ($post->user_id == $actor->id && (!$post->hidden_at || $post->hidden_user_id == $actor->id) && $actor->can('reply', $post->discussion)) {
            if ((int)$post->number === 1 && $actor->can('editOwnFirstPostForever', $post->discussion)) {
                return $this->allow();
            }

            if ($actor->can('editOwnPostForever', $post->discussion)) {
                return $this->allow();
            }
        }
    }
}
