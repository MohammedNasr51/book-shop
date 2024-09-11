<?php
include_once 'includes/header.php';
$books = include 'data/books.php';
?>
<div class="container row m-auto ">
    <?php
    foreach ($books as $book):
        ?>
        <div class="col-12 col-lg-4 col-md-4 col-xlg-4 my-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title"><?= $book['title'] ?></h5>

                </div>
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item bg-light">For: <?= $book['author'] ?></li>
                    <li class="list-group-item bg-light">Price: <?= $book['price'] .' '.$_COOKIE['currency']?></li>
                </ul>
                <form action="cart.php" class="card-body" method="post">
                    <input type="hidden" name="title" value="<?= $book['title'] ?>">
                    <input type="hidden" name="price" value="<?= $book['price'] ?>">
                    <button type="submit" class="card-link btn btn-outline-primary">Add to Cart <i
                            class="fa-solid fa-cart-plus"></i></button>
                </form>
            </div>
        </div>
        <?php
    endforeach;
    ?>
</div>
<?php
include_once 'includes/footer.php';
// echo '<pre>';
// print_r($books);
// echo '</pre>';