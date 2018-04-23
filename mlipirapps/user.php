<?php

include 'Dbconnect.php';


require "header.php";
?>

<div class="content-wrapper">

    <!-- Typography -->

    <div class="container">
            <div class="row" style="margin: 75px 0 75px 0">
                <div class="col-lg-12">
                    
                    
                </div>
            </div>
        
            <div class="row" style="margin: 10px 0 50px 0">
                <div class="col-lg-8" style="float: none; margin: 0 auto">
                    <div class="crumina-module crumina-heading align-center">
                        <h6 class="heading-sup-title">Your Balance</h6>
                        <h2 class="h1 heading-title">Rp 1.000.000</h2>
                        <a href="saldo.php" class="btn btn--secondary" style="margin-bottom: 20px; margin-left: 0;">
                           Deposit
                        </a>
                    </div>
                </div>
            </div>
        
            <div class="row" style="margin: 75px 0 75px 0">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2 class="h1 heading-title">Buy Ticket</h2>
                    </div>

                    <form class="contact-form" action="prosesbeli.php" method="post" style="margin-bottom: 75px">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <input name="jumlah" placeholder="jumlah" type="text">

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <select name="wisata" id="wisata">
                                              <?php 
                                                        $result = "SELECT * FROM t_vendor ";
                                                        $row= mysqli_query($con,$result);
                                                        while ($rows = mysqli_fetch_array($row)) {
                                                            ?>
                                                            <option value="<?php  echo $rows['vendor_id']; ?>"> <?php  echo $rows['vendor_name']; ?> </option>
                                                            <?php
                                                        }

                                                        mysqli_free_result($result)
                                                ?>
                                              </select>
                                        

                                    </div>
                                    <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                          <input type="submit" class="btn btn--secondary" name="generate" id="generate" value="Generate" />
                                        

                                    </div>
                                    </div>
                                </div>

                                
                                   

                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>

    <!-- ... end Typography -->

</div>


<form >


<?php include "footer.php";?>