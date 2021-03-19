# Advanced Post Permissions

[![MIT license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/clarkwinkelmann/flarum-ext-post-permissions/blob/master/LICENSE.md) [![Latest Stable Version](https://img.shields.io/packagist/v/clarkwinkelmann/flarum-ext-post-permissions.svg)](https://packagist.org/packages/clarkwinkelmann/flarum-ext-post-permissions) [![Total Downloads](https://img.shields.io/packagist/dt/clarkwinkelmann/flarum-ext-post-permissions.svg)](https://packagist.org/packages/clarkwinkelmann/flarum-ext-post-permissions) [![Donate](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://www.paypal.me/clarkwinkelmann)

This extension adds 2 new permissions to the admin panel:

- Edit own discussion first post forever
- Edit any own post forever

The two permissions can be tag-scoped.
The permissions are separate from "Allow post editing" and are not effected by its value.

Like the original post edit permission, the permissions are still limited by the ability to reply and the post not being deleted.
So it's not possible to edit posts in a discussion where you can no longer reply (for example, locked) or if the post was hidden by a moderator.

## Installation

    composer require clarkwinkelmann/flarum-ext-post-permissions

## Support

This extension is under **minimal maintenance**.

It was developed for a client and released as open-source for the benefit of the community.
I might publish simple bugfixes or compatibility updates for free.

You can [contact me](https://clarkwinkelmann.com/flarum) to sponsor additional features or updates.

Support is offered on a "best effort" basis through the Flarum community thread.

**Sponsors**: [FibraClick](https://forum.fibra.click/)

## Links

- [GitHub](https://github.com/clarkwinkelmann/flarum-ext-post-permissions)
- [Packagist](https://packagist.org/packages/clarkwinkelmann/flarum-ext-post-permissions)
