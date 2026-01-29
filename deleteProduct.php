<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $product = mysqli_fetch_assoc($result);
}

if (isset($_POST['confirm_delete'])) {
    $id = $_POST['id'];
    $delete_sql = "DELETE FROM products WHERE id = '$id'";
    if (mysqli_query($con, $delete_sql)) {
        header("Location: displayProducts.php");
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Delete Product</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <form method="post" action="deleteProduct.php">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <fieldset style="width: 300px;">
            <legend>DELETE PRODUCT</legend>
            <p>Name: <?php echo $product['name']; ?></p>
            <p>Buying Price: <?php echo $product['buying_price']; ?></p>
            <p>Selling Price: <?php echo $product['selling_price']; ?></p>
            <p>Displayable: <?php echo $product['display']; ?></p>
            <hr>
            <input type="submit" name="confirm_delete" value="Delete">
        </fieldset>
    </form>
</body>

</html>
