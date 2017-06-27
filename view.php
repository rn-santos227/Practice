<?php
require('dbconnect.php');
session_start();?>
<table>
    <?php while($row = mysqli_fetch_array($result)){?>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
        </tr>
        <tr>
            <td><?php echo $row["prodName"];?></td>
            <td><?php echo $row["prodName"];?></td>
            <td><?php echo $row["prodName"];?></td>
        </tr>
    <?php }?>
</table>