<?php

require "nav.php";

if (isset($_GET["err"])) {
    echo "<div id='subt' class='subtt'>Incorrect Username or Password</div>";
}
?>
        <div id="adm">
            <div id="ggq">
                <p class="a">Customer Login</p>
                <p>Enter your login details to proceed.</p>
            </div>

            <div id="log">
                <form action="val.php" class="log" method="post" accept-charset="utf-8">
                    <div>
                        <div>
                            <label for="">Enter Username</label>
                            <input required type="text" name="usr" value="" />
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="">Enter Password</label>
                            <input
                                required
                                type="password"
                                name="pwd"
                                value=""
                            />
                        </div>
                    </div>
                    <input type="submit" name="" class="sub" value="Login" />
                </form>
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
