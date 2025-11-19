<?php
require '../db.php';

$stmt = $pdo->query("SELECT * FROM tags ORDER BY id DESC");
$tags = $stmt->fetchAll();
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tags</title>
  <link rel="stylesheet" href="../styles.css">
</head>
<body>
<div class="container">
  <div class="header">
    <h1>Tags</h1>
    <a class="button" href="create.php">add a new tag</a>
  </div>

  <table>
    <thead><tr><th>ID</th><th>name</th><th>creaetd</th><th>doings</th></tr></thead>
    <tbody>
      <?php foreach ($tags as $t): ?>
      <tr>
        <td><?= $t['id'] ?></td>
        <td><?= htmlspecialchars($t['name']) ?></td>
        <td><?= $t['created_at'] ?></td>
        <td>
          <a class="button" href="view.php?id=<?= $t['id'] ?>">view</a>
          <a class="button" href="edit.php?id=<?= $t['id'] ?>">edit</a>
          <a class="button" onclick="return confirm('Oled kindel?')" href="delete.php?id=<?= $t['id'] ?>">delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>
</html>
