<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if (isset($_POST['title']) && isset($_POST['price'])) {
    $_SESSION['cart'][] = [
        'title' => $_POST['title'],
        'price' => $_POST['price']
    ];
}
$totalPrice = 0;
include_once 'includes/header.php';
?>
<table class="table table-hover">
    <thead class="text-center">
        <tr>
            <th colspan="4" class="display-4 text-primary">Your Cart</th>
        </tr>
    </thead>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Book Title</th>
            <th scope="col">price</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION['cart'] as $key => $book): ?>
            <tr>
                <th scope="row"><?= $key + 1 ?></th>
                <td><?= $book['title'] ?></td>
                <td><?= $book['price'] . ' ' . $_COOKIE['currency'] ?></td>
                <td><a href="bookDetails.php?id=<?= $key ?>" class="btn btn-outline-success">Details</a><a
                        href="delete.php?id=<?= $key ?>" class="btn btn-outline-danger mx-2">Delete</a></td>
            </tr>
            <?php
            $totalPrice += $book['price'];
        endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2">Total Price</td>
            <td colspan="2"><?= $totalPrice . ' ' . $_COOKIE['currency'] ?></td>
        </tr>
    </tfoot>
</table>