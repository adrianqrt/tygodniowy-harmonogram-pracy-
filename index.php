<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = ("SELECT * FROM `harmonogram` WHERE CONCAT(`imie`, `nazwisko`, `godzina`, `godzina_`, `data`, `dzien_tygodnia`) LIKE '%".$valueToSearch."%'  order by harmonogram.data asc");
    
}
 else {
    $query = "SELECT * FROM `harmonogram`";
   
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "harmonogram");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>imie</th>
                    <th>nazwisko</th>
                    <th>godzina rozpoczecia</th>
                    <th>godzina zakonczenia</th>
                    <th>data</th>
                    <th>dzien tygodnia</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row =mysql_fetch($query)):?>
                <tr>
                    <td><?php echo $row['imie'];?></td>
                    <td><?php echo $row['nazwisko'];?></td>
                    <td><?php echo $row['godzina'];?></td>
                    <td><?php echo $row['godzina_'];?></td>
                    <td><?php echo $row['data'];?></td>
                    <td><?php echo $row['dzien_tygodnia'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>