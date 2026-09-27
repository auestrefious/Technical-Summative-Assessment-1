<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <title>All Tasks</title>
</head>
<body>
    <nav>
        <a href="<?= site_url() ?>">Welcome</a> |
        <a href="<?= site_url('tasks') ?>">All Tasks</a> |
        <a href="<?= site_url('profile') ?>">Profile</a> |
        <a href="<?= site_url('about') ?>">About</a>
    </nav>

    <h1>All Tasks</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Date</th>
            <th>Task</th>
            <th>Status</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['task_date']) ?></td>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc($task['status']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>