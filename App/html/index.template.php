<?php require 'partials/header.php'; ?>

<div class="container">
    <?php if(isset($_SESSION['msg'])): ?>
        <br/>
        <div class="alert alert-warning" role="alert">
            <?= $_SESSION['msg']; ?>
        </div>
    <?php  unset($_SESSION['msg']); endif ?>
    
    <div class="row hidden-md-up">
        <?php foreach($images as $img): ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $img['img'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h4><?= $img['title'] ?></h4>
                        <p class="card-text">
                            published: <?= $img['created_at']?> <br>
                            <?= $img['likes_count'] ?> people liked this
                        </p>
                        <a href="like?id=<?=$img['id']?>" class="btn btn-primary">like</a>
                    </div>
                </div>
            </div>
    <?php endforeach;  ?>
    </div>
</div>

<?php   require 'partials/footer.php'; ?>
