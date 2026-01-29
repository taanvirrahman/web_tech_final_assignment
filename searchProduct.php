<!DOCTYPE html>
<html>

<head>
    <title>Search Product</title>
    <script>
        function searchProducts() {
            var str = document.getElementById("search_input").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("product_table_body").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "search_handler.php?q=" + str, true);
            xhttp.send();
        }
    </script>
</head>

<body>
    <?php include 'nav.php'; ?>
    <fieldset style="width: 400px;">
        <legend>SEARCH</legend>
        <input type="text" id="search_input">
        <input type="button" value="Search By Name" onclick="searchProducts()">
        <hr>
        <table border="1" id="product_table">
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
                <th></th>
                <th></th>
            </tr>
            <tbody id="product_table_body">
                <?php include 'search_handler.php'; ?>
            </tbody>
        </table>
    </fieldset>
    <script>
        function searchProducts() {
            var str = document.getElementById("search_input").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("product_table_body").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "search_handler.php?q=" + str, true);
            xhttp.send();
        }
    </script>
</body>

</html>
