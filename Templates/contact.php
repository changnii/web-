<!DOCTYPE html>
<html lang="en">
<?php include_once __DIR__ . "/../Templates/link.php";?>
<head>
    <?php include_once __DIR__ . "/../Templates/Partials/Head.php";?>
    <?php include_once __DIR__ . "/../Templates/Partials/Header.php";?>
</head>
<body>
<div class="bg-light mb-5">
    <div class="container" style="height: 100%; min-height: 400px;">
        <h3 class="rounded" style="border-bottom: solid 3px #F18620; color: #E8E8E8;"><div class="mt-2 p-1 bg-main rounded" style="width: 120px;">LIÊN HỆ</div></h3>
        <center><label for="">Chất lượng - Dịch vụ luôn được MoonShoes đặt lên hàng đầu</label></center>
        <p>Thông tin liên hệ</p>
        <label>Cửa hàng giày thể thao MoonShoes</label><br><br>
        <label for="">Địa chỉ: </label>Số 34 Việt Bắc, Đồng Quang, Thành phố Thái Nguyên, Thái Nguyên <br>
        <label for="">Thời gian phục vụ: </label>Từ 8h-22h(Cả tuần) <br>
        <label for="">Hotline: </label>0962296199 <br>
        <label for="">Email: </label>moonshoes@gmail.com <br>
        <p>
            - Giao hàng toàn quốc - Thu tiền tại nhà(COD) <br>
            - Đổi trả trong vòng 7 ngày
        </p>

    </div>
</div>
<?php include_once "Templates/link.php";?>
<footer>
    <?php include_once "Templates/Partials/Footer.php";?>
</footer>
<script>
    $("input[name='quantity']").TouchSpin({
        initval: 1,
        min: 1,
        max: 20
    });
</script>
</body>

</html>