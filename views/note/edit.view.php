<?php require base_path("views/partials/top.php") ?>

<main>
  <h1>Edit Note</h1>

  <form method="post" action="/note">
    <input type="hidden" value="PUT" name="_method" />
    <input type="hidden" value=<?= $_POST["id"] ?? $note["id"] ?> name="id" />

    <textarea id="body" name="body"><?= $_POST["body"] ?? $note["body"] ?></textarea>

    <?php if (isset($errors["body"])) : ?>
      <p><?= $errors["body"] ?></p>
    <?php endif; ?>

    <a href="/note?id=<?= $note["id"] ?>">Cancel</a>
    <button type="submit">Update</button>
  </form>
</main>

<?php require base_path("views/partials/bottom.php") ?>