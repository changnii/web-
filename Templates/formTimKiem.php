<!DOCTYPE html>
<html lang="en">
    <?php include_once __DIR__ . "/../Templates/link.php";?>
<head>
    <?php include_once __DIR__ . "/../Templates/Partials/Head.php";?>
    <?php include_once __DIR__ . "/../Templates/Partials/Header.php";?>
</head>
<body>
<div class="bg-light">
    <div class="container">
        <div style="border-bottom: 2px solid black;" class="mb-4">
            <p class="t-tittle">KẾT QUẢ TÌM KIẾM</p>
        </div>
        <div class="row mx-auto">
            <?php
            if (pg_fetch_assoc($result)>0){
            while ($row = pg_fetch_assoc($result)){ ?>
                <div class="product">
                    <div class="product-details">
                        <div class="image-shoe">
                            <div><img class="image" src="<?php echo $row['image'];?>" alt=""></div>
                            <div class="middle">
                                <a style="color: #E8E8E8;" class="text" href="index.php?task=detail&id=<?php echo $row['id_product']; ?>">Xem hàng</a>
                            </div>
                        </div>
                        <div class="info-shoe">
                            <p class="p-name-product"><?php echo $row['name_product']?></p>
                            <p class="p-price-product"><?php echo number_format($row['price'],0,'.','.')?> đồng</p>
                        </div>
                    </div>
                </div>
            <?php }}else{ ?>
                <p class="alert alert-danger text-center">Không tìm thấy kết quả nào !</p>
            <?php } ?>
        </div>
    </div>
</div>
<footer>
    <?php include_once __DIR__ . "/../Templates/Partials/Footer.php";?>
</footer>
</body>

</html>