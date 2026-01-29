<?php
include('db.php');

$search = "";
if (isset($_GET['q'])) {
    $search = $_GET['q'];
}

$sql = "SELECT id, name, (selling_price - buying_price) as profit FROM products WHERE display = 'Yes' AND name LIKE '%$search%'";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row['profit'] . "</td>
            <td><a href='editProduct.php?id=" . $row['id'] . "'>edit</a></td>
            <td><a href='deleteProduct.php?id=" . $row['id'] . "'>delete</a></td>
        </tr>";
}
?>

