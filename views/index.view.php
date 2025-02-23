<?php require base_path("views/partials/top.php") ?>

<main>
  <ul>
    <?php foreach ($notes as $note) : ?>
      <li>
        <a href="/note?id=<?= $note["id"] ?>">
          <?= htmlspecialchars($note["body"]) ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</main>

<?php require base_path("views/partials/bottom.php") ?>