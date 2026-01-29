<?php
include('db.php');

$query = "SELECT id, name, (selling_price - buying_price) as profit FROM products WHERE display = 'Yes'";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Display</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <fieldset style="width: 350px;">
        <legend>DISPLAY</legend>
        <table border="1">
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['profit']; ?></td>
                    <td><a href="editProduct.php?id=<?php echo $row['id']; ?>">edit</a></td>
                    <td><a href="deleteProduct.php?id=<?php echo $row['id']; ?>">delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </fieldset>
</body>

</html>
