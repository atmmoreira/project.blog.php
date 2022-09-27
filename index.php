<?php include_once('./templates/header.php'); ?>

<main class="my-5">
  <div class="container">
    <div class="row m-auto">

      <?php foreach ($posts as $post) : ?>
        <div class="col-md-3 mb-3">
          <div class="card" style="width: 18rem;">
            <img src="<?= $post['image']; ?>" class="card-img-top" alt="<?= $post['title']; ?>">
            <div class="card-body">
              <h5 class="card-title"><a href="<?= $BASE_URL ?>post.php?id=<?= $post['id']; ?>"><?= $post['title']; ?></a></h5>
              <p class="card-text"><?= $post['description']; ?></p>
              <small>
                <?php foreach ($post['tags'] as $tag) : ?>
                  <span class="badge text-bg-dark"><?= $tag; ?></span>
                <?php endforeach; ?>
              </small>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</main>

<?php include_once('./templates/footer.php'); ?>