<!--Trang giao diện cơ bản -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="./mvc/views/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<section>
    <?php
    // đường link đến các trang khác
    require_once "./mvc/views/link/".$data["Link"].".php";
    ?>
</section>
<body>
    <div class="main">
    <?php
    // để dữ liệu vào đây
    require_once "./mvc/views/pages/".$data["Page"].".php";
    ?>
    </div>
</body>
</html>