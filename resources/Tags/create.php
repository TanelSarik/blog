<?php
require '../db.php';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);

    if ($name === '') {
        $errors[] = "Nimi on nõutud.";
    }

    if (!$errors) {
        $stmt = $pdo->prepare("INSERT INTO tags (name) VALUES (?)");
        $stmt->execute([$name]);
        header("Location: index.php");
        exit;
    }
}
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lisa tag</title>
  <link rel="stylesheet" href="../styles.css">
</head>
<body>
<div class="container">
  <h1>Lisa uus Tag</h1>

  <?php foreach ($errors as $err): ?>
    <div style="color:red"><?= htmlspecialchars($err) ?></div>
  <?php endforeach; ?>

  <form method="post">
    <div class="form-row"><label>Nimi</label>
      <input type="text" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
    </div>
    <button class="button">Salvesta</button>
    <a class="button" href="index.php">Tagasi</a>
  </form>
</div>
</body>
</html>
