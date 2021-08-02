<!-- AIzaSyCWcR-BLR1ub4F5c2z9viMKEgyZCOiRzC4 -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STRING-UP</title>


   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="Stringingupdate.css">
       <link href="https://fonts.googleapis.com/css2?family=Montez&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Mogra&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link rel="icon" type="image/jpg" href="stringup logo.jpg">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
         <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script type="text/javascript">
      // function to increase Count of number of racquets on screen
		$(document).on('click','.add_another_field',function(e){
			e.preventDefault();
      var count = 2;
      let demo = $(".increase");
      if(!(demo.children().length) >= 2){
          demo.append(" "+'<span class="counter">'+ count + "</span>");
        }
			$(".counter").html(function(i,val){
				return +val+1;
			});
		});





//Add Racquets to Products Table
function addUsers(){
  var inputText=document.getElementById('RacquetBrand').value;
  var inputText1=document.getElementById('RacquetModel').value;
  var inputText2=document.getElementById('StringType').value;
  var inputText3=document.getElementById('StringTension').value;
  var inputText4=document.getElementById('StringColor').value;

  var inputText7=document.getElementById('RacquetCover').value;

  var x=document.getElementById('Products');
  var d=x.insertRow(-1);
  var chkbox = document.createElement('input');
   chkbox.type = "checkbox";
   chkbox.id = "chk" ;
   chkbox.name = "chk" ;
  var c=d.insertCell(0);
  var c1=d.insertCell(1);
  var c2=d.insertCell(2);
  var c3=d.insertCell(3);
  var c4=d.insertCell(4);
  var c5=d.insertCell(5);
  c.appendChild(chkbox);
  c1.innerHTML=inputText;
  c2.innerHTML=inputText1;
  c3.innerHTML=inputText2;
  c4.innerHTML=inputText3;
  c5.innerHTML=inputText4;


}
// Add Racquets From Products Table To your Cart
function addProducts(){
  var table = document.getElementById("Products");
   var tR = document.getElementById("Products").rows.length;


 var Rb=[];
 var Rm=[];
 var St=[];
 var Sten=[];
 var Sc=[];
    for(var x=1;x<=tR-1;x++){
      Rb.push(table.rows[x].cells[1].innerHTML);
      Rm.push(table.rows[x].cells[2].innerHTML);
      St.push(table.rows[x].cells[3].innerHTML);
      Sten.push(table.rows[x].cells[4].innerHTML);
      Sc.push(table.rows[x].cells[5].innerHTML);

        }

    document.getElementById('Brand').value=Rb;
     document.getElementById('Model').value=Rm;
     document.getElementById('String').value=St;
     document.getElementById('Color').value=Sc;
     document.getElementById('Tension').value=Sten;


 }
//function to delete selected from the Products table
function delUsers(){
  var table = document.getElementById('Products');
        var rowCount = table.rows.length;
        // var i=1 to start after header
        for(var i=1; i<rowCount; i++) {
            var row = table.rows[i];
            // index of td contain checkbox is 0
            var chkbox = row.cells[0].getElementsByTagName('input')[0];
            if('checkbox' == chkbox.type && true == chkbox.checked) {
                table.deleteRow(i);
             }
        }
      }
function check(){
  var table = document.getElementById('Products');
        var tR = table.rows.length;
if(tR==1){
  alert("PLease Add Racquet to Add Your Racquets to the Table");
  document.myform.action ="index.php";
}else{
  document.myform.action="Confirm.php";
}
return true;
}

//To decrease the count by 1 of total number of Racquets
$(document).on('click','.del_another_field',function(e){
  e.preventDefault();
  var count = 2;
  let demo = $(".increase");
  if(!(demo.children().length) >= 2){
      demo.append(" "+'<span class="counter">'+ count + "</span>");
    }
  $(".counter").html(function(i,val){
    return +val-1;
  });
});
// To  access user-details to badminton page
function userdetails(){
  var name=document.getElementById('Name').value;
  var Arena=document.getElementById('Arena').value;
  var phone=document.getElementById('Tely').value;
  var Address=document.getElementById('Address').value;
  console.log(document.getElementById('NAME').value=name);
  console.log(document.getElementById('ARENA').value=Arena);
  console.log(document.getElementById('tely').value=phone);
  console.log(document.getElementById('ADDRESS').value=Address);
  document.myform.action="Badminton.php";

}
//To access userdetails to Tennis.php
function userdetails1(){
  var name=document.getElementById('Name').value;
  var Arena=document.getElementById('Arena').value;
  var phone=document.getElementById('Tely').value;
  console.log(document.getElementById('NAME').value=name);
  console.log(document.getElementById('ARENA').value=Arena);
  console.log(document.getElementById('tely').value=phone);
  document.myform.action="Tennis.php";

}
//To access userdetails to Squash.php
function userdetails2(){
  var name=document.getElementById('Name').value;
  var Arena=document.getElementById('Arena').value;
  var phone=document.getElementById('Tely').value;
  console.log(document.getElementById('NAME').value=name);
  console.log(document.getElementById('ARENA').value=Arena);
  console.log(document.getElementById('tely').value=phone);
  document.myform.action="Squash.php";

}





      </script>


  </head>
  <style>
  .display{
    display: inline;
  }
    @media (min-width:768px){
  .details {
     padding-left:45%;
  }
}
@media (min-width:768px){
.detail {
 margin-left:15%;
}
}
@media (max-width:768px){
.ss {
 height:1700px;
}
}
body{

}
.top{
  margin-top: 0px;

}
  </style>
  <body>
    <nav  style="background-color: green;height:70px"class="navbar navbar-expand-md navbar-light navbar-custom">
  <a  style="padding-left:20px; font-family:Ubuntu;font-size:30px; color:white"class="navbar-brand" href="#">STRING-UP<br><span style="color:white;font-family:Ubuntu;font-size:1px"><h5 style="margin-left:10px;font-size:15px">---To Pounce Back--- </h5></h5></a>
  <!-- <img src="logo.png" alt=""  > -->

  <div style=""class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul style="margin-left:20%"class="navbar-nav mr-auto">
       <li class="nav-item">
         <a style="font-size: 1rem; color:white; font-family:Ubuntu"class="nav-link" href="index.php">Home</a>
       </li>
       <li class="nav-item">
         <a style="font-size: 1rem; color:white; font-family:Ubuntu"class="nav-link" href="About.php">AboutUs</a>
       </li>
       <li style="margin-left:80%"class="nav-item">
         <button  style="margin-right:10%;margin:left:3%"onclick="window.location.href='ready.php'"class="btn btn-danger btn-md display imp"  value="Report">Report</button>
       </li>

    </ul>
  </div>


</nav>


 <form name="myform"class="top" method="POST">
   <div class="container-fluid">
     <div class="row">
       <div class="col-sm-4 col-lg-4">
         <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="ss"src="Stringing app carousel.jpg" alt="" width="100%" height="400px">
    </div>
    <div class="carousel-item">
      <img class="ss"src="tennsis stringing carousel.jpg" alt="" width="100%" height="400px">
    </div>
    <div class="carousel-item">
      <img class="ss"src="squash.jpg" alt="New York" width="100%" height="400px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>


       </div>
       <div class="col sm-4 lg-4">
         <section id="Personal-Details">
     <h3 class="details"style="padding-bottom:20px;padding-left:25%">User-Details</h3>
     <label class="detail">Name</label>


     <input id="Name"class="detail"type="text" name="playersName" value="" required>
     <input id="NAME" type="hidden" name="hidden_Name">
     <br>

       <label class="detail">Stadium/Club</label>
         <input id="Arena"class="detail"type="text" name="stadium" value="" required>
         <input id="ARENA" type="hidden" name="hidden_Arena">
         <br>
            <label class="detail">Address</label>
              <input id="Address"class="detail"type="text" name="address" value="Enter Your Address" required>
              <input id="ADDRESS" type="hidden" name="hidden_Address">
              <br>
         <label class="detail">Phone-no:</label>
           <input id="Tely"class="detail" type="tel" name="tel1" value=""maxlength="10" required pattern="\d{10}" label="10 digits">
           <input id="tely" type="hidden" name="hidden_tely">
           <br>

 </section>


       </div>
       <div class="col sm-4 lg-4">

       </div>

     </div>



   </div>





    <div  style="text-align:center"class="container">
      <h3>Select Sports for Stringing Service</h3><br>

        <div class="row">
          <div class="col-lg-4 d-flex justify-content-center">
        <div class="card text-black bg-light sm-3" style="max-width: 18rem;">
    <div class="card-body">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsJvE6BXdulnrznMCngHv0RftAVJBUjWPRtQ&usqp=CAU" alt="">
       <!-- <button type="button" onclick=userdetails() name="button">Badminton</button> -->

          <input type="submit" class="btn btn-success " name="badminton" value="Badminton" onclick=userdetails()>

    </div>
  </div>
</div>
<br>
<div class="col-lg-4 d-flex justify-content-center">
  <div class="card text-black bg-light sm-3" style="max-width: 18rem;">
    <div class="card-body">
     <img src="data:image/jpeg;base64,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" alt="">
     <input type="submit" class="btn btn-success" name="tennis" value="Tennis" onclick=userdetails1()>
  </div>
</div>
</div>
<br>
<div class="col-lg-4 d-flex justify-content-center">
<div class="card text-black bg-light sm-3" style="max-width: 18rem;">

  <div class="card-body">
    <img src="data:image/png;base64,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" alt="">
       <input type="submit" class="btn btn-success" name="Squash" value="Squash" onclick=userdetails2()>
  </div>
</div>
</div>

                  </div>





    </div>









 </form>


  </body>


</html>
