<?php require base_path("views/partials/top.php") ?>

<main>
  <h1>Id: <?= $note["id"] ?></h1>
  <p><?= htmlspecialchars($note["body"]) ?></p>
</main>

<?php require base_path("views/partials/bottom.php") ?>