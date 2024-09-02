<?php

if (!isset($_GET["no"])){
    header("location: quote.php");
}

require("./db/dbc.php");
require("nav.php");

?>

        
        <div class="ord">
            <span>Create Shipment-----</span>
            <span>Get Quote-----</span>
            <span class="ti">Print</span>
        </div>
        
        <?php
        
        $a = $_GET["no"];
        
$b = "select * from ufrom where num='$a'";
$c = "select * from uto where num='$a'";
$d = "select * from quote where num='$a'";

$ba = mysqli_query($con, $b);
$ca = mysqli_query($con, $c);
$da = mysqli_query($con, $d);

$bb = mysqli_fetch_assoc($ba);
$cb = mysqli_fetch_assoc($ca);
$db = mysqli_fetch_assoc($da);

$ar = [["Name", $bb["name"]], ["Country", $bb["country"]], ["State", $bb["state"]], ["City", $bb["city"]], ["Address", $bb["address"]], ["Email", $bb["email"]], ["Phone", $bb["phone"]]];

$ar2 = [["Name", $cb["name"]], ["Country", $cb["country"]], ["State", $cb["state"]], ["City", $cb["city"]], ["Address", $cb["address"]], ["Email", $cb["email"]], ["Phone", $cb["phone"]]];

$ar3 = [["From", $db["from"]], ["City", $db["fcity"]]];

$ar4 = [["To", $db["to"]], ["City", $db["tcity"]]];

if (mysqli_num_rows($ba)>0){
    
    ?>

        <div id="ordd">
        <div id="ota">
            <div class="a">
                <img src="./img/log.png" alt="" />
                <div>Icarus Logistics</div>
            </div>

            <div class="arec">
                <div>
                    <p class="hhd">From</p>
                    <div class="sdd">
                    <?php
                    foreach ($ar as $x){
                    ?>
                        
                            <span class="x"><?php echo $x[0];?></span>
                            <span class="y"><?php echo $x[1];?></span>
                        
                    <?php
                    }
                    ?>
                    </div>
                </div>
                <div>
                    <p class="hhd">To</p>
                    <div class="sdd">
                    <?php
                    foreach ($ar2 as $x){
                    ?>
                        
                            <span class="x"><?php echo $x[0];?></span>
                            <span class="y"><?php echo $x[1];?></span>
                        
                    <?php
                    }
                    ?>
                    </div>>
                </div>
                <div>
                    <p class="hhd">Origin</p>
                 <div class="sdd">
                    <?php
                    foreach ($ar3 as $x){
                    ?>
                        
                            <span class="x"><?php echo $x[0];?></span>
                            <span class="y"><?php echo $x[1];?></span>
                        
                    <?php
                    }
                    ?>
                    </div>
                </div>
                <div>
                    <p class="hhd">Destination</p>
                                        <div class="sdd">
                    <?php
                    foreach ($ar4 as $x){
                    ?>
                        
                            <span class="x"><?php echo $x[0];?></span>
                            <span class="y"><?php echo $x[1];?></span>
                        
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>

            <div class="shdd">
                <p class="hhd">Shipment Details</p>
                <div>
                    <div class="sd">
                        <div>
                            <span class="x">Shipment Date</span>
                            <span class="y"><?php  echo $db["date"]; ?></span>
                        </div>
                    </div>
                    <div class="sd">
                        <div>
                            <span class="x">Waybill Number</span>
                            <span class="y"><?php echo $a; ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pie">
                <p class="hhd">Piece Details</p>
                <div class="piea">
                    <div >
                        <div class="sd">
                            <div>
                                <span class="x">Number of pieces</span>
                                <span class="y">1</span>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="sd">
                            <div>
                                <span class="x">Units</span>
                                <span class="y">kg</span>
                                <span class="y">cm</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Weight(kg)</th>
                            <th>Length(cm)</th>
                            <th>Width(cm)</th>
                            <th>Height(cm)</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><?php echo $db["weight"]; ?>kg</td>
                            <td><?php echo $db["length"]; ?>cm</td>
                            <td><?php echo $db["width"]; ?>cm</td>
                            <td><?php echo $db["height"]; ?>cm</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            
            <div class="ress">
                <p class="hhd">Results</p>
                <table border="0">
                    <tr>
                        <th>Product Name</th>
                        <th>Estimated Delivery</th>
                        <th>Latest Booking</th>
                        <th>Latest Pickup</th>
                        <th>Estimated Price</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <?php
                            $est = strtotime(($db["date"])) + (60*60*24*4);
                            echo date("Y-m-d",$est); ?>
                        </td>
                        <td>1</td>
                        <td>1</td>
                        <td><?php echo $db["amt"]; ?></td>
                    </tr>
                </table>
            </div>
            
            
            <div class="infss">
                <p>Transit times are indicative. Your final transit time may differ based on the actual pick up time, Service requested, characteristics of the shipment tendered, and/or regulatory clearance requirements. DHL Expressnhas no liablity or responsiblity for differences between the indicative and actual transit time.</p>
                <p>Prices quoted are estimates based on the information you have supplied and the Cash Account Rate in the origin Country/Region. Prices quoted may not include duties, taxes, customs charges or all surcharges and fees.</p>
                <p>*Please note that pickup is possible until last pickup day. If the last pickup is after the latest pickup, this may result in additional transit days(s).</p>
            </div>
            
        </div>
        
        <div id="prin">
        <a onclick="window.print();" class="print"><i class="fas fa-print"></i> Print</a>
        </div>
        </div>
        <?php
} else {
    ?>
    
  <div id="err">
    <i class="fas fa-exclamation-triangle fa-2x"></i>
    <div class="a">
      <p class="aa"><?php echo $a; ?></p>
      <p class="ab">Sorry, your quote retrieval was not successful.</p>
    </div>
  </div>
  
    <?php
}
        ?>

        <script src="main.js"></script>
        <script type="text/javascript" charset="utf-8"></script>
    </body>
</html>
