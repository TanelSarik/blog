<?php
require '../db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM tags WHERE id = ?");
$stmt->execute([$id]);
$tag = $stmt->fetch();

if (!$tag) {
    echo "Tagi ei leitud.";
    exit;
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);

    if ($name === '') {
        $errors[] = "Nimi on nõutud.";
    }

    if (!$errors) {
        $stmt = $pdo->prepare("UPDATE tags SET name = ? WHERE id = ?");
        $stmt->execute([$name, $id]);
        header("Location: view.php?id=" . $id);
        exit;
    }
}
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>change tag</title>
  <link rel="stylesheet" href="../styles.css">
</head>
<body>
<div class="container">
  <h1>change tag</h1>

  <?php foreach ($errors as $err): ?>
    <div style="color:red"><?= htmlspecialchars($err) ?></div>
  <?php endforeach; ?>

  <form method="post">
    <div class="form-row"><label>name</label>
      <input type="text" name="name" value="<?= htmlspecialchars($_POST['name'] ?? $tag['name']) ?>">
    </div>
    <button class="button">Uuenda</button>
    <a class="button" href="index.php">back</a>
  </form>
</div>
</body>
</html>
