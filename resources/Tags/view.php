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
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>look at tag</title>
  <link rel="stylesheet" href="../styles.css">
</head>
<body>
<div class="container">
  <h1>Tag: <?= htmlspecialchars($tag['name']) ?></h1>

  <p><strong>done:</strong> <?= $tag['created_at'] ?></p>

  <a class="button" href="edit.php?id=<?= $tag['id'] ?>">edit</a>
  <a class="button" href="index.php">back</a>
</div>
</body>
</html>
