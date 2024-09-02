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

      $b = mysqli_query($con, $r);

      if ($b) {
          if (mysqli_num_rows($b) > 0) { ?>
  
  <div id="tk">
    <p class="a">Tracking Code : <span class="id"><?php echo $a; ?></span></p>
    <p class="b">This shipment is handled by Icarus Logistics</p>
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
        
        
  
  <?php } else { ?>
  
  <div id="err">
    <i class="fas fa-exclamation-triangle fa-2x"></i>
    <div class="a">
      <p class="aa"><?php echo $a; ?></p>
      <p class="ab">Sorry, your tracking attempt was not successful. Please check your tracking number.</p>
    </div>
  </div>
  
  <?php }
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