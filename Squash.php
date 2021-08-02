<?php
if(isset($_POST['Squash'])){
  $name=$_POST['hidden_Name'];
  $Arena=$_POST['hidden_Arena'];
  $Phone=$_POST['hidden_tely'];
  // echo $name;

}  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>String-Up</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="Stringingupdate.css">
       <link href="https://fonts.googleapis.com/css2?family=Montez&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Mogra&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link rel="icon" type="image/jpg" href="stringup logo.jpg">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
         <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<style>
/* #row2{
  padding-left: 5%;
} */
/* .test1{
padding-left: 25%;
} */

.card-img{
  width: 35%;
}
.card{
  /* margin-left: 7%;
  padding-left: 10%; */
  margin-bottom: 3%;
  border: none;
}
.card-body{
  text-align: left;
  /* padding-left: 10%; */
  padding-top: 0;
  padding-bottom: 0;
}
.btn{
  margin-top: 3%;
}
p{
  padding-bottom: 0;
}


</style>

         <body>
           <nav  style="background-color: green;height:70px;"class="navbar navbar-expand-md navbar-light navbar-custom">
         <a  style="padding-left:20px; font-family:Ubuntu;font-size:30px; color:white"class="navbar-brand" href="#">STRING-Up<br><span style="color:white;font-family:Ubuntu;font-size:1px"><h5 style="margin-left:10px;font-size:15px">---To Pounce Back--- </h5></h5></a>

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

       <form  class="" action="Squash_Confirm.php" method="POST">
         <input type="hidden" name="NAME" value="<?php echo $name?>">
         <input type="hidden" name="ARENA" value="<?php echo $Arena?>">
         <input type="hidden" name="PHONE" value="<?php echo $Phone?>">
          <div class="container-fluid">
            <div class="row">

              <div class="col-lg-4 col-sm-4 test">


<div class="card mb-3" style="max-width: 540px;padding-top:15%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="Tennis and Squash/gamma gut.jpg" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a href="#" class="btn btn-light">Gamma</a>
        <p><strong>&nbsp&nbsp&nbspRs.450/-</strong></p>
      </div>
    </div>
  </div>
</div>
<br>

<div class="card mb-3" style="max-width: 540px;padding-top:15%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="Tennis and Squash/poly tour-yonex.jpg" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a href="#" class="btn btn-light">Yonex Poly Tour</a>
        <p><strong>&nbsp&nbsp&nbspRs750/-</strong></p>
      </div>
    </div>
  </div>
</div>
<br>


<div class="card mb-3" style="max-width: 540px;padding-top:15%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="Tennis and Squash/Babolat RPM-BLAST.jpg" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a href="#" class="btn btn-light">Babolat RPM-Blast</a>
        <p><strong>&nbsp&nbsp&nbspRs.950/-</strong></p>
      </div>
    </div>
  </div>
</div>

</div>



       <div class="col-lg-4 col-sm-4 test">
          <section id="Informative">

       <h3 style="padding-bottom:20px;padding-left:15%;">Racquet Details</h3>



           <div class="test1">
               <p class="increase include" style="Font-family:bold">Details of Racquet: <span class="counter">1</span> </p>
           <label class="include"><strong> Racquet Brand</strong></label>
           <input list="Brands"class="include" onfocus="this.value=''"type="text" name="brand" id="RacquetBrand" value="" required><br>
           <datalist id="Brands">
             <option value ="Yonex"></option>
             <option value="Lining"></option>
             <option value="Victor"></option>
             <option value ="Mizuno"></option>
             <option value="Ashaway"></option>
             <option value="Apacs"></option>
             <option value ="Carlton"></option>
             <option value="Young"></option>
             <option value="Ling-mei"></option>
             <option value ="MaxBolt"></option>
             <option value="ADIDAS"></option>
             <option value="Babolat"></option>
             <option value ="Pro-Tech"></option>
             <option value="Maxx"></option>

             </datalist>
                  <input id="Brand" type="hidden" name="hidden_js_brand">
                   <label class="include" ><strong>Racquet Model</strong></label>
               <input class="include" onfocus="this.value=''"type="text" name="model" id="RacquetModel" value="" required><br>

                  <input id="Model" type="hidden" name="hidden_js_model">
               <label class="include"><strong>String Type </strong></label>
                 <input list="browsers" class="include"  onfocus="this.value=''"type="text" name="string"id="StringType"value="" required>
                 <datalist id="browsers">
                   <option value ="Gamma"></option>
                   <option value ="Yonex Poly Tour"></option>
                   <option value ="Babolat RPM-Blast"></option>
                   <option value ="Head Sonic Pro"></option>
                   <option value="Hyper-G Solinco"></option>
                   <option value="Yonex Aerobyte"></option>
                   <option value="Tour Byte"></option>

                   </datalist>
                 <br>

                  <input id="String" type="hidden" name="hidden_js_string">
               <label class="include"><strong>String Tension </strong></label>
                 <input list="LBS"class="include"  onfocus="this.value=''"   type="text" name="tension" id="StringTension" value="" required>
                 <datalist id="LBS">
                   <option value ="16"></option>
                   <option value="17"></option>
                   <option value="18"></option>
                   <option value ="19"></option>
                   <option value="20"></option>
                   <option value="21"></option>
                   <option value ="22"></option>
                   <option value="23"></option>
                   <option value="24"></option>
                   <option value ="25"></option>
                   <option value="26"></option>
                   <option value="27"></option>
                   <option value ="28"></option>
                   <option value="29"></option>
                   <option value="30"></option>
                   <option value ="31"></option>
                   <option value="32"></option>

                   </datalist>
               <br>


                 <input id="Tension" type="hidden" name="hidden_js_tension">
               <label class="include"><strong>String Color</strong> </label>
                 <input list="Colors"class="include" onfocus="this.value=''"  type="text" name="color" id="StringColor"value="" required>
                 <datalist id="Colors">
                   <option value ="Purple"></option>
                   <option value="Black"></option>
                   <option value="White"></option>
                   </datalist>
               <br>

                 <input id="Color" type="hidden" name="hidden_js_color">
               <label class="include"><strong> Are You Giving Your Racquet cover</strong></label>
                 <select id="RacquetCover"class="include" name="des">
                   <option value="No">No</option>
                   <option value="Yes">Yes</option>
                 </select>
                 <input id="Cover" type="hidden" name="hidden_js_cover">
               <br><input id="Ptime" type="hidden" name="hidden_js_Time">
             <label class="include"><strong>Choose Your Pickup-Time</strong></label>
                 <select id="collection time"class="include" name="ptime" required>
                 <option value ="6AM-8AM">6AM-8AM</option>
                 <option value="8AM-10AM">8AM-10AM</option>
                 <option value="10AM-12PM">10AM-12PM</option>
                 <option value="12PM-2PM">12PM-2PM</option>
                 <option value="2PM-4PM">2PM-4PM</option>
                 <option value="4PM-6PM">4PM-6PM</option>
                 <option value="6PM-8PM">6PM-8PM</option>
                  <option value="8PM-9PM">8PM-9PM</option>
                </select>


</div><br>


               <button onclick="addUsers(); toggleTable();" class="add_another_field btn btn-success btn-md">Add Racquet </button>

<!-- <button onclick="delUsers();" class="del_another_field btn btn-danger btn-md">Delete Racquet </button> -->

             </section>
           </div>



           <div id="row2" class="col-lg-4 col-sm-4 test">


             <div class="card mb-3" style="max-width: 540px;padding-top:15%;">
               <div class="row g-0">
                 <div class="col-md-4">
                   <img src="Tennis and Squash/Head Sonic Pro.jpg" alt="...">
                 </div>
                 <div class="col-md-8">
                   <div class="card-body">
                     <a href="#" class="btn btn-light">Head Sonic Pro</a>
                     <p><strong>&nbsp&nbsp&nbspRs.800/-</strong></p>
                   </div>
                 </div>
               </div>
             </div>
           <br>
             <div class="card mb-3" style="max-width: 540px;padding-top:15%;">
               <div class="row g-0">
                 <div class="col-md-4">
                   <img src="Tennis and Squash/Hyper-G Solinco.jpg" alt="...">
                 </div>
                 <div class="col-md-8">
                   <div class="card-body">
                     <a href="#" class="btn btn-light">Hyper-G Solinco</a>
                     <p><strong>&nbsp&nbsp&nbspRs.840/-</strong></p>
                   </div>
                 </div>
               </div>
             </div>
             <br>
             <div class="card mb-3" style="max-width: 540px;padding-top:15%;">
               <div class="row g-0">
                 <div class="col-md-4">
                   <img src="Tennis and Squash/solinco.jpg" alt="...">
                 </div>
                 <div class="col-md-8">
                   <div class="card-body">
                     <a href="#" class="btn btn-light">Tour Byte</a>
                     <p><strong>&nbsp&nbsp&nbspRs.850/-</strong></p>
                   </div>
                 </div>
               </div>
             </div>

           </div>

           </div>
           </div>
           <div style="text-align:center;margin-left:30%;margin-top:5%;visibility:hidden;">
               <table id="Products">
                 <tr>
                   <th>Racquet Brand</th>
                   <th>Racquet Model</th>
                   <th>String Type</th>
                   <th>String Tension</th>
                   <th>String Color</th>
                   <th>Delete</th>
                 </tr>
               </table>
             </div>

             <div class="container String" style="float:center">

              <input style="float:right;margin-top:10%;margin-left:50%" class="btn btn-primary btn-lg "type="Submit" name="Squash_Submit" value="Proceed to Confirm" onclick="addProducts()">
              </div>

           </form>


     </body>


          <script type="text/javascript">
          // function to increase Count of number of racquets on screen
          $(document).on('click','.add_another_field',function(e){
            e.preventDefault();
            var count = 2;
            let demo = $(".increase");
            if(!(demo.children().length) >= 1){
                demo.append(" "+'<span class="counter">'+ count + "</span>");
              }
            $(".counter").html(function(i,val){
              return +val+1;
            });
          });


          function toggleTable() {
            var table = document.getElementById("Products");
            var totalRowCount = table.rows.length;
            if(totalRowCount>=1){
            document.getElementById('Products').style.visibility="visible";
          }
          }


     //Add Racquets to Products Table
     function addUsers(){
      var inputText=document.getElementById('RacquetBrand').value;
      var inputText1=document.getElementById('RacquetModel').value;
      var inputText2=document.getElementById('StringType').value;
      var inputText3=document.getElementById('StringTension').value;
      var inputText4=document.getElementById('StringColor').value;


      var x=document.getElementById('Products');
      var d=x.insertRow(-1);
      // var chkbox = document.createElement('button');
      //  chkbox.type = "button";
      //  chkbox.className = "btn btn-danger" ;
      //  chkbox.value = "Delete" ;
      var c1=d.insertCell(0);
      var c2=d.insertCell(1);
      var c3=d.insertCell(2);
      var c4=d.insertCell(3);
      var c5=d.insertCell(4);
      var c6=d.insertCell(5);

      // delbtn.type = "Submit";
      //   delbtn.value = Delete;
      //   delbtn.name = Del;

      // c.appendChild(chkbox);

      c1.innerHTML=inputText;
      c2.innerHTML=inputText1;
      c3.innerHTML=inputText2;
      c4.innerHTML=inputText3;
      c5.innerHTML=inputText4;
      c6.innerHTML="<button onclick='delUsers()'; class='del_another_field btn btn-danger btn-sm' id='btnEdit'; name='btnEdit';>Delete</button>";



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
          Rb.push(table.rows[x].cells[0].innerHTML);
          Rm.push(table.rows[x].cells[1].innerHTML);
          St.push(table.rows[x].cells[2].innerHTML);
          Sten.push(table.rows[x].cells[3].innerHTML);
          Sc.push(table.rows[x].cells[4].innerHTML);

            }

        document.getElementById('Brand').value=Rb;
         document.getElementById('Model').value=Rm;
         document.getElementById('String').value=St;
         document.getElementById('Color').value=Sc;
         document.getElementById('Tension').value=Sten;


     }
     //function to delete selected from the Products table

     function delUsers() {

       var td = event.target.parentNode;
       var tr = td.parentNode; // the row to be removed
       tr.parentNode.removeChild(tr);
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



          </script>

     </html>
