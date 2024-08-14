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
        <div class="row">
            <!--<div class="col-lg-3">
                <div class="list-group">
                    <div class="list-group-item"><label for="">Thương Hiệu</label></div>
                    <div class="list-group-item">
                        <div><input name="converse" type="checkbox"> Converse</div>
                        <div><input name="adidas" type="checkbox"> Adidas</div>
                        <div><input name="puma" type="checkbox"> Puma</div>
                        <div><input name="balanciaga" type="checkbox"> Balanciaga</div>
                        <div><input name="vans" type="checkbox"> Vans</div>
                        <div><input name="blance" type="checkbox"> Blance</div>
                        <br>
                        <div><input class="btn btn-warning" type="submit" name="tim" value="Tìm kiếm"></div>
                    </div>
                </div>
            </div>-->
            <div>
                <h4 class="rounded mt-2" style="border-bottom: solid 3px #F18620; color: #E8E8E8;">
                    <div class="bg-main rounded" style="width: 240px;">GIÀY THỂ THAO NỮ</div>
                </h4>
                <div class="row mx-auto">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)){ ?>
                        <div class="product mr-2">
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
    </div>
</div>
<footer>
    <?php include_once "Templates/Partials/Footer.php";?>
</footer>
</body>

</html>