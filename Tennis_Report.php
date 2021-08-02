<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STRING-UP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="Stringingupdate.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="icon" type="image/jpg" href="stringup logo.jpg">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">


  </head>
  <style >
  .btn{
    display:inline-block;
  }

  </style>
  <body >

    <nav  style="background-color:green;height:70px;width:100%;position:fixed;"class="navbar navbar-expand-md navbar-light navbar-custom">
    <!-- <img src="warriorSportsLogo.jpg" alt="" height="100px"> -->
  <a  style="padding-left:20px; font-family:Ubuntu;font-size:30px; color:white"class="navbar-brand" href="#">STRING-UP<br><span style="color:white;font-family:Ubuntu;font-size:1px"><h5 style="margin-left:10px;font-size:15px">---To Pounce Back--- </h5></h5></a>


  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

  </button> -->
  <!-- <span class="navbar-toggler-icon"></span> -->
  <div style=""class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul style="margin-left:20%"class="navbar-nav mr-auto">
       <li class="nav-item">
         <a style="font-size: 1rem; color:white; font-family:Ubuntu"class="nav-link" href="index.php">Home</a>
       </li>
       <li class="nav-item">
         <a style="font-size: 1rem; color:white; font-family:Ubuntu"class="nav-link" href="About.php">AboutUs</a>
       </li>

    </ul>
  </div>


  </nav>



  <?php
  $conn=mysqli_connect('localhost','wrSports','Champion1@','stringing-app');
  if(!$conn){
    echo 'connection error';
  }




$sql="SELECT Serial_no,Name,Tel_number,Arena,Sports,RacquetQuantity,RacquetBrand,RacquetModel,
StringType,StringTension,StringColor,RacquetCover,
Amount,CollectionDate,PickUpTime,CollectionStatus,DeliveryStatus,PaymentMode FROM tennis_racquets";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  ?> <form class="" action="access.php" method="POST">

  <table style='border: 1px solid black;margin-top:6%;width:100%' id="Table1"><tr style='border: 1px solid black;align:center'><th style='border: 1px solid black'></th>
  <th style='border: 1px solid black'>SerialNo</th><th style='border: 1px solid black'>Name</th><th style='border: 1px solid black'>Stadium/Club</th>
  <th style='border: 1px solid black'>PhoneNo</th><th style='border: 1px solid black'>Sports</th>
  <th style='border: 1px solid black'>RacquetQuantity</th><th style='border: 1px solid black'>RacquetBrand</th>
  <th style='border: 1px solid black'>RacquetModel</th><th style='border: 1px solid black'>StringType</th>
  <th style='border: 1px solid black'>CollectionDate</th>
  <th style='border: 1px solid black'>PickUpTime</th>
  <th style='border: 1px solid black'>Amount</th>
  <th style='border: 1px solid black'>PaymentMode</th>
  <th style='border: 1px solid black'>StringTension</th><th style='border: 1px solid black'>StringColor</th>
  <th style='border: 1px solid black'>RacquetCover</th><th style='border: 1px solid black'>CollectionStatus</th><th style='border: 1px solid black'>DeliveryStatus</th>
   </tr>
  <?php
  while($row = $result->fetch_assoc()) {
    ?><tr><td style="border: 1px solid black"><input type="checkbox" value="<?php echo $row['SerialNo']?>
      <?php echo "*"?><?php echo $row['Name']?>
      <?php echo "*"?><?php echo $row['Arena'] ?>
      <?php echo "*"?><?php echo $row['PhoneNo'] ?>
      <?php echo "*"?><?php echo $row['Sports'] ?>
      <?php echo "*"?><?php echo $row['RacquetQuantity'] ?>
      <?php echo "*"?><?php echo $row['RacquetBrand'] ?>
      <?php echo "*"?><?php echo $row['RacquetModel'] ?>
      <?php echo "*"?><?php echo $row['StringType'] ?>
      <?php echo "*"?><?php echo $row['CollectionDate'] ?>
      <?php echo "*"?><?php echo $row['PickUpTime'] ?>
      <?php echo "*"?><?php echo $row['Amount'] ?>
      <?php echo "*"?><?php echo $row['PaymentMode'] ?>
      <?php echo "*"?><?php echo $row['StringTension'] ?>
      <?php echo "*"?><?php echo $row['StringColor'] ?>
      <?php echo "*"?><?php echo $row['RacquetCover'] ?>
      <?php echo "*"?><?php echo $row['CollectionStatus'] ; ?>
      <?php echo "*"?><?php echo $row['DeliveryStatus']; ?>

      <?php echo ""?><?php echo ""?><?php echo $row['TotalAmount'] ?>" name="ur"/>
      <td style="border: 1px solid black"><?php echo $row['Serial_no'] ?></td>

    <td style="border: 1px solid black"><?php echo $row['Name'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['Arena'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['Tel_number'] ?></td>

    <td style="border: 1px solid black"><?php echo $row['Sports'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['RacquetQuantity'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['RacquetBrand'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['RacquetModel'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['StringType'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['CollectionDate'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['PickUpTime'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['Amount'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['PaymentMode'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['StringTension'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['StringColor'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['RacquetCover'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['CollectionStatus'] ?></td>
    <td style="border: 1px solid black"><?php echo $row['DeliveryStatus'] ?></td>

  </tr>
  <?php }?>
  </table>
  <br />


    <input type="Submit" class="btn btn-warning"name="collected" value="Collected" />
    <input type="Submit" class="btn btn-primary"name="delivered" value="Delivered" />
    <input type="Submit" class="btn btn-success"name="PaymentMode" value="PaymentMode" />




  </form>



<?php } ?>



<?php
if(isset($_POST['Collected']))
$conn=mysqli_connect('localhost','wrSports','Champion1@','stringing-app');

// if(!$conn){
//   echo 'connection error';
//  }
 //else{
//   echo 'no error';
// }


if(isset($_POST['collected']))
{

  $rmess=$_POST['ur'];
  //echo $rmess;
  $mess=explode("*",$rmess);
  //print_r($mess);
  $sql="UPDATE tennis_racquets SET CollectionStatus='Yes' WHERE Serial_no='$mess[0]'";
  $brand=explode(",",$mess[6]);

  $brand_count=count($brand);

 $model=explode(",",$mess[7]);

 $model_count=count($model);
 $stringtype=explode(",",$mess[8]);
 $stringtension=explode(",",$mess[9]);
 $stringcolor=explode(",",$mess[10]);
 if($model_count>1 && $brand_count>1 && $stringtype>1){
    $ready="Dear ".$mess[1]. "\nYour ".$brand_count." Tennis Racquets for Stringing with following Details: \n";
    for($i=0;$i<$model_count;$i++){
      $j=$i+1;
      $ready.=$j.".".$brand[$i]."/".$model[$i]."/". $stringtype[$i]."/".$stringtension[$i]."LBS\n";
    }
    $ready.="Are Collected from ".$mess[2]." on ".date('d-m-Y',strtotime($mess[12]))." and Total Charges payable will be Rs.".$mess[15]." only.\nThanks for Choosing STRING-Up.\n TX_".$mess[0].".";


 }else{
   $ready="Dear ".$mess[1]."\nYour Tennis Racquet ".$mess[6]." ".$mess[7]." has been collected From ".$mess[2]." on ".date("d-m-Y", strtotime($mess[12]))."\n It will be Strung With ".$mess[8]."/".$mess[9]."LBS/".$mess[10]."\n and Total Charges Payable are ".$mess[15]."/- only.\nThanks for choosing STRING-Up \n TX_".$mess[0].".";
 }

    //echo $ready;

    $message = urlencode($ready);
    $url="http://alerts.prioritysms.com/api/web2sms.php";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "workingkey=Aa7132493e362603aab4937f1738f4e4d&to=$mess[3]&sender=STRGUP&message=$ready");// post data

    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    echo $result;


}


if(isset($_POST['delivered']))

{

    $dmess=$_POST['ur'];

   $mess=explode("*",$dmess);
    $udate=date('Y-m-d');
    echo $udate;
    echo $mess[0];
     $sql="UPDATE tennis_racquets SET DeliveryStatus='Yes' WHERE Serial_no='$mess[0]'";
     $result = $conn->query($sql);
     if(!mysqli_query($conn,$sql)){
       echo " not inserted";
     }else{
       echo "inserted";
     }
 //echo $mess[3];
 $brand=explode(",",$mess[6]);

 $brand_count=count($brand);

$model=explode(",",$mess[7]);

$model_count=count($model);
$stringtype=explode(",",$mess[8]);
$stringtension=explode(",",$mess[9]);
$stringcolor=explode(",",$mess[10]);

if($model_count>1 && $brand_count>1 && $stringtype>1){
   $deliver="Dear ".$mess[1]."\nYour ".$brand_count." Tennis Racquets for Stringing with following Details: \n";
   for($i=0;$i<$model_count;$i++){
     $j=$i+1;
     $deliver.=$j.".".$brand[$i]."/".$model[$i]."/".$stringtype[$i]."/".$stringtension[$i]."\n";
   }
   $deliver.="Are delivered to You on".date('d-m-Y')."\nThanks for choosing STRING-Up.\n TX_".$mess[0].".";


}else{
  $deliver="Dear ".$mess[1]."\nYour ".$mess[6]." ".$mess[7]." Tennis Racquet which was Strung with ".$mess[8]." @ ".$mess[9]." Lbs Tension are Delivered to you on ".date("d-m-Y")."\nThanks for choosing STRING-Up\nTx-".$mess[0].".";
}
   echo $deliver;
  $url="http://alerts.prioritysms.com/api/web2sms.php";
  $message = urlencode($deliver);// urlencode your message
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
  curl_setopt($curl, CURLOPT_POSTFIELDS, "workingkey=Aa7132493e362603aab4937f1738f4e4d&to=$mess[3]&sender=STRGUP&message=$deliver");// post data
  // query parameter values must be given without squarebrackets.
   // Optional Authentication:
  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
  echo $result;
}





?>
<?php
$conn->close();
?>


</body>

</html>
