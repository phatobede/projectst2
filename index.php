<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 60px;
        /* Fix cố định navbar trên cùng */
    }
    </style>
</head>

<body>
    <?php include_once("header.php"); ?>
    <div class="container">
        <h1 class="my-4">Quản lý sản phẩm</h1>
        <ul class="nav nav-pills mb-4">
            <li class="nav-item">
                <a class="nav-link" href="list_product.php">Danh sách sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_products.php">Thêm sản phẩm</a>
            </li>
        </ul>
    </div>

    <!-- Bootstrap JS and jQuery (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>