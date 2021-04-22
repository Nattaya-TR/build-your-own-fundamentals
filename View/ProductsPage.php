<?php
declare(strict_types=1);
include_once "include/header.php";
?>
<section>
<h2>Products</h2>
    <div class="container">
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">Products</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product->getId() ?> </td>
                <td><?php echo $product->getName() ?> </td>
                <td><?php echo $product->getPrice() ?> </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</section>

<?php require 'include/footer.php'; ?>
