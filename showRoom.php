<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'roomlist');

 $sql = "SELECT * FROM roomtable";
 $result = mysqli_query($con,$sql);

 if (mysqli_num_rows($result) > 0) {
    $contor=0;
    echo "
    <div class='table'>
        <div class='row header green'>
            <div class='cell'>ID</div>
            <div class='cell'>Nume</div>
            <div class='cell'>Descriere</div>
            <div class='cell dell'>Select</div>
        </div>";

        while($row = mysqli_fetch_assoc($result))
        {
            echo '<div class="row">
                        <div class="cell">'.$row['id'].'</div>
                        <div class="cell">'.$row['EnNameRoom'].'</div>
                        <div class="cell">'.$row['EnDescription'].'</div>
                        <div class="cell dell">
                            <form action="deleteRoom.php" method="POST">
                                <input type="hidden" name="idRoomToDelete" id="idRoomToDelete" value="'.$row['EnNameRoom'].'"/>
                                <button id="btnDell"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>';
        }
echo "</div>";
} else {
    echo "0 rooms";
}

mysqli_close($con);
 ?>
