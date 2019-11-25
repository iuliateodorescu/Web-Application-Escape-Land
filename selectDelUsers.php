<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'userregistration');

 $sql = "SELECT * FROM usertable";
 $result = mysqli_query($con,$sql);

 if (mysqli_num_rows($result) > 0) {
    $contor=0;
    echo "
    <div class='table'>
        <div class='row header green'>
            <div class='cell'>ID</div>
            <div class='cell'>Name</div>
            <div class='cell dell'>Select</div>
        </div>";
        $i=1;
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<div class="row">
                        <div class="cell">'.$i.'</div>
                        <div class="cell">'.$row['name'].'</div>
                        <div class="cell dell">
                            <form action="deleteUsers.php" method="POST">
                                <input type="hidden" name="idUserToDelete" id="idUserToDelete" value="'.$row['name'].'"/>
                                <button id="btnDell"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>';
                    $i++;
        }
echo "</div>";
} else {
    echo "0 servicii";
}

 ?>
