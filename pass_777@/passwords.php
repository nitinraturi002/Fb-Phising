<?php

require_once '../config.php';

$query="SELECT * FROM `table_name`";
$results=mysqli_query($con, $query);



?>
    <!DOCTYPE html>
    <html>

    <head>
        <style>
            body{
                width: 40%;
                margin: 0 auto;
            }
            table {
                width: 100%;
            }
            
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            
            th,
            td {
                padding: 5px;
                text-align: left;
            }
            
            table#t01 tr:nth-child(even) {
                background-color: #eee;
            }
            
            table#t01 tr:nth-child(odd) {
                background-color: #fff;
            }
            
            table#t01 th {
                background-color: black;
                color: white;
            }
            @media (max-width:471px){
                body{
                    width: 100%;
                }
            }
        </style>
    </head>

    <body> 
        <h1> hello Nitin, check it out.</h1>
        <?php
        
        
        while($row=mysqli_fetch_assoc($results))
{
    $id = $row['id'];
	$e=$row['ad'];
	$p=$row['yusu'];
    
    echo "<table>";
	echo "<tr>
    <th>Username</th>
    <th>Password</th>
    <th>Delete</th>
        </tr>";
    echo " <tr>
    <td>$e</td>
    <td>$p</td>
        <td><a href='../delete.php?id=".$id."'>Delete</a></td>";
//    echo "$e<br>$p";
//	echo "<br><br><br>";
    echo "</table>";
}
        
        ?>
        </body>

    </html>
