<?php require('header.php');
?>
  <nav class="navbar navbar-expand-md bg-light  navbar-dark">
  <a class="navbar-brand text-dark" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon text-dark"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-dark fs-3" href="#">Destination</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark fs-3" href="#">Experiences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark fs-3" href="#">Special Offers</a>
      </li>    
    </ul>
  </div>  
</nav>
  

<div class="mt-1">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img style="height: 600px;" src="static/images/villa.jpg" class="d-block w-100" alt="...">       
        
      </div>
      <div class="carousel-item">
        <img style="height: 600px;" src="static/images/hotel2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img style="height: 600px;" src="static/images/hotel1.jpg" class="d-block w-100" alt="...">
      </div>
      
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="margin-top: 140px;margin-bottom: 100px;">
      <span class="carousel-control-prev-icon" style="margin-left:-100px; " aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="margin-top: 140px;  margin-bottom: 100px;
">
      <span class="carousel-control-next-icon" style="margin-right:30px;" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

    <div class="container mt-4 mb-5  active">
      <h1 class="text-center mt-3">Hotel Name Book Direct</h1>
      <p class="text-dark text-center fs-5">Booking directly on the brand website has its own advantages. We are excited to share with our guests the exclusive benefits they may enjoy when they book direct with us.</p>
    </div>
<div class="container">
  <h1 class="text-dark"><i>What</i> stirs the traveller in you?</h1>
  <p class="fs-6">An idyllic beach on a faraway island? Shopping for rare treasures in an ancient city?<br/>
A picnic in the Himalayas? A leisurely cruise on the Nile or a jungle adventure?</p>
  
</div>
<div class="container" style="margin-top: 2rem; margin: bottom 3rem;">
  <div class="tab mt-3 mb-2">
    <button class="tablinks btn-war"  onclick="openCity(event, 'Aboutus')" id="defaultOpens">Hotel And Resort</button>

    <button class="tablinks btn-war" onclick="openCity(event, 'Whoweare')" style="margin-left: 5px;">OUR ALLIANCE PARTNER - MANDARIN ORIENTAL</button>
  </div>
  <div id="Aboutus" class="tabcontent">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img style="height: 500px;" src="static/images/roof.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img style="height: 500px;" src="static/images/water.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img style="height: 500px;" src="static/images/lagoon.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div id="Whoweare" class="tabcontent mt-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img style="height: 500px;" src="static/images/villa.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img style="height: 500px;" src="static/images/lagoon.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img style="height: 500px;" src="static/images/bora.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

</div>

<div class="container mt-4">
  <h1><i>Experiences</i>  that linger, often forever.</h1>
  <p class="fs-6">A barbeque under the stars?<br/>
A trek through a tropical paradise?</p>
</div>

<div class="container-fluid">
  
  <div class="mt-1">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-6">
              <img style="height: 400px;" src="static/images/villa.jpg" class="d-block w-100" alt="..."> 
            </div>  
            <div class="col-lg-6">
              <p class="fs-5" style="text-align: justify;margin-right: 7rem;"
>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur minima excepturi consectetur voluptas vitae architecto provident debitis, pariatur corporis veritatis natus, sint, distinctio beatae nemo nam ducimus repellendus iusto numquam.
              Sit voluptas laudantium corrupti accusantium deleniti. Debitis quo ratione assumenda enim rerum consequuntur dolore quidem voluptatem veniam itaque accusamus, aperiam dignissimos quibusdam ab eaque molestiae. Distinctio expedita modi quisquam facilis!</p>
            </div>    
          </div>
          
        </div>
        <div class="carousel-item">
        <div class="row">
            <div class="col-lg-6">
              <img style="height: 400px;" src="static/images/hotel2.jpg" class="d-block w-100" alt="..."> 
            </div>  
            <div class="col-lg-6">
              <p class="fs-5" style="text-align: justify;margin-right: 7rem;"
>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur minima excepturi consectetur voluptas vitae architecto provident debitis, pariatur corporis veritatis natus, sint, distinctio beatae nemo nam ducimus repellendus iusto numquam.
              Sit voluptas laudantium corrupti accusantium deleniti. Debitis quo ratione assumenda enim rerum consequuntur dolore quidem voluptatem veniam itaque accusamus, aperiam dignissimos quibusdam ab eaque molestiae. Distinctio expedita modi quisquam facilis!</p>
            </div>    
          </div>
        </div>
        <div class="carousel-item">
        <div class="row">
            <div class="col-lg-6">
              <img style="height: 400px;" src="static/images/hotel1.jpg" class="d-block w-100" alt="..."> 
            </div>  
            <div class="col-lg-6">
              <p class="fs-5" style="text-align: justify;margin-right: 7rem;"
>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur minima excepturi consectetur voluptas vitae architecto provident debitis, pariatur corporis veritatis natus, sint, distinctio beatae nemo nam ducimus repellendus iusto numquam.
              Sit voluptas laudantium corrupti accusantium deleniti. Debitis quo ratione assumenda enim rerum consequuntur dolore quidem voluptatem veniam itaque accusamus, aperiam dignissimos quibusdam ab eaque molestiae. Distinctio expedita modi quisquam facilis!</p>
            </div>    
          </div>
        </div>
        
      </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="margin-top: 140px;margin-bottom: 100px;">
        <span class="carousel-control-prev-icon" style="margin-left:-100px;background-color: #2e2d2d;" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="margin-left:-100px;
  ">
        <span class="carousel-control-next-icon" style="margin-right:-50px; background-color: gray;" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>


<div class="container">
  <h1 class="text-center mb-5 mt-5">Popular Destination</h1>
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
            <div class="category-image mb-2">
              <img src="static/images/mj.jpg"alt="product-image" class="w-100" height=320>
            </div>
            <span class="float-start text-dark"><h4>Udaipur</h4></span>
            <span class="float-end text-dark"><a href="hotels.php" class="btn btn-warning">Details</a></span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
            <div class="category-image mb-2">
              <img src="static/images/6.jpg"alt="product-image" class="w-100" height=320>
            </div>
            <span class="float-start text-dark"><h4>Santacruz</h4></span>
            <span class="float-end text-dark"><a href="" class="btn btn-warning">Details</a></span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
            <div class="category-image mb-2">
              <img src="static/images/061.png"alt="product-image" class="w-100" height=320>
            </div>
            <span class="float-start text-dark"><h4>Andheri</h4></span>
            <span class="float-end text-dark"><a href="" class="btn btn-warning">Details</a></span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
            <div class="category-image mb-2">
              <img src="static/images/Facade.png"alt="product-image" class="w-100" height=320>
            </div>
            <span class="float-start text-dark"><h4>Juhu</h4></span>
            <span class="float-end text-dark"><a href="" class="btn btn-warning">Details</a></span>
        </div>
      </div>
    </div>
  </div>
  
</div>

<div class="container">
  <h1 class="text-center mb-5 mt-5">Participating Hotels</h1>
  <div class="mt-4 mt-5" >
  
    <input type="text" class="mb-5 sear" placeholder="Search...">
  </div>
  <div class="row">
    <div class="col-lg-6">
      <div class="row">
        <div class="col-lg-6">
          <img src="static/images/061.png" style="width:100%; height:100%;" alt="" srcset="">
        </div>
        <div class="col-lg-6">
          <h5>Mumbai House, Andheri</h5>
          <p class="fs-6"><i class="fa-light fa-location-dot"></i>
          Hotel Mumbai House Opposite Courtyard by Marriott, Behind Divine Child High School, Andheri Kurla Road Chakala, Andheri East Mumbai 400093
          </p>
          <p class="fs-6">3 km from Mumbai Airport</p>
          <a href="hotels.php" class="btn btn-warning" style="margin-top: 15%;margin-left: 50%;">View Details</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row">
        <div class="col-lg-6">
          <img src="static/images/6.jpg" style="width:100%; height:100%;" alt="" srcset="">
        </div>
        <div class="col-lg-6">
          <h5>Mumbai House, Santacruz</h5>
          <p class="fs-6"><i class="fa-light fa-location-dot"></i> Rd Number 5, near BMC High School, Golibar, Santacruz East, Mumbai, Maharashtra 400055
          </p>
          <p class="fs-6">3 km from Mumbai Airport</p>
          <a href="hotels.php" class="btn btn-warning" style="margin-top: 15%;margin-left: 50%;">View Details</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="row">
        <div class="col-lg-6">
          <img src="static/images/Facade.png" style="width:100%; height:100%;" alt="" srcset="">
        </div>
        <div class="col-lg-6">
          <h5>Mumbai House, Juhu</h5>
          <p class="fs-6"><i class="fa-light fa-location-dot"></i> Opposite Juhu Koliwada Bus Stop Mangelwadi, Juhu, Mumbai, Maharashtra 400049
          </p>
          <p class="fs-6">3 km from Mumbai Airport</p>
          <a href="hotels.php" class="btn btn-warning" style="margin-top: 15%;margin-left: 50%;">View Details</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row">
        <div class="col-lg-6">
          <img src="static/images/mj.jpg" style="width:100%; height:100%;" alt="" srcset="">
        </div>
        <div class="col-lg-6">
          <h5>Mumbai House, Airoli</h5>
          <p class="fs-6"><i class="fa-light fa-location-dot"></i> Hotel Mumbai House - Airoli, Navi Mumbai 10th Floor, C-Wing, Reliable Tech Park, Thane Belapur Road, Airoli, Navi Mumbai 400708
          </p>
          <p class="fs-6">3 km from Mumbai Airport</p>
          <a href="hotels.php" class="btn btn-warning" style="margin-top: 15%;margin-left: 50%;">View Details</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-6">
      <div class="row">
        <div class="col-lg-6">
          <img src="static/images/mj.jpg" style="width:100%; height:100%;" alt="" srcset="">
        </div>
        <div class="col-lg-6">
          <h5>Mumbai House, Udaipur</h5>
          <p class="fs-6"><i class="fa-light fa-location-dot"></i> Mumbai House Opposite Big Bazaar, Sukhadia Circle, Udaipur, Rajasthan -313001
          </p>
          <a href="hotels.php" class="btn btn-warning" style="margin-top: 15%;margin-left: 50%;">View Details</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row">
        <div class="col-lg-6">
          <img src="static/images/mj.jpg" style="width:100%; height:100%;" alt="" srcset="">
        </div>
        <div class="col-lg-6">
          <h5>Mumbai House, Indore</h5>
          <p class="fs-6"><i class="fa-light fa-location-dot"></i> Hotel Mumbai House A-34, LIG Colony LIG Square Behind CHL Hospital Indore
          </p>
          <a href="hotels.php" class="btn btn-warning" style="margin-top: 15%;margin-left: 50%;">View Details</a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <h1 class="text-center mb-5 mt-5">Explore Mumbai House</h1>
  <p class="fs-6 mt-4 text-center">Descend into a world that was once the sole preserve of royalty, step onto the soft, white sand beaches at a secluded island or discover<br/> the hidden secrets of mist-draped hills with Taj</p>
</div>
<div class="container-fluid mt-5 mb-5">
  <div class="row">
    <div class="col-sm-3">
      <img src="static/images/beach.jpg"style="width: 106%;height: 100%;margin-left: -12px;" alt="" srcset="">
    </div>
    <div class="col-sm-3 explore">
      <h5>BEACH RETREATS</h5>
      <p class="fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas itaque laudantium nisi tempora sapiente corrupti. Beatae nesciunt aspernatur rerum possimus ab, autem odio ea dolores quibusdam mollitia. Rem, voluptatem repellendus!</p>
      <a href="#" target="_blank" rel="noopener noreferrer">view details</a>
    </div>
    <div class="col-sm-3">
      <img src="static/images/leis.jpg"style="width: 106%;height: 100%;margin-left: -12px;" alt="" srcset="">
    </div>
    <div class="col-sm-3 explore">
      <h5>HILL STATIONS</h5>
      <p class="fs-6">Descend into a world that was once the sole preserve of royalty, step onto the soft, white sand beaches at a secluded island or discover the hidden secrets of mist-draped hills with Taj</p>
      <a href="#" target="_blank" rel="noopener noreferrer">view details</a>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3 explore">
      <h5>ROYAL INDIA</h5>
    <p class="fs-6">Descend into a world that was once the sole preserve of royalty, step onto the soft, white sand beaches at a secluded island or discover the hidden secrets of mist-draped hills with Taj</p>
  <a href="#" target="_blank" rel="noopener noreferrer">view details</a>
    </div>
    <div class="col-sm-3">
      <img src="static/images/hamm.jpg"style="width: 106%;height: 100%;margin-left: -12px;" alt="" srcset="">
    </div>
    <div class="col-sm-3 explore">
      <h5>URBAN GETAWAYS</h5>
    <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus impedit reiciendis commodi? Corporis, quo quod doloremque pariatur fugiat assumenda iure reprehenderit quaerat ad natus optio, enim consequatur distinctio voluptatem quae!</p>
  <a href="#" target="_blank" rel="noopener noreferrer">view details</a>
    </div>
    <div class="col-sm-3">
      <img src="static/images/view.jpg"style="width: 106%;height: 100%;margin-left: -12px;" alt="" srcset="">
    </div>
  </div>
</div>

<div class="container mt-5">
  <h1 class="text-center">OUR ANCILLARY SERVICES</h1>
  <div class="row">
    <div class="col-lg-4">
      <div class="row">
        <img src="static/images/villa.jpg" class="our " alt="" srcset="">
      </div>
      <div class="row">
        <img src="static/images/hamm.jpg" class="our mt-1" alt="" srcset="">
      </div>
    </div>
    <div class="col-lg-8">
      <div class="row">
        <img src="static/images/bora.jpg" class="our " alt="" srcset="">
      </div>
    </div>
  </div>
</div>


<!-- <div class="row">
    <div class="col-lg-4 pt-5 pb-5">
      <div class="shada">
        <img src="" alt="">
        <p class="fs-5">best rate guarantee</p>
        <a href="" class="btn btn-warning">Read More</a>
      </div>
      
    </div>
    <div class="col-lg-8 mt-3 mb-5">
      <h1 class="text-dark text-center">One</h1>
      <p class="fs-4 text-center">Our distinctive guest recognition programme</p>
      <div class="row mt-3 mb-4">
        <div class="col mt-4">
          <p class="text-center">Exclusive member rates</p>
          <p class="text-center">premium Wifi</p>
        </div>
        <div class="col mt-4">
          <p class="text-center">Late check out</p>
          <p class="text-center">Complimentary stays and <br/>upgrades at frequent intervals</p>
        </div>
        <div class="col mt-4">
          <p class="text-center">Savings on dining</p>
          <p class="text-center">24x7 dedicated guest assistance</p>
        </div>
      </div>
      <a href="" class="btn btn-warning text-center"style="margin-left: 23rem;">Read More</a>
      
    </div>
  </div> -->




<?php require('footer.php');
?>