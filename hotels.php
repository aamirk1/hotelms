<?php require('header.php');
?>
<div class="container-fluid">
    <img src="static/images/hamm.jpg" style="height:400px; width:1500px;" alt="" srcset="">
</div>
<div class="container sticky" style="color: white;background-color: #4014149e;position: relative;margin-top: -2rem;padding: 15px;">
   <div class="row">
        <div class="col">
            <h5>Where to?</h5>
            <p>Mumbai House Andheri</p>
        </div>
        <div class="col">
            <h5>Check-in and Check-Out</h5>
            <input type="date" style="background-color: #ff000000;color:white;" id="from">
            <input type="date" style="background-color: #ff000000;color:white;" id="to">
        </div>
        <div class="col">
            <h5>Room And guests</h5>
            <p>Room 1 - 1 guest 0 Child</p>
        </div>
        <div class="col">
            <a href="" class="btn btn-warning">Check Availability</a>
        </div>
   </div>
</div>
<div class="container mt-3 mb-5">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">STANDARD RATES<br> <span>From 30,000 INR per night</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">MEMBER RATES<br> <span>From 22,500 INR per night</span></a>
        </li>
    </ul>
</div>
<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-lg-4">
            <img src="static/images/roof.jpg" width=100% height=100% alt="" srcset="">
        </div>
        <div class="col-lg-4">
            <h4 class="text-center">Colonial Bungalows with Machaan</h4>
            <p class="fs-6 text-center">Your spacious air-conditioned bungalow complete with a private shaded sit out, and soothing turquoise and copper interiors.</p>
            <div class="row">
                <span class="lg-6 float-start">4 sq. m
                </span>
                <span class="lg-6  float-end">
                    Inclusive of WiFi
                </span>
            </div>
        </div>
        <div class="col-lg-4">
            <h1 class="text-end">Rs 22500</h1>
            <p class="fs-6 text-end">Starting Rate/Night</p>
            <p class="fs-6 text-danger text-end">Last few rooms available</p>
            <a href="" class="btn float-end btn-warning">View Rates</a>
        </div>
    </div>
</div>
<?php require('footer.php');
?>