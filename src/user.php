<?php
require_once __DIR__ . '/../config/db.php';

class User {
    private $pdo;

    public function __construct() {
        $this->pdo = DB::connection();
    }

    public function all() {
        $stmt = $this->pdo->query("SELECT id, name, email, role, created_at, updated_at FROM users ORDER BY id DESC");
        return $stmt->fetchAll();
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT id, name, email, role, created_at, updated_at FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($data) {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
        $hash = password_hash($data['password'], PASSWORD_DEFAULT);
        return $stmt->execute([$data['name'], $data['email'], $hash, $data['role'] ?? 'user']);
    }

    public function update($id, $data) {
        if (!empty($data['password'])) {
            $hash = password_hash($data['password'], PASSWORD_DEFAULT);
            $stmt = $this->pdo->prepare("UPDATE users SET name = ?, email = ?, password = ?, role = ? WHERE id = ?");
            return $stmt->execute([$data['name'], $data['email'], $hash, $data['role'] ?? 'user', $id]);
        } else {
            $stmt = $this->pdo->prepare("UPDATE users SET name = ?, email = ?, role = ? WHERE id = ?");
            return $stmt->execute([$data['name'], $data['email'], $data['role'] ?? 'user', $id]);
        }
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
