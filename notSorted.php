<?php
// Ascending Order
if(isset($_POST['sort']))
{
    $asc_query = "SELECT * FROM Meshari";
    $result = executeQuery($asc_query);
}

// Descending Order
    
    // Default Order
 else {
        $default_query = "SELECT * FROM Meshari";
        $result = executeQuery($default_query);
}


function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "meshari66", "", "c9");
    $result = mysqli_query($connect, $query);
    return $result;
}

?>

<!DOCTYPE html>
<html>
    <head>
<link href="css.css" rel="stylesheet">
    </head>
    <body>
      
        <form action="Sorted.php" method="post">
          
            <input type="submit" name="sort" value="Sort by comments"><br><br>
          
            <table>
                <tr>
                    <th>Title</th>
                    <th>Url</th>
                    <th>Date</th>
                    <th>Comments</th>
                </tr>
                <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
      
    </body>
</html>