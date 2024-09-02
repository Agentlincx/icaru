<?php

if (!isset($_COOKIE["arr"])) {
    header("location: quote.php");
}

require "nav.php";
?>

        <div class="ord">
            <span class="ti">Create Shipment</span>
            <span>-----Get Quote</s>
            <span>-----Print</s>
        </div>
        
        <div id="ggq">
            <p class="a">Continue with Quote</p>
            <p>
                Enter your details to proceed.
            </p>
        </div>
        
        <form onsubmit="return false;" accept-charset="utf-8" method="get" id="quo">
            <div class="from">
                <div class="fro">
                    <p class="ti">From</p>
                </div>
                
                <div class="to">
                    <p class="ti">To</p>
                </div>
            </div>
            <input type="submit" onclick="fsub()" class="sub" value="Proceed" />
        </form>
        
        
        <?php
        require("foot.php");
        ?>

        <script src="main.js"></script>
        <script type="text/javascript" charset="utf-8">
            fina();
            finaa();
        </script>
    </body>
</html>
