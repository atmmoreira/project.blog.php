<?php include_once('./templates/header.php');

if (isset($_GET['id'])) {
  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}

?>

<main class="my-5">
  <div class="container">
    <div class="row">

      <div class="row">
        <div class="col-md-5">
          <img src="<?= $currentPost['image'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <div class="col-md-7 d-flex justify-content-between flex-column">
          <h1><?= $currentPost['title'] ?></h1>
          <p><?= $currentPost['description'] ?></p>
          <small>
            <?php foreach ($currentPost['tags'] as $tag) : ?>
              <span class="badge text-bg-dark"><?= $tag; ?></span>
            <?php endforeach; ?>
          </small>
          <button type="button" class="btn btn-dark w-25">Voltar</button>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include_once('./templates/footer.php'); ?>