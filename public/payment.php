<?php
session_start();
if(!isset($_SESSION['userType'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Confirm Reservation</title>

</head>

<body>

<div class="container">
    <div class="row mt-5">
        <div class="col-6 ">
            <label class="h3 mx-4 ">Confirm Reservation</label><br>
            <div class="container w-75 my-3 justify-content-center">
                <h5>Personal Information</h5>
                <input type="text" id="firstname" class="form-control my-2" placeholder="Firstname">
                <input type="text" id="middlename" class="form-control my-2" placeholder="Middlename">
                <input type="text" id="lastname" class="form-control my-2" placeholder="Lastname">
                <input type="text" id="address" class="form-control my-2" placeholder="Address">
                <input type="number" id="contact_no" class="form-control my-2" placeholder="Contact Number">
                <select name="" id="payment_process" class="form-select">
                    <option value="gcash">GCash</option>
                    <option value="paypal">Paypal</option>
                    <option value="paymaya">Paymaya</option>
                </select>
                <input type="hidden" value="<?php echo $_GET['room_id'] ?>" id="room_id">
                <input type="hidden" value="<?php echo $_SESSION['userId'] ?>" id="user_id">
                <input type="submit" id="btn-confirm" class="btn btn-success my-3">
            </div>
        </div>
        <div class="col-5 shadow mt-5" id="paymentDetailDiv">
           
        </div>
    </div>
    </div>


</body>
<script src="jquery.js"></script>
<script src="payment.js"></script>
</html>