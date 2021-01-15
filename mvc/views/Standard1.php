
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="./mvc/views/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<section>
  <nav>
    <ul>
      <li><a href="./Home">Home</a></li>
      <li><a href="./Login">Login</a></li>
      <li><a href="./Register">Register</a></li>
    </ul>
  </nav>
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