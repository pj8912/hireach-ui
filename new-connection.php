<?php
include 'includes/header.php';
include 'includes/footer.php';


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>
<?php
main_header();
?>
<div class="container">
    <center class="mt-3">

        <img src="Hireach-Logo-Final.jpg" style="margin:auto;" class="text-center"  alt="">
    </center>
    <div class="card card-body m-auto col-md-4 mt-3 border-0 ">
        <h4 class="text-center text-danger">NEW CONNECTION</h4> <Br>
        <div class="mb-2">
            <input type="text" name="fullname" placeholder="Fullname" class="form-control">
        </div>
        <div class="mb-2">
            <input type="email" name="email" placeholder="Email" class="form-control">
        </div>
        <div class="mb-2">
            <input type="text" name="mobile" placeholder="Mobile" class="form-control">
        </div>
        <div class="mb-2">
            <input type="text" name="area" placeholder="Area" class="form-control">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </div>

</div>


<?php
main_footer();
?>