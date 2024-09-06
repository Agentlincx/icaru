<?php require "nav.php"; ?>
  <div id="tr">
    <p>Track & Trace</p>
    
    <div class="a">
      <div class="aa">
        Enter your tracking number
      </div>
      <form action="track.php" method="get" accept-charset="utf-8">
      <input class="ab" type="text" name="no" required="required">
      <input class="ac" type="submit" value="Track">
      </form>
    </div>
  </div>
  
  <?php
  require "db/dbc.php";
  require "val.php";

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
    <p class="a">Tracking Code : <span class="id"><?php echo $a; ?></span></p>
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
                  <td><?php echo $dd["name"]; ?></td>
                  <td><?php echo $dd["address"]; ?></td>
                  <td><?php echo $dd["email"]; ?></td>
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
                  <td><?php echo $dq["num"]; ?></td>
                  <td><?php echo $dq["weight"] . "kg"; ?></td>
                  <td><?php
                  $cv = $dq["val"];
                  if ($cv == 0) {
                      echo "Order Processing";
                  } elseif ($cv == 100) {
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
                  <td><?php echo $dq["from"]; ?></td>
                  <td><?php echo $dq["date"]; ?></td>
                  <td><?php
                  $est = strtotime($dq["date"]) + 60 * 60 * 24 * 4;
                  echo date("Y-m-d", $est);
                  ?></td>
                  <td><?php echo $dq["to"]; ?></td>
              </tr>
          </table>
      </div>
  </div>
  
  <div id="lk">
    
    <?php while ($d = mysqli_fetch_assoc($b)) { ?>
    <div class="rec">
        <i class="fas fa-circle"></i>
        <div class="a">
            <?php echo $d["desc"]; ?>
        </div>
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
      <p class="ab">Sorry, your tracking attempt was not successful. Please check your tracking number.</p>
    </div>
  </div>
  
  <?php
          }
      }
  } else {
  }
  ?>
  
  
  <?php require "foot.php"; ?>
  
  
    <script src="main.js"></script>
    <script type="text/javascript" charset="utf-8">
    </script>
</body>

</html>