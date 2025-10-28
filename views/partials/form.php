<?php
// partials/users/form.php
require_once __DIR__ . '/../../src/User.php';
$userModel = new User();

$action = $_GET['action'] ?? 'create';
$id = $_GET['id'] ?? null;
$user = ['name'=>'','email'=>'','role'=>'user'];

if ($action === 'edit' && $id) {
    $found = $userModel->find($id);
    if ($found) $user = $found;
}
?>
<div class="content">
    <h1><?= $action === 'edit' ? 'Muuda kasutajat' : 'Loo kasutaja' ?></h1>

    <form method="post" action="?page=users&action=<?= $action === 'edit' ? 'update' : 'store' ?>">
        <?php if ($action === 'edit'): ?>
            <input type="hidden" name="id" value="<?=htmlspecialchars($user['id'])?>">
        <?php endif; ?>

        <label>Nimi<br>
            <input type="text" name="name" required value="<?=htmlspecialchars($user['name'])?>">
        </label><br>

        <label>Email<br>
            <input type="email" name="email" required value="<?=htmlspecialchars($user['email'])?>">
        </label><br>

        <label>Parool <?= $action==='edit' ? '(jäta tühi, kui ei muuda)' : '' ?><br>
            <input type="password" name="password" <?= $action==='create' ? 'required' : '' ?>>
        </label><br>

        <label>Roll<br>
            <select name="role">
                <option value="user" <?= $user['role']==='user' ? 'selected' : '' ?>>user</option>
                <option value="admin" <?= $user['role']==='admin' ? 'selected' : '' ?>>admin</option>
            </select>
        </label><br><br>

        <button type="submit"><?= $action === 'edit' ? 'Uuenda' : 'Loo' ?></button>
        <a href="?page=users">Tagasi</a>
    </form>
</div>
