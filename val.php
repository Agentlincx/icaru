<?php

session_start();

require_once "./db/dbc.php";

if (isset($_GET["track"])) {
    $cod = $_GET["track"];

    $aa = [];

    $a = "select * from track where num='$cod' order by id desc";

    $b = mysqli_query($con, $a);

    if ($b) {
        while ($d = mysqli_fetch_assoc($b)) {
            $e = [$d["id"], $d["num"], $d["desc"], $d["date"]];
            array_push($aa, $e);
        }
    }

    echo json_encode($aa);
}

if (isset($_POST["mail"])) {
    $q = $_POST["mail"];

    $a = json_decode($_COOKIE["arr"]);
    $aa = json_decode($_COOKIE["ara"]);

    $num = substr($a[0], 0, 2) . (time() + rand()) . substr($a[2], 0, 2);

    $name = $aa[0];
    $add = $a[3] . ", " . $a[2];
    $day = $a[10];

    if (maill($q, $num, $name, $add, $day) == 200) {
        sav($num);
    }
}

function sav($num)
{
    require "db/dbc.php";

    $a = json_decode($_COOKIE["arr"]);
    $aa = json_decode($_COOKIE["ara"]);

    $b =
        "insert into quote values('null', '$num', '" .
        $a[0] .
        "', '" .
        $a[1] .
        "', '" .
        $a[2] .
        "', '" .
        $a[3] .
        "', '" .
        $a[4] .
        "', '" .
        $a[5] .
        "', '" .
        $a[6] .
        "', '" .
        $a[7] .
        "', '" .
        $a[8] .
        "', '" .
        $a[9] .
        "', '" .
        $a[10] .
        "', '" .
        $a[11] .
        "', '0');";
    $b .=
        "insert into ufrom values('null', '$num', '" .
        $aa[0] .
        "', '" .
        $aa[1] .
        "', '" .
        $aa[2] .
        "', '" .
        $aa[3] .
        "', '" .
        $aa[4] .
        "', '" .
        $aa[5] .
        "', '" .
        $aa[6] .
        "');";
    $b .=
        "insert into uto values('null', '$num', '" .
        $aa[7] .
        "', '" .
        $aa[8] .
        "', '" .
        $aa[9] .
        "', '" .
        $aa[10] .
        "', '" .
        $aa[11] .
        "', '" .
        $aa[12] .
        "', '" .
        $aa[13] .
        "');";
    $b .=
        "insert into track values('null', '$num', 'Shipment order has been created', '" .
        time() .
        "')";

    if (mysqli_multi_query($con, $b)) {
        setcookie("arr", "", time() - 3600);
        setcookie("ara", "", time() - 3600);

        header("location: print.php?no=" . $num);
    }
}

//mail function
function maill($to, $num, $name, $add, $day)
{
    $bod =
        '<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css" media="all">
            
            
            body {
                border: 1px solid #1d1d1d;
                padding: 1.5em;
                font-size: calc(0.5em + 1vmin);
            }
            
            #hd img {
                width: 50px;
            }
            
            #hd span {
                font-size: 1.8em;
                position: relative;
                transform: translateY(-90%);
                top: 50%;
                font-weight: 600;
                display: inline-block;
                left: .3em;
            }
            
            .a {
                color: #FF3F3Abb;
                font-weight: 500;
                font-size: 1.1em;
            }
            
            a {
                all: initial;
                color: #FF3F3Abb;
            }
            
            #del {
                margin: 3em 0;
            }
            
            #fot {
                display: grid;
                grid-template-columns: max-content max-content;
                justify-content: space-between;
                border-top: 1px solid #1d1d1d;
                padding-top: 1em;
                color: #00000070;
            }
            
            table {
                border-collapse: collapse;
            }
            
            table th, table td {
                padding: 1em;
            }
            
        </style>
    </head>
    <body>
        
        <div id="hd" >
            <img src="https://icaruslogistics.org/img/log.png" alt="" />
            <span>
                Icarus Logistics
            </span>
        </div>
        
        <div id="sh">
            <p class="a">Preparing your Shipment</p>
            <p>Hello ' .
        $name .
        '</p>
            <p>Your Icarus shipment with waybill number is awaiting confirmation. The current estimated delivery is </p>
            <p>To track delivery order <a href="https://icaruslogistics.org/track.php?no='.$num.'">Click Here</a></p>
            <p>To view delivery details <a href="https://icaruslogistics.org/print.php?no='.$num.'">Click Here</a></p>
        </div>
        
        <div id="del">
            <p class="a">Shipment Information</p>
            
            <table border>
                <tr>
                    <th>Waybill Number</th>
                    <td>'.$num.'</td>
                </tr>
                <tr>
                    <th>Delivery Address</th>
                    <td>' .
        $add .
        '</td>
                </tr>
                <tr>
                    <th>Estimated Delivery Date</th>
                    <td>' .
        $day .
        '</td>
                </tr>
                <tr>
                    <th>Delivery Time</th>
                    <td>By end of day</td>
                </tr>
            </table>
        </div>
        
        
        <p>Thank you for using Icarus Logistics</p>
        
        <div id="fot">
            <div class="a">
                Icarus Group
            </div>
            <div>
                <div>
                    
                </div>
                <div>
                    2024 &copy; Icarus Group. All rights reserved
                </div>
            </div>
        </div>
        
    </body>
</html>';

    require "smtp/PHPMailerAutoload.php";

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    //$mail->Host = "smtp.hostinger.com";
    $mail->Host = "smtp.titan.email";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->SMTPAuth = true;
    $mail->Username = "mail@icaruslogistics.org";
    $mail->Password = "qwerty10!";
    $mail->setFrom("mail@icaruslogistics.org", "Icarus Logistics");
    $mail->addReplyTo("mail@icaruslogistics.org", "Icarus Logistics");
    $mail->addAddress($to);
    $mail->Subject = "Confirm your Icarus Shipment";
    $mail->Body = $bod;
    //$mail->msgHTML(file_get_contents('message.html'), __DIR__);

    $mail->SMTPOptions = [
        "ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true,
        ],
    ];
    //$mail->addAttachment('attachment.txt');
    if (!$mail->send()) {
        return "Mailer Error: " . $mail->ErrorInfo;
    } else {
        return 200;
    }
}

/*
   function maill($to)
   {
       require "smtp/PHPMailerAutoload.php";
       
     $mail = new PHPMailer();
     //$mail->SMTPDebug=2;
     $mail->IsSMTP();
     $mail->SMTPAuth = true;
     $mail->SMTPSecure = "tls";
     $mail->Host = "smtp.gmail.com";
     $mail->Port = 587;
     $mail->IsHTML(true);
     $mail->CharSet = "UTF-8";
     $mail->Username = "lincxace@gmail.com";
     $mail->Password = "fxmbqydbcbteblbj";
     $mail->SetFrom("lincxace@gmail.com", "Bithaven");
     $mail->AddReplyTo("lincxace@gmail.com", "Bithaven");
     $mail->Subject = "heqd";
     $mail->Body = "hell";
     $mail->AddAddress($to);
     $mail->SMTPOptions = [
       "ssl" => [
         "verify_peer" => false,
         "verify_peer_name" => false,
         "allow_self_signed" => false,
       ],
     ];
     if ($mail->Send()) {
       $fg = 100;
     } else {
       $fg = 'Mailer Error: ' . $mail->ErrorInfo;
     }

     echo $fg;
   }
   */

if (isset($_POST["usr"])) {
    $a = htmlspecialchars($_POST["usr"]);
    $b = htmlspecialchars($_POST["pwd"]);

    $c = "select * from user where usr='$a' and pwd='$b'";
    $e = mysqli_query($con, $c);
    if ($e) {
        if (mysqli_num_rows($e) > 0) {
            $d = mysqli_fetch_assoc($e);
            setcookie("user", $d["id"], time() + 60 * 60 * 60);
            header("location: dash.php");
        } else {
            header("location: login.php?err");
        }
    } else {
        header("location: login.php?err");
    }
}

if (isset($_GET["desc"])) {
    $b = $_GET["desc"];
    $a = "select * from track where id='$b'";
    $c = mysqli_query($con, $a);

    if ($c) {
        if (mysqli_num_rows($c) > 0) {
            $d = mysqli_fetch_assoc($c);
            echo $d["desc"];
        } else {
            echo mysqli_error($con);
        }
    } else {
        header("location: dash.php");
    }
}

if (isset($_POST["descc"])) {
    $a = $_POST["descc"];
    $aa = $_POST["descd"];
    $b = $_POST["id"];
    $c = $_POST["no"];

    $d = "UPDATE track SET track.desc='$a' where id='$b';";
    $d .= "UPDATE quote SET val='$aa' where num='$c'";

    if (mysqli_multi_query($con, $d)) {
        header("location: dash.php?no=" . $c . "&sucx");
    } else {
        echo mysqli_error($con);
    }
}

if (isset($_POST["desca"])) {
    $a = $_POST["desca"];
    $aa = $_POST["descd"];
    $c = $_POST["no"];

    $d = "insert into track values('null', '$c', '$a', '" . time() . "');";
    $d .= "UPDATE quote SET val='$aa' where num='$c'";

    if (mysqli_multi_query($con, $d)) {
        header("location: dash.php?no=" . $c . "&sucx");
    } else {
        echo mysqli_error($con);
    }
}

/*
if (isset($_GET["loc"])){
    
    $a = $_GET["loc"];

    $c = "select * from quote where num='$a'";
    $d = mysqli_query($con, $c);
    if ($d) {
        $e = mysqli_fetch_assoc($d);
        return $e["val"];
    } else {
        return "Error";
    }
}
*/

function loc($a)
{
    require "db/dbc.php";

    $c = "select * from quote where num='$a'";
    $d = mysqli_query($con, $c);
    if ($d) {
        $e = mysqli_fetch_assoc($d);
        return $e["val"];
    } else {
        return "Error";
    }
}

if (isset($_POST["cname"])) {
    $aa = $_POST["cname"];
    $ab = $_POST["comp"];
    $ac = $_POST["email"];
    $ad = $_POST["phone"];
    $ae = $_POST["topic"];
    $af = $_POST["msg"];
    $ag = time();

    $a = "insert into mail values('null','$aa', '$ab', '$ac', '$ad', '$ae', '$af', '$ag')";
    $b = mysqli_query($con, $a);

    if ($b) {
        $v = $_SERVER["HTTP_REFERER"];
        header("location:" . $v . "?sucx");
    } else {
        header("location:" . $v);
    }
}
?>

