<?php
require_once("entities/product.class.php");

if (isset($_POST["btnsubmit"])) {
    $productName = $_POST["txtName"];
    $cateID = $_POST["txtcateID"];
    $price = $_POST["txtprice"];
    $quantity = $_POST["txtquantity"];
    $description = $_POST["txtdesc"];
    $picture = $_POST["txtpicture"];

    $newProduct = new Product($productName, $cateID, $price, $quantity, $description, $picture);

    $result = $newProduct->save();
    if (!$result) {
        header("Location: add_product.php?failure");
        exit; // Thêm lệnh exit để ngăn chương trình tiếp tục chạy sau khi chuyển hướng
    } else {
        header("Location: list_product.php");
        exit; // Thêm lệnh exit để ngăn chương trình tiếp tục chạy sau khi chuyển hướng
    }
}
?>
<?php include_once("header.php") ?>

<?php
if (isset($_GET["inserted"])) {
    echo "<h2>Thêm sản phẩm thành công</h2>";
}
?>

<div class="container">
    <form method="post">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtName"
                    value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : ""; ?>" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Mô tả sản phẩm</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="txtdesc"
                    rows="5"><?php echo isset($_POST["txtdesc"]) ? $_POST["txtdesc"] : ""; ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Số lượng sản phẩm</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtquantity"
                    value="<?php echo isset($_POST["txtquantity"]) ? $_POST["txtquantity"] : ""; ?>" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Giá sản phẩm</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtprice"
                    value="<?php echo isset($_POST["txtprice"]) ? $_POST["txtprice"] : ""; ?>" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Loại sản phẩm</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtcateID"
                    value="<?php echo isset($_POST["txtcateID"]) ? $_POST["txtcateID"] : ""; ?>" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hình ảnh</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="txtpicture"
                    value="<?php echo isset($_POST["txtpicture"]) ? $_POST["txtpicture"] : ""; ?>" />
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <input type="submit" class="btn btn-primary" name="btnsubmit" value="Thêm sản phẩm" />
            </div>
        </div>
    </form>
</div>