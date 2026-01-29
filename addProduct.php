<?php
include('db.php');

if (isset($_POST['save_product'])) {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];

    if (isset($_POST['display'])) {
        $display = "Yes";
    } else {
        $display = "No";
    }

    $sql = "INSERT INTO products (name, buying_price, selling_price, display) VALUES ('$name', '$buying_price', '$selling_price', '$display')";

    if (mysqli_query($con, $sql)) {
        echo "Successfully Saved";
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <form method="post">
        <fieldset style="width: 250px;">
            <legend>ADD PRODUCT</legend>
            Name <br>
            <input type="text" name="name"> <br>
            Buying Price <br>
            <input type="text" name="buying_price"> <br>
            Selling Price <br>
            <input type="text" name="selling_price"> <br>
            <hr>
            <input type="checkbox" name="display"> Display <br>
            <hr>
            <input type="submit" name="save_product" value="SAVE">
        </fieldset>
    </form>
</body>

</html>
