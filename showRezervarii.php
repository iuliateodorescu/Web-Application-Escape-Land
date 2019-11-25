<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'roombooking');

 $sql = "SELECT * FROM bookingtable";
 $result = mysqli_query($con,$sql);

 if (mysqli_num_rows($result) > 0) {
    $contor=0;
    echo "
    <div class='table'>
        <div class='row header green'>
            <div class='cell'>ID</div>
            <div class='cell'>Name</div>
            <div class='cell'>Room</div>
            <div class='cell'>Data</div>
            <div class='cell dell'>Ora</div>
        </div>";

        while($row = mysqli_fetch_assoc($result))
        {
            echo '<div class="row">
                        <div class="cell">'.$row['res_id'].'</div>
                        <div class="cell">'.$row['res_name'].'</div>
                        <div class="cell">'.$row['res_room'].'</div>
                        <div class="cell">'.$row['res_date'].'</div>
                        <div class="cell">'.$row['res_hour'].'</div>
                    </div>';
        }
echo "</div>";
} else {
    echo "0 programari";
}

mysqli_close($con);
 ?>
