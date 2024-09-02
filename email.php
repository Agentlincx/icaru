<?php

if (!isset($_COOKIE["ara"])) {
    header("location: form.php");
}

require "nav.php";
?>
        
        <div class="ord">
            <span>Create Shipment-----</span>
            <span class="ti">Get Quote</span>
            <span>-----Print</span>
        </div>

        <div id="ggq">
            <p class="a">Get Quote</p>
            <p>
                Enter your active email address to receive quote and proceed to
                payment.
            </p>
        </div>

        <div id="tr" class="eml">
            <div class="a">
                <div class="aa">Enter Email Address</div>
                <form action="val.php" method="post" accept-charset="utf-8">
                    <input
                        class="ab"
                        type="email"
                        name="mail"
                        id="mail"
                        value=""
                    />
                    <input
                        class="ac"
                        type="submit"
                        name="eml"
                        id=""
                        value="Submit Email"
                    />
                </form>
            </div>
        </div>
        
                <?php
        require("foot.php");
        ?>

        <script src="main.js"></script>
        <script type="text/javascript" charset="utf-8"></script>
    </body>
</html>
