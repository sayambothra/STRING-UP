<?php
$conn=mysqli_connect('localhost','wrSports','Champion1@','stringing-app');
if(!$conn){
  echo 'connection error';
}
// if(isset($_POST['confirmed'])){
//   ob_start();
//   header('Location:first.php');
// }


if(isset($_POST['Badminton_submit'])){

$name=$_POST['NAME'];
$Arena=$_POST['ARENA'];
$tel1=$_POST['PHONE'];
$address=$_POST['ADDRESS'];
echo $address;
// echo $name;
// echo $Arena;
// echo $tel1;
// $email=$_POST['email'];
// $Sport=$_POST['game'];
$data=$_POST['hidden_js_brand'];

$Rbrand=explode(",",$data);
$RbrandLen=count($Rbrand);
$data1=$_POST['hidden_js_model'];
$Rmodel=explode(",",$data1);
$modelLen=count($Rmodel);
$data2=$_POST['hidden_js_string'];
$Rstring=explode(",",$data2);
$RstringLen=count($Rstring);
$data3=$_POST['hidden_js_tension'];
$Rtension=explode(",",$data3);
$RtensionLen=count($Rtension);
$data4=$_POST['hidden_js_color'];
$Rcolor=explode(",",$data4);
$RcolorLen=count($Rcolor);
$data7=$_POST['hidden_js_cover'];
$Rcover=explode(",",$data7);
// echo $data1;
// echo $data2;
// echo $data3;
// echo $data4;
// echo $data7;
$PickupTime=$_POST['ptime'];
// echo $PickupTime;
date_default_timezone_set('Asia/Kolkata');
$timestamp=date("Y-m-d H:i:s");

}





?>
<script type="text/javascript">
function Booking()
{
  alert("Thanks for Choosing STRING-Up.");
}
</script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STRING-UP</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link rel="icon" type="image/jpg" href="stringup logo.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      </head>
      <style>
      #printable {
        width:3in;
        height:1.5in;
        margin-top:0px;
        margin-right:.125in;
      }
      </style>
      <body>
        <div style="height:70px;background-color:green">
          <h2 style="font-size:30px;font-family:Ubuntu;color:white;margin-left:3%">STRING-Up</h2>
          <h5 style="color:white;margin-left:3%">-- To Pounce Back --<h5>

        </div>
        <div style="text-align:center">
          <h4>Thanks for choosing<br> STRING-Up</h4>

          <?php
            $Tamount;
            $amount;
          if($RbrandLen>1)
            {$Cdetails="Dear ".$name."\n"."Your following badminton Racquets:\n<br>";

          for($i=0;$i<$RbrandLen;$i++){
            $j=$i+1;

            if($Rstring[$i]=="Yonex BG-65" ){
              $amount="450";
            }
            elseif( $Rstring[$i]=="Yonex BG-65 Titanium"){
              $amount="550";
            }
            elseif( $Rstring[$i]=="Yonex BG-66 Ultimax"){
              $amount="750";
            }
            elseif( $Rstring[$i]=="Yonex Aerosonic"){
              $amount="950";
            }
            elseif( $Rstring[$i]=="Yonex Aerobyte"){
              $amount="1000";
            }
            elseif( $Rstring[$i]=="Yonex Nanogy95"){
              $amount="750";
            }
            elseif( $Rstring[$i]=="Lining-LN62"){
              $amount="650";
            }
            elseif( $Rstring[$i]=="Lining-LN64"){
              $amount="650";
            }
            elseif( $Rstring[$i]=="Lining-LN70"){
              $amount="650";
            }
            elseif( $Rstring[$i]=="Lining-No1"){
              $amount="600";
            }
            elseif( $Rstring[$i]=="Lining-No7"){
              $amount="525";
            }
            elseif( $Rstring[$i]=="Gamma"){
              $amount="450";
            }
            elseif( $Rstring[$i]=="Yonex Poly Tour"){
              $amount="750";
            }
            elseif( $Rstring[$i]=="Babolat RPM-Blast"){
              $amount="950";
            }
            elseif( $Rstring[$i]=="Head Sonic Pro"){
              $amount="800";
            }
            elseif( $Rstring[$i]=="Hyper-G Solinco"){
              $amount="840";
            }
            elseif( $Rstring[$i]=="Tour Byte"){
              $amount="850";
            }

            $Tamount=$Tamount+$amount;
            $Cdetails.=$j.". ".$Rbrand[$i]."/".$Rmodel[$i]."/".$Rstring[$i]."/".$Rcolor[$i]."/".$Rtension[$i]." LBS/".$amount."\n<br>";
          }
          $Cdetails.="will be collected from ".$Arena." today between ".$PickupTime.".<br>It will be strung and delivered to you <br> by tomorrow  at ".$Arena." between ".$PickupTime.".<br>Total amount payable is Rs.".$Tamount."/- only.";
        }else{
          if($Rstring[0]=="Yonex BG-65" ){
            $amount="450";
          }
          elseif( $Rstring[0]=="Yonex BG-65 Titanium"){
            $amount="550";
          }
          elseif( $Rstring[0]=="Yonex BG-66 Ultimax"){
            $amount="750";
          }
          elseif( $Rstring[0]=="Yonex Aerosonic"){
            $amount="950";
          }
          elseif( $Rstring[0]=="Yonex Aerobyte"){
            $amount="1000";
          }
          elseif( $Rstring[0]=="Yonex Nanogy95"){
            $amount="750";
          }
          elseif( $Rstring[0]=="Lining-LN62"){
            $amount="650";
          }
          elseif( $Rstring[0]=="Lining-LN64"){
            $amount="650";
          }
          elseif( $Rstring[0]=="Lining-LN70"){
            $amount="650";
          }
          elseif( $Rstring[0]=="Lining-No1"){
            $amount="650";
          }
          elseif( $Rstring[0]=="Lining-No7"){
            $amount="550";
          }
          elseif( $Rstring[0]=="Gamma"){
            $amount="450";
          }
          elseif( $Rstring[0]=="Yonex Poly Tour"){
            $amount="750";
          }
          elseif( $Rstring[0]=="Babolat RPM-Blast"){
            $amount="950";
          }
          elseif( $Rstring[0]=="Head Sonic Pro"){
            $amount="800";
          }
          elseif( $Rstring[0]=="Hyper-G Solinco"){
            $amount="840";
          }
          elseif( $Rstring[0]=="Tour Byte"){
            $amount="850";
          }

          $Tamount=$amount;
          $Cdetails="Dear ".$name."\n"."Your ".$Rbrand[0]." ".$Rmodel[0]. " badminton Racquet will be collected from ".$Arena."\n<br> today between ".$PickupTime."<br>It will be
          strung with ".$Rstring[0]." @".$Rtension[0]." LBS and delivered to you by tommorrow at ".$Arena." between ".$PickupTime.".<br>Total amount payable is Rs.".$amount."/- only";
        }
          echo $Cdetails;

          if(isset($_POST['confirmed'])){
            $NAME=$_POST['name'];
            $ARENA=$_POST['arena'];
            $TEL=$_POST['tel'];
            echo $TEL;
            $ADDRESS=$_POST['address'];
            echo $ADDRESS;
            $BRAND=$_POST['brand'];
            $MODEL=$_POST['model'];
            $STRING=$_POST['string'];
             echo $STRING;
            $TENSION=$_POST['tension'];
            $COLOR=$_POST['color'];
            $CDATE=$_POST['cdate'];
            $TamounT=$_POST['TAmount'];
            //echo $TamounT;
            $NRQ=$_POST['Nrq'];
            $Rcover=$_POST['cover'];
            $PTIME=$_POST['Ptime'];
            $Sport=$_POST['Sport'];
            //echo $BRAND;
            $sql="INSERT INTO Customer_details(Name,Arena,Tel_number,Sport)
            VALUES('$NAME','$ARENA','$TEL','Badminton')";

              $RBRAND=explode(",",$BRAND);
              $RMODEL=explode(",",$MODEL);
              $RSTRING=explode(",",$STRING);
              $RTENSION=explode(",",$TENSION);
              echo $RSTRING[0];
              $RCOLOR=explode(",",$COLOR);
              $Rbrand=count($RBRAND);
              $Rmodel=count($RMODEL);
              $stringtype=count($RSTRING);
              $stringtension=count($RTENSION);
              $stringcolor=count($RCOLOR);

                $sql1="INSERT INTO badminton_racquets(Name,Tel_Number,Arena,Address,RacquetQuantity,RacquetBrand,RacquetModel,StringType,
                StringTension,StringColor,RacquetCover,CollectionDate,PickUpTime,Amount)
                VALUES('$NAME','$TEL','$ARENA','$ADDRESS','$NRQ','$BRAND','$MODEL','$STRING','$TENSION','$COLOR','$Rcover','$CDATE','$PTIME','$TamounT')";


              if($Rbrand>1){
                $message="Dear ".$NAME." , Your following Badminton Racquets:\n";
                for($i=0;$i<$Rbrand;$i++){
                  $j=$i+1;
                  $message.=$j.". ".$RBRAND[$i]."/".$RMODEL[$i]."/".$RSTRING[$i]."/".$RCOLOR[$i]."/".$RTENSION[$i]."LBS ";
                }
                $message.="are booked for stringing on ".$CDATE." from ".$ARENA." at ".$PTIME.".These Racquets will be Strung and delivered back to you by tomorrow at ".$ARENA." between ".$PTIME.". Your Total Charges Payable are Rs. ".$TamounT." only/-. Thanks for choosing thestringup.com(STRING-UP)!!!";
              }
              else{
              $message="Dear ".$NAME." , Your Badminton Racquet ".$BRAND." ".$MODEL." is booked for stringing service On ".$CDATE.
              "with ".$STRING." @ ".$TENSION." LBS ".$COLOR." color, from ".$ARENA." between ".$PTIME.". It will be strung and delivered back to you by tomorrow at ".$ARENA." between ".$PTIME." by tomorrow. Your Total Charges Payable are Rs. ".$TamounT." only/-. Thanks for choosing thestringup.com(STRING-UP)!!!";
            }
               // echo $message;
               // $numbers=array($TEL,"9121862790","8978744508");
               // for($i=0;$i<count($numbers);$i++){
               // $url="http://alerts.prioritysms.com/api/web2sms.php";
               // $message = urlencode($message);// urlencode your message
               // $curl = curl_init();
               // curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
               // curl_setopt($curl, CURLOPT_POSTFIELDS, "workingkey=Aa7132493e362603aab4937f1738f4e4d&to=$numbers[$i]&sender=STRGUP&message=$message");
               // // post data
               // // query parameter values must be given without squarebrackets.
               //  // Optional Authentication:
               // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
               // curl_setopt($curl, CURLOPT_URL, $url);
               // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
               // $result = curl_exec($curl);
               // curl_close($curl);
               // echo $result;
             //}

            if(!mysqli_query($conn,$sql)){
              echo " not inserted".mysqli_error($conn);
            }else{
              echo "inserted";

            }
            if(!mysqli_query($conn,$sql1)){
              echo " not inserted".mysqli_error($conn);
            }else{
              echo "inserted";

            }
              // header('Location:first.php');

          }





    ?>




        </div>

</body>

        <form style="margin-left:46%"target="_blank"action="Badminton_Confirm.php"method="POST">
          <input type="hidden" name="brand" value="<?php echo $data;?>">
          <input type="hidden" name="string" value="<?php echo $data2;?>">
          <input type="hidden" name="tel" value="<?php echo $tel1;?>">
          <input type="hidden" name="arena" value="<?php echo $Arena;?>">
          <input type="hidden" name="address" value="<?php echo $address;?>">
          <input type="hidden" name="name" value="<?php echo $name;?>">
          <input type="hidden" name="model" value="<?php echo $data1;?>">
          <input type="hidden" name="tension" value="<?php echo $data3;?>">
          <input type="hidden" name="color" value="<?php echo $data4;?>">
          <input type="hidden" name="cdate" value="<?php echo $timestamp;?>">
          <input type="hidden" name="TAmount" value="<?php echo $Tamount;?>">
          <input type="hidden" name="Nrq" value="<?php echo $RbrandLen;?>">
          <input type="hidden" name="cover" value="<?php echo $data7;?>">
          <input type="hidden" name="Ptime"value="<?php echo $PickupTime;?>">
          <input type="hidden" name="Sport"value="<?php echo $Sport;?>">
        <input type="submit" name="confirmed" class="btn btn-success btn-md display"  value="Confirm"onclick="Booking()">
        <button onclick="window.location.href='first.php'"class="btn btn-danger btn-md display" value="Cancel">Cancel</button>
      </form>





      </html>
