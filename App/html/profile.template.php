<?php require 'partials/header.php';?>

    <div class="container">
        <a href="/new/image" class="btn btn-primary">Add Image</a> <br>
        <?php if(isset($_SESSION['msg'])): ?>
            <br/>
            <div class="alert alert-warning" role="alert">
                <?= $_SESSION['msg']; ?>
            </div>
        <?php  unset($_SESSION['msg']); endif ?>
        <hr>
        <div class="row hidden-md-up">
            <?php foreach($images as $img): ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $img['img'] ?>" alt="<?= $img['title'] ?>">
                    <div class="card-body">
                        <h4>
                            <?= $img['title'] ?>
                        </h4>
                        <p class="card-text">
                            published:
                            <?= $img['created_at']?>
                                <br>
                                <?= $img['likes_count'] ?> people liked this
                        </p>
                        <a href="/delete/image?id=<?= $img['id'] ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
            <?php endforeach;  ?>
        </div>
    </div>

<?php require 'partials/footer.php'; ?>