<?php require base_path("views/partials/top.php") ?>

<main>
  <h1>Id: <?= $note["id"] ?></h1>
  <p><?= htmlspecialchars($note["body"]) ?></p>
  <form method="post">
    <input type="hidden" value="DELETE" name="_method" />
    <input type="hidden" value=<?= $note["id"] ?> name="id" />
    <button type="submit">Delete</button>
  </form>
</main>

<?php require base_path("views/partials/bottom.php") ?>