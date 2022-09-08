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
<div id="carouselExampleControls " class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1.jpg" style="object-fit:cover" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="2.jpg" class="d-block w-100" style="object-fit:cover" alt="...">
            </div>
            <div class="carousel-item">
                <img src="3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">



        <div class="card card-body mt-5 border-0">
            <p style="font-family: Arial, Helvetica, sans-serif;font-size: large;">

                Hi Reach Broadband is currently engaged in the business of providing, Broadband Internet, Wi-Fi and FTTH connectivity services to its customers in Telangana, And wishes to establish Franchise to distribute its Services. Across Telangana Hi Reach offering
                Managed Internet broadband Services, Wifi wireless & Fiber connectivity Solutions any more services which are lined up. <br><br> Hi Reach Broadband offers leased line and best last mail connectivity to enable them to send
                huge amounts of data. It would also be building a comprehensive services framework that can deliver leading edge voice, video, data and multimedia content services over any broadband or IP- centric network.

            </p>

        </div>
        <div class="card card-body mt-5 ">
            <p class="text-center " style="font-family: Arial, Helvetica, sans-serif;font-size: large;">
                Required A New Broadband Connection?<br>
                <a class="btn btn-primary rounded-0 mt-3">Contact Us</a>
            </p>

        </div>


    </div>
    <br>

<?php
main_footer();
?>
