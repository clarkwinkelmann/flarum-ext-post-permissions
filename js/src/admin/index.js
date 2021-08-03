import app from 'flarum/admin/app';

app.initializers.add('clarkwinkelmann-post-permissions', () => {
    app.extensionData
        .for('clarkwinkelmann-post-permissions')
        .registerPermission({
            icon: 'fas fa-pencil-alt',
            label: app.translator.trans('clarkwinkelmann-post-permissions.admin.permissions.edit-first-own-post-forever'),
            permission: 'discussion.editOwnFirstPostForever',
        }, 'reply')
        .registerPermission({
            icon: 'fas fa-pencil-alt',
            label: app.translator.trans('clarkwinkelmann-post-permissions.admin.permissions.edit-own-post-forever'),
            permission: 'discussion.editOwnPostForever',
        }, 'reply');
});
