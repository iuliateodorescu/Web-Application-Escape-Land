<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'roomlist');

 $sql = "SELECT * FROM roomtable";
 $result = mysqli_query($con,$sql);

 if (mysqli_num_rows($result) > 0)
 {
    $contor=0;
        while($row = mysqli_fetch_assoc($result))
        {


          if(!isset($_GET['local']))
        		{
              $_SESSION['local']='en';
              echo '<section class="page-section">
                      <div class="container">
                        <div class="product-item">
                          <div class="product-item-title d-flex">
                            <div class="bg-faded p-5 d-flex ml-auto rounded">
                              <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">'.$row['EnNameRoom'].'</span>
                                <span class="section-heading-lower">'.$row['EnTitleRoom'].'</span>
                              </h2>
                            </div>
                          </div>
                          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="'.$row['Img'].'" alt="">
                          <div class="product-item-description d-flex mr-auto">
                            <div class="bg-faded p-5 rounded">
                              <p class="mb-0">'.$row['EnDescription'].'</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>';
            }else if(isset($_GET['local']))
          		if($_GET['local'] =='en')
              {
                  echo '<section class="page-section">
                      <div class="container">
                        <div class="product-item">
                          <div class="product-item-title d-flex">
                            <div class="bg-faded p-5 d-flex ml-auto rounded">
                              <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">'.$row['EnNameRoom'].'</span>
                                <span class="section-heading-lower">'.$row['EnTitleRoom'].'</span>
                              </h2>
                            </div>
                          </div>
                          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="'.$row['Img'].'" alt="">
                          <div class="product-item-description d-flex mr-auto">
                            <div class="bg-faded p-5 rounded">
                              <p class="mb-0">'.$row['EnDescription'].'</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>';
            }else{
                echo '<section class="page-section">
                        <div class="container">
                          <div class="product-item">
                            <div class="product-item-title d-flex">
                              <div class="bg-faded p-5 d-flex ml-auto rounded">
                                <h2 class="section-heading mb-0">
                                  <span class="section-heading-upper">'.$row['RoNameRoom'].'</span>
                                  <span class="section-heading-lower">'.$row['RoTitleRoom'].'</span>
                                </h2>
                              </div>
                            </div>
                            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="'.$row['Img'].'" alt="">
                            <div class="product-item-description d-flex mr-auto">
                              <div class="bg-faded p-5 rounded">
                                <p class="mb-0">'.$row['RoDescription'].'</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>';
              }




        }

} else {
    echo "Nicio camera disponibila !";
}

mysqli_close($con);
 ?>
