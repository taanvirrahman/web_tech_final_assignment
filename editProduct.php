<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $product = mysqli_fetch_assoc($result);
}

if (isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $bprice = $_POST['buying_price'];
    $sprice = $_POST['selling_price'];

    if (isset($_POST['display'])) {
        $display = "Yes";
    } else {
        $display = "No";
    }

    $update_sql = "UPDATE products SET name='$name', buying_price='$bprice', selling_price='$sprice', display='$display' WHERE id='$id'";

    if (mysqli_query($con, $update_sql)) {
        header("Location: displayProducts.php");
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <form method="post" action="editProduct.php">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <fieldset style="width: 300px;">
            <legend>EDIT PRODUCT</legend>
            Name<br>
            <input type="text" name="name" value="<?php echo $product['name']; ?>"><br>
            Buying Price<br>
            <input type="number" step="0.01" name="buying_price" value="<?php echo $product['buying_price']; ?>"><br>
            Selling Price<br>
            <input type="number" step="0.01" name="selling_price" value="<?php echo $product['selling_price']; ?>"><br>
            <hr>
            <input type="checkbox" name="display" value="Yes" <?php echo ($product['display'] == 'Yes') ? 'checked' : ''; ?>> Display<br>
            <hr>
            <input type="submit" name="update_product" value="SAVE">
        </fieldset>
    </form>
</body>

</html>
