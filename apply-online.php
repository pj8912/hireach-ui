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
    <div class="mt-3">
        <h1 class="mt-5 text-center">APPLY ONLINE</h1>
        <hr>
        <div class="card card-body mt-5 border-0 col-md-4 m-auto" >
            <form action="" method="post">
                <div class="mb-2">
                    <input type="text" placeholder="Name" class="form-control rounded-0">
                </div>
                <div class="mb-2">
                    <input type="email" placeholder="Email" class="form-control rounded-0">
                </div>
                <div class="mb-2">
                    <input type="text" placeholder="Mobile" class="form-control rounded-0">
                </div>
                <div class="mb-2">
                    <textarea name="" placeholder="Address" id="" cols="30" rows="10" class="form-control rounded-0"></textarea>
                </div>
                <div class="mb-2">
                    <span>
                        <input type="radio"  name="" id="">
                        <label for="">Home</label>
                    </span>
                    <span class="m-5">
                        <input type="radio"  name="" id="">
                        <label for="">Business</label>
                    </span>
                </div>
                <div class="mb-2">

                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?php
main_footer();
?>