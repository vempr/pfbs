<?php require base_path("views/partials/top.php") ?>

<main>
  <h1>Create a new note!</h1>
  <form method="post">
    <div>
      <label for="body">Body</label>
      <textarea id="body" name="body"><?= $_POST["body"] ?? "" ?></textarea>
      <?php if (isset($errors["body"])) : ?>
        <p><?= $errors["body"] ?></p>
      <?php endif; ?>
    </div>
    <button type="submit">Create</button>
  </form>
</main>

<?php require base_path("views/partials/bottom.php") ?>