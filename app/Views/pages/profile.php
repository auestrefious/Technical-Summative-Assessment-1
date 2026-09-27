<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <title>Profile</title>
</head>
<body>
    <nav>
        <a href="<?= site_url() ?>">Welcome</a> |
        <a href="<?= site_url('tasks') ?>">All Tasks</a> |
        <a href="<?= site_url('profile') ?>">Profile</a> |
        <a href="<?= site_url('about') ?>">About</a>
    </nav>

    <h1>User Profile</h1>

    <?php if ($user): ?>
        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
        <p><strong>Full name:</strong> <?= esc($user['full_name']) ?></p>
        <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
    <?php else: ?>
        <p>No user found.</p>
    <?php endif; ?>
</body>
</html>