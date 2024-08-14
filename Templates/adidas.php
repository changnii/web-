<!DOCTYPE html>
<html lang="en">

<?php include_once __DIR__ . "/../Templates/link.php";?>
<head>
    <?php include_once __DIR__ . "/../Templates/Partials/Head.php";?>
    <?php include_once __DIR__ . "/../Templates/Partials/Header.php";?>
</head>
<body>
<body>
<div class="bg-light">
    <div class="container">
        <h4 class="rounded" style="border-bottom: solid 3px #F18620; color: #E8E8E8;">
            <div class="mt-2 p-1 bg-main rounded" style="width: 160px;">GIÀY ADIDAS</div>
        </h4>
        <div class="row mx-auto">
            <?php
            while ($row = pg_fetch_assoc($result)){ ?>
                <div class="product">
                    <div class="product-details">
                        <div class="image-shoe">
                            <img class="image" src="<?php echo $row['image'];?>" alt="">
                            <div class="middle">
                                <a style="color: #E8E8E8;" class="text" href="index.php?task=detail&id=<?php echo $row['id_product']; ?>">Xem hàng</a>
                            </div>
                        </div>
                        <div class="info-shoe">
                            <a class="p-name-product" href="index.php?task=detail&id=<?php echo $row['id_product']; ?>"><?php echo $row['name_product']?></a>
                            <p class="p-price-product"><?php echo number_format($row['price'],0,'.','.')?> đồng</p>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
</div>
<footer>
    <?php include_once "Templates/Partials/Footer.php";?>
</footer>
</body>

</html>