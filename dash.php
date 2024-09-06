<?php

if (!isset($_COOKIE["user"])) {
    header("location: login.php");
}

if (isset($_GET["sucx"])) {
    echo "<div id='subt'>Successful</div>";
}

require "nav.php";
require "val.php";
?>

        <div id="tr">
            <p>Admin Page</p>

            <div class="a">
                <div class="aa">Enter tracking number</div>
                <form action="dash.php" method="get" accept-charset="utf-8">
                    <input
                        class="ab"
                        type="text"
                        name="no"
                        required="required"
                    />
                    <input class="ac" type="submit" value="View" />
                </form>
            </div>
        </div>

        <?php
        require "db/dbc.php";
        if (isset($_GET["no"])) {
            $a = $_GET["no"];
            $r = "select * from track where num='$a' order by id desc";
            $rr = "select * from ufrom where num='$a'";
            $rq = "select * from quote where num='$a'";

            $b = mysqli_query($con, $r);
            if ($b) {
                if (mysqli_num_rows($b) > 0) {

                    $bb = mysqli_query($con, $rr);
                    $bq = mysqli_query($con, $rq);
                    $dd = mysqli_fetch_assoc($bb);
                    $dq = mysqli_fetch_assoc($bq);
                    ?>

        <div id="tk">
            <p class="a">
                Tracking Code : <span class="id"><?php echo $a; ?></span>
            </p>
            <p class="b">This shipment is handled by Icarus Logistics</p>
        </div>
        
        
  <div id="trtab">
      <div>
          <p>Sender Details</p>
          <table>
              <tr>
                  <th>Sender Name</th>
                  <th>Address</th>
                  <th>Email</th>
              </tr>
              <tr>
                  <td><?php echo $dd["name"];?></td>
                  <td><?php echo $dd["address"];?></td>
                  <td><?php echo $dd["email"];?></td>
              </tr>
          </table>
      </div>
      
      <div>
          <p>Consignment's Details</p>
          <table>
              <tr>
                  <th>Tracking Number</th>
                  <th>Package Weight</th>
                  <th>Status</th>
                  
              </tr>
              <tr>
                  <td><?php echo $dq["num"];?></td>
                  <td><?php echo $dq["weight"]."kg";?></td>
                  <td><?php
                  $cv = $dq["val"];
                  if ($cv == 0){
                      echo "Order Processing";
                  } else if ($cv == 100) {
                      echo "Order Arrived";
                  } else {
                      echo "In-transit";
                  }
                  
                  ?></td>
              </tr>
          </table>
      </div>
      
      <div>
          <p>Order Details</p>
          <table border="0">
              <tr>
                  <th>Order Location</th>
                  <th>Order Date</th>
                  <th>Arrival Day</th>
                  <th>Destination Country</th>
              </tr>
              <tr>
                  <td><?php
                  echo $dq["from"];
                  ?></td>
                  <td><?php
                  echo $dq["date"];
                  ?></td>
                  <td><?php
                            $est = strtotime(($dq["date"])) + (60*60*24*4);
                            echo date("Y-m-d",$est); ?></td>
                  <td><?php
                  echo $dq["to"];
                  ?></td>
              </tr>
          </table>
      </div>
  </div>
  
        
        <div id="addq" class="sub" onclick="addq('<?php echo $_GET["no"]; ?>')">
            New&nbsp; <i class="fas fa-add"></i>
        </div>

        <div id="lk">
            <?php while ($d = mysqli_fetch_assoc($b)) { ?>
            <div class="rec" 
            <?php if ($d["desc"] == "Shipment order has been created") {
            } else {
                 ?>
            onclick="onb(<?php echo $d["id"]; ?>,'<?php echo $_GET[
    "no"
]; ?>')" <?php
            } ?>>
                <i class="fas fa-circle"></i>
                <div class="a"><?php echo $d["desc"]; ?></div>
                <div class="b">
                    <?php if ($d["desc"] == "Shipment order has been created") {
                    } else {
                        echo "|";
                    } ?>
                </div>
                <div class="c">
                    <?php echo date("Y-m-d, H:i:s", $d["date"]); ?>
                </div>
            </div>

            <?php } ?>
        </div>
        
        
        <div id="loc">
            <div class="x">
                
            </div>
            <img src="./img/lac.png" alt="" />
            <div class="y">
                
            </div>
        </div>
        
        <script src="main.js"></script>
        <script type="text/javascript" charset="utf-8">
            
            var ty = '<?php echo loc($a); ?>';
            loc(ty);
        </script>
        
        

        <?php
                } else {
                     ?>

        <div id="err">
            <i class="fas fa-exclamation-triangle fa-2x"></i>
            <div class="a">
                <p class="aa"><?php echo $a; ?></p>
                <p class="ab">
                    Sorry, your tracking attempt was not successful. Please
                    check your tracking number.
                </p>
            </div>
        </div>

        <?php
                }
            }
        } else {
        }
        ?>
        
        <div class="vmail">
            <a href="" class="sub">View Mail</a>
        </div>
        
        <div id="slid">
        <div class="slid">
            <div class="times" onclick="cls()">
                &times;
            </div>
            <div class="dcon">
                <p>Edit Detail</p>
                <form action="val.php" id="log" class="log" method="post" accept-charset="utf-8">
                    <input type="hidden" name="id" id="id" value="" />
                    <input type="hidden" name="no" id="no" value="" />
                    <div>
                        <div>
                            <label for="">Tracking Desc</label>
                            <input required type="text" name="descc" value="" id="desc" />
                        </div>
                        <div>
                            <label for="">Tracking %</label>
                            <input required type="number" max="100" name="descd" value="<?php echo loc(
                                $a
                            ); ?>" id="desc" />
                        </div>
                    </div>
                    <input type="submit" name="" class="sub" value="Update" />
                </form>
            </div>
            </div>
        </div>
        
        <div id="slidd">
        <div class="slid">
            <div class="times" onclick="clsa()">
                &times;
            </div>
            <div class="dcon">
                <p>Add Detail</p>
                <form action="val.php" id="log" class="log" method="post" accept-charset="utf-8">
                    
                    <input type="hidden" name="no" id="noo" value="" />
                    <div>
                        <div>
                            <label for="">Tracking Desc</label>
                            <input required type="text" name="desca" value="" id="desc" />
                        </div>
                        <div>
                            <label for="">Tracking %</label>
                            <input required type="text" max="100" name="descd" value="<?php echo loc(
                                $a
                            ); ?>" id="desc" />
                        </div>
                    </div>
                    <input type="submit" name="" class="sub" value="Add" />
                </form>
            </div>
            </div>
        </div>

        
        <script src="main.js"></script>
        <script type="text/javascript" charset="utf-8">
            
            setTimeout(function() {
    var a = document.getElementById("subt");
    a.style.opacity = "0";
}, 2000);
            
        </script>
    </body>
</html>
