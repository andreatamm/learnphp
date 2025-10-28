<?php
require_once __DIR__ . '/../../src/User.php';
$userModel = new User();
$users = $userModel->all();
?>
<div class="content">
    <h1>Kasutajad</h1>
    <p><a href="?page=users&action=create" class="btn">Loo uus kasutaja</a></p>

    <table class="users-table" border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th><th>Nimi</th><th>Email</th><th>Role</th><th>Created</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $u): ?>
            <tr>
                <td><?=htmlspecialchars($u['id'])?></td>
                <td><?=htmlspecialchars($u['name'])?></td>
                <td><?=htmlspecialchars($u['email'])?></td>
                <td><?=htmlspecialchars($u['role'])?></td>
                <td><?=htmlspecialchars($u['created_at'])?></td>
                <td>
                    <a href="?page=users&action=edit&id=<?=urlencode($u['id'])?>">Edit</a> |
                    <a href="?page=users&action=delete&id=<?=urlencode($u['id'])?>" onclick="return confirm('Kustutan kasutaja #<?=htmlspecialchars($u['id'])?>?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
