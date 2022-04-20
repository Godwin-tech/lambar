<?php 

// TODD:: add this section below to all authentication page
include('config.php');
if(!isLoggedin()){
    login_error_redirect();
}
// TODD:: add this section above to all authentication page
  // if (isset($_POST['submit'])) {
  // }
  // if (isset($_POST['client_name'])){
  //   echo "Please insert the name";
  // }else{
  //   echo htmlspecialchars($_POST['client_name']);
  // }
  // if (isset($_POST['client_address'])){
  //   echo "Please insert the address";
  // }else{
  //   echo htmlspecialchars($_POST['client_address']);
  // }
  // if (isset($_POST['staff_name'])){
  //   echo "Please insert your name";
  // }else{
  //   echo htmlspecialchars($_POST['staff_name']);
  // }
  // if (isset($_POST['ref_no'])){
  //   echo "Please insert the reference number";
  // }else{
  //   echo htmlspecialchars($_POST['ref_no']);
  // }
  // if (isset($_POST['product_pieces'])){
  //   echo "Please insert the quantity";
  // }else{
  //   echo htmlspecialchars($_POST['product_pieces']);
  // }
  // if (isset($_POST['ref_no'])){
  //   echo "Please insert the address";
  // }else{
  //   echo htmlspecialchars($_POST['ref_no']);
  // }
  // if (isset($_POST['ref_no'])){
  //   echo "Please insert the address";
  // }else{
  //   echo htmlspecialchars($_POST['ref_no']);
  // }
  //end of post check
$conn = mysqli_connect('localhost','root','','lambar');
//connected to the database
  if (!$conn){
    echo 'connection error:' . mysqli_connect_error();
  }
  $client_name = POST['client_name'];
  $client_address = POST['client_address'];
  $rep_name = POST['rep_name'];
  $rep_desig = POST['rep_desig'];
  $client_email = POST['client_email'];
  $client_contact = POST['client_contact'];
  $contract_no = POST['contract_no'];
  $ref_no = POST['ref_no'];
  $staff_name = POST['staff_name'];


  // $client_name = mysqli_real_escape_string($conn,POST['client_name']);



$sql = "INSERT INTO client(client_name,client_email,client_contact,client_address,rep_name,rep_desig) VALUES('$client_name','$client_email','$client_contact','$client_address','$rep_name','$rep_desig')";
$sql1 = "INSERT INTO contract(contract_no,ref_no) VALUES('$contract_no','$ref_no')";
$sql2 = "INSERT INTO staff(staff_name) VALUES('$staff_name')";

mysqli_query($conn,$sql);

// $sql = "INSERT INTO client(client_name,client_address,rep_name,rep_desig,client_email,client_contact) VALUES('?','?','?','?','?','?')";
// $sql = "INSERT INTO contract(contract_no,ref_no) VALUES('?','?')";
// $sql = "INSERT INTO staff(staff_name) VALUES('?')";


include("header.php");
?>
<div class="content-view">
<div class="row">
<div class="col-lg-10 offset-1">
<div class="card">
  <div class="card-block">
   <h4 class="card-title" style="text-align:center;">Inspection Request Form</h4><br>

<form action="" method="post"> 
  <div class="form-group">
    <label for="client_name">Name </label>
    <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Enter name">
    <small id="nameHelp" class="form-text text-muted">(Company)</small>
  </div>
  <div class="form-group">
    <label for="client_address">Address</label>
    <input type="address" class="form-control" id="client_address" name="address" placeholder="Enter address">
    <small id="addressHelp" class="form-text text-muted">(Company)</small>
  </div>
   <h5>REQUESTED BY: </h5><br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="appoint_name">Name</label>
      <input type="text" class="form-control" id="rep_name" >
    </div>
    <div class="form-group col-md-6">
      <label for="appoint_desig">Designation</label>
      <input type="text" class="form-control" id="rep_desig" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="client_contact">Phone Number</label>
      <input type="number" class="form-control" id="client_contact" name="client_contact">
    </div>
    <div class="form-group col-md-6">
      <label for="client_email">Email</label>
      <input type="email" class="form-control" id="client_email" name="client_email" >
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">MGI/TIDD Area Manager/Inspector(Station)</label>
    <input type="text" class="form-control" id="staff_name" name="staff_name" placeholder="Enter name">
  </div><br>
  <h5>Please inspect the product as described below:</h5><br>
  <div class="form-group">
    <label for="exampleInputEmail1">Ref. No.</label>
    <input type="number" class="form-control" id="ref_no" name="ref_no" placeholder="Enter Reference Number">
  </div>
  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="number" class="form-control" id="product_pieces" name="product_pieces" placeholder="Enter Quantity">
    <small id="quantityHelp" class="form-text text-muted">(Specification sheet,etc)</small>
  </div>
  <div class="form-group">
    <label for="contract_no">Contract Number </label>
    <input type="number" class="form-control" id="contract_no" name="contract_no" placeholder="Enter Contract Number">
    <small id="contractHelp" class="form-text text-muted">(if any)</small>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="logsCheckbox" value="logs">
  <label class="form-check-label" for="inlineCheckbox1">Logs</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="lumberCheckbox" value="lumber">
  <label class="form-check-label" for="inlineCheckbox2">Lumber</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="mouldingCheckbox" value="moulding" >
  <label class="form-check-label" for="inlineCheckbox3">Moulding</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="veneerCheckbox" value="veneer" >
  <label class="form-check-label" for="inlineCheckbox4">Veneer</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="plywoodCheckbox"5 value="plywood" >
  <label class="form-check-label" for="inlineCheckbox5">Plywood</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="otherCheckbox" value="other" >
  <label class="form-check-label" for="inlineCheckbox6">Other <small>(Specify)</small></label>
   <input type="text" style="display:none;" class="form-control" id="other"> <br><br><br>
</div>
   <div class="form-check form-check-inline">
       <label>Purpose of inspection <small>(Tick) </small></label>
  <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="export">
  <label class="form-check-label" for="inlineCheckbox7">Export</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="domestic">
  <label class="form-check-label" for="inlineCheckbox8">Domestic</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="import">
  <label class="form-check-label" for="inlineCheckbox9">Import</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="ntpm">
  <label class="form-check-label" for="inlineCheckbox10">New Timber Processing Mill</label>
</div>
<div class="form-group">
  <label for="client_name">Location </label>
  <input type="text" class="form-control" id="location" name="" placeholder="Enter location">
</div>

<br><br>
<div style="text-align:center">  
  <button type="submit" class="btn btn-primary btn-lg active">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>                             

 <?php include("footer.php"); ?>
 <script type="text/javascript">
   $(document).ready(function(){
$("#otherCheckbox").click(function(){
    if ($(this).is(":checked")) {
      $("#other").css("display","block");
    }else{
     $("#other").css("display","none"); 
    }
   });
   });
 </script>