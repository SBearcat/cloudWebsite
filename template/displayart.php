<?php
    include("connection.php");
    $query = "SELECT namefile FROM filestorage";
    $result = mysqli_query($con, $query);

    if($result === false) {
        die("Query failed: " . mysqli_error($con));
    }

    $num_rows = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Collection</title>
    <link href="../static/css/collection.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Shared Art</h1>

    <div class="gallery">
        <?php
            if ($num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    echo '<img src="' . $row['namefile'] . '" alt="Image" />';
                }
            } else {
                echo "No images found.";
            }
        ?>
    </div>

</body>
</html>
