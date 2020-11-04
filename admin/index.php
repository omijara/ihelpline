
            <!--
          ====================================
          ——— HEADER & SIDEBAR MENU
          =====================================
        -->


        <?php $title = 'Dashboard | Tele Doctor'; include("header.php"); ?>
        
        <?php require_once('../dbcon.php'); ?>
         

      <div class="content-wrapper">
        <div class="content">            
                  <!-- Top Statistics -->
                  <div class="row">
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">
                            <?php

                        $query = "SELECT * FROM care";


                        $sql = mysqli_query($link, $query);

                        $count = mysqli_num_rows($sql);


                        echo $count;

                        ?>
                          
                        </h2>
                          <p>Total Registration</p>
                          <div class="chartjs-wrapper">
                            <canvas id="barChart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini  mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">  <?php

                        $query = "SELECT * FROM user";


                        $sql = mysqli_query($link, $query);

                        $count = mysqli_num_rows($sql);


                        echo $count;

                        ?></h2>
                          <p>Total user</p>
                          <div class="chartjs-wrapper">
                            <canvas id="dual-line"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">
                            <?php
                          //session_start();

                            $sql = "UPDATE Counter SET visits = visits+1 WHERE id = 1";
                            $link->query($sql);

                            $sql = "SELECT visits FROM Counter WHERE id = 1";
                            $result = $link->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $visits = $row["visits"];
                                }
                            } else {
                                echo "no results";
                            }
                            
                            $link->close();

                            echo $visits;
                        ?>
                          </h2>
                          <p>Monthly Total Order</p>
                          <div class="chartjs-wrapper">
                            <canvas id="area-chart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">500</h2>
                          <p>Total Revenue This Year</p>
                          <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


            
                  <?php include('footer.php');?>