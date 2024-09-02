<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Icarus Logistics</title>

        <!-- HTML -->

        <!-- Custom Styles -->
        <link rel="stylesheet" href="style.css" />

        <!-- font awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>

    <body>
        <div id="ship">
            <p class="a">
                GET A FREE DOMESTIC AND INTERNATIONAL BUAINESS SHIPPING QUOTE
                ONLINE
            </p>
            <p class="b">
                Packages and pallets, big and small, we can offer you an instant
                quote for your shipping needs both domestically and
                internationally. Fill out your shipment details to discover your
                quotes.
            </p>

            <div class="c">
                <!--add-->
            </div>
        </div>

        <div id="quo">
            <form id="fuba" onsubmit="return false;" method="get" accept-charset="utf-8">
                <div>
                    <div class="ti">From</div>
                    <div class="q1">
                        <div>
                            <label for="">Country or Region</label>
                            <input
                            
                            class="pp"
                                required
                                type="text"
                                name=""
                                id="inp1"
                                value=""
                                onfocus="diss('#lst', '#lsp')"
                                onkeyup="nati('#lst', '#inp1')"
                            />
                            <div class="lst">
                                <div id="lst"></div>
                            </div>
                        </div>

                        <div>
                            <label for="">City</label>
                            <input
                            class="pp"
                                type="text"
                                name=""
                                id=""
                                value=""
                                required
                            />
                        </div>
                    </div>
                </div>

                <div>
                    <div class="ti">To</div>
                    <div class="q2">
                        <div>
                            <label for="">Country or Region</label>
                            <input
                            
                            class="pp"
                                required
                                type="text"
                                name=""
                                id="inp2"
                                value=""
                                onfocus="diss('#lsp', '#lsp')"
                                onkeyup="nati('#lsp', '#inp2')"
                            />
                            <div class="lsp">
                                <div id="lsp"></div>
                            </div>
                        </div>

                        <div>
                            <label for="">City</label>
                            <input
                            class="pp"
                                type="text"
                                name=""
                                id=""
                                value=""
                                required
                            />
                        </div>

                        <div>
                            <label for="">Postal Code</label>
                            <input
                            class="pp"
                                type="number"
                                name=""
                                id=""
                                value=""
                                required
                            />
                        </div>
                    </div>
                </div>

                <input
                    class="sub"
                    type="submit"
                    name=""
                    id="subba"
                    onclick="sub()"
                    value="Desrcibe Your Shipment"
                />
            </form>

            <div id="quoo">
                <p class="tit">Shipment</p>
                <form id="fubb" onsubmit="return false;" method="get" accept-charset="utf-8">
                    <div id="shpp"></div>
                    <div class="lcot">
                        <!--a onclick="ads()">+ Add item</a-->
                        <div>
                            <span class="ti">Total Shipment weight : </span
                            ><span id="wval">0</span>kg
                        </div>
                    </div>
                    <input
                        class="sub"
                        type="submit"
                        name=""
                        onclick="suba()"
                        id=""
                        value="Get a Quote"
                    />
                </form>
            </div>

            <div id="qt">
                <p class="a">Your Quotes</p>
                <p class="b">Select a quote to start booking your shipment</p>

                <div id="day">
                    <label for="">Shipment Date</label>
                    <input
                        type="date"
                        name=""
                        id="date"
                        value=""
                        min="<?php echo date("Y-m-d"); ?>"
                        max="<?php echo date("Y-m-d", strtotime("+4 Days")); ?>"
                    />
                </div>

                <div id="rec">
                    <div class="rca">
                        <img src="./img/log.png" alt="" />

                        <div class="az">
                            <p class="aa">Estimated Delivery</p>
                            <p class="ab">
                                <?php
                                
                                echo date("D, d F", strtotime("+4 days")) ;
                                
                                ?>
                            </p>
                            <p class="ac">Book by <?php echo date("d/m/Y"); ?></p>
                        </div>
                    </div>

                    <div class="rcb">
                        <div class="az">
                            Price from <span>$</span><span class="ab"></s>
                        </div>
                        <a class="sub" onclick="subq()">Continue to Booking</a>
                    </div>
                </div>

                <div id="offe">
                    <div class="ofa">
                        <p class="ti">Included in this Offer</p>
                        <div class="oa">
                            <!--list-->
                        </div>
                    </div>

                    <div class="ofb">
                        <p class="ti">Optional Add-ons</p>
                        <div class="ob"></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="main.js"></script>
        <script type="text/javascript" charset="utf-8">
            lst();
            shipd();
            ads();
            inpshed();
            offer();
        </script>
    </body>
</html>
