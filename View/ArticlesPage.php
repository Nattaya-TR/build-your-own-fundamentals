<?php
declare(strict_types=1);
include_once "include/header.php";
?>
<section>
<h3>Products</h3>
    <div class="container">
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">Products</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            <?php //foreach ($data as i = product) : ?>
            <tr>
                <td><?php //echo $Product['name']; ?> </td>
                <td><?php //echo $Product['price']; ?> </td>
            </tr>
            <?php //endforeach; ?>
            </tbody>
        </table>
</section>

<?php require 'include/footer.php'; ?>
