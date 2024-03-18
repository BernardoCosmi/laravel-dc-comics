@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- Jumbotron --}}
    <div class="container-fluid hero">
    </div>

    <div class="container ">
        <div class="container my-5 py-3">
            <div class="comics-grid">
                @foreach($comics as $comic)
                    <div class="comic-wrapper">
                        <div class="custom-card">
                            <div class="comic-img-wrapper">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" class="comic-img">
                            </div>
                            <div class="comic-info mt-2">
                                <h6 class="fw-bolder text-uppercase">{{ $comic['series'] }}</h6>
                                {{-- <p>{{ $comic['type'] }}</p>
                                <p>{{ $comic['price'] }}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="load-more-btn-wrapper mt-0 ">
                <button class="custom-btn text-uppercase">Load More</button>
            </div>
        </div>
    </div>
    
    {{-- SEZIONE BLU --}}
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            
            <div class="container bg-primary text-white py-3">
                <div class="d-flex justify-content-center align-items-center flex-wrap gap-3">
                  <!-- Digital Comics Link Card -->
                  <div class="d-flex align-items-center m-2">
                    <img src="/images/buy-comics-digital-comics.png" alt="Digital Comics" class="img-fluid" style="max-height: 60px; max-width: 60px;">
                    <span class="text-uppercase text-nowrap ms-2" style="font-size: smaller;">Digital Comics</span>
                  </div>
                  
                  <!-- DC Merchandise Link Card -->
                  <div class="d-flex align-items-center m-2">
                    <img src="/images/buy-comics-merchandise.png" alt="DC Merchandise" class="img-fluid" style="max-height: 60px; max-width: 60px;">
                    <span class="text-uppercase text-nowrap ms-2" style="font-size: smaller;">DC Merchandise</span>
                  </div>
                  
                  <!-- Subscription Link Card -->
                  <div class="d-flex align-items-center m-2">
                    <img src="/images/buy-comics-subscriptions.png" alt="Subscription" class="img-fluid" style="max-height: 60px; max-width: 60px;">
                    <span class="text-uppercase text-nowrap ms-2" style="font-size: smaller;">Subscription</span>
                  </div>
                  
                  <!-- Comic Shop Locator Link Card -->
                  <div class="d-flex align-items-center m-2">
                    <img src="/images/buy-comics-shop-locator.png" alt="Comic Shop Locator" class="img-fluid" style="max-height: 60px; max-width: 60px;">
                    <span class="text-uppercase text-nowrap ms-2" style="font-size: smaller;">Comic Shop Locator</span>
                  </div>
                  
                  <!-- DC Power Visa Link Card -->
                  <div class="d-flex align-items-center m-2">
                    <img src="/images/buy-dc-power-visa.svg" alt="DC Power Visa" class="img-fluid" style="max-height: 60px; max-width: 60px;">
                    <span class="text-uppercase text-nowrap ms-2" style="font-size: smaller;">DC Power Visa</span>
                  </div>
                </div>
              </div>

        </div>

    </div>


        <div class="container-fluid section-contact-container">
          <div class="contacts-container">
      
            <div class="column-container pt-4">
              <div class="column one mt-1">
                  <h3>dc comics</h3>
                  <ul class="contact-link-list">
                      <a href="">characters</a>
                      <a href="">comics</a>
                      <a href="">movies</a>
                      <a href="">TV</a>
                      <a href="">games</a>
                      <a href="">videos</a>
                      <a href="">news</a>
                  </ul>
                  <h3>shop</h3>
                  <ul>
                      <a href="">shop DC</a>
                      <a href="">shop DC collectibles</a>
                  </ul>
              </div>
              
              <div class="column two">
                  <h3>DC</h3>
                  <ul class="contact-link-list">
                      <li><a href="">terms of use</a></li>
                      <li><a href="">privacy policy(new)</a></li>
                      <li><a href="">ad choices</a></li>
                      <li><a href="">advertising</a></li>
                      <li><a href="">jobs</a></li>
                      <li><a href="">subscription</a></li>
                      <li><a href="">talent workshops</a></li>
                      <li><a href="">CPSC certificates</a></li>
                      <li><a href="">ratings</a></li>
                      <li><a href="">shop help</a></li>
                      <li><a href="">contact us</a></li>
                  </ul>
              </div>
              <div class="column three">
                  <h3>sites</h3>
                  <ul class="contact-link-list">
                      <li><a href="">DC</a></li>
                      <li><a href="">MAD magazine</a></li>
                      <li><a href="">DC kids</a></li>
                      <li><a href="">DC universe</a></li>
                      <li><a href="">DC power visa</a></li>
                  </ul>
              </div>
            </div>
      
            <figure class="m-0 p-0"  style=" max-height:350px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                <img src="/images/dc-logo-bg.png" alt="logo grande" class="m-0 p-0" style="width: 100%; overflow: hidden;">
            </figure>
      
          </div>
        </div>

      




    <style>

    .comics-grid {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
    
    .comic-wrapper {
        padding: 0 15px;
        flex: 0 0 auto;
        width: 16.666667%; /* Equivalent to 'col-md-6' for 6 columns */
    }
    
    .custom-card {
        display: flex;
        flex-direction: column;
        height: 100%;
        margin-bottom: 1.5rem;
    }
    
    .comic-img-wrapper {
        width: 100%;
        padding-top: 100%; /* Aspect ratio 1:1 */
        position: relative;
        overflow: hidden;
    }
    
    .comic-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;

        object-fit: cover;
    }
    
    .comic-info {
        padding: .5rem;
        color: white;
    }
    
    .comic-info h5, .comic-info p {
        margin: .5rem 0;
    }
    
    .load-more-btn-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 1.5rem;
    }
    
    .custom-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: .375rem .75rem;
        border-radius: .25rem;
        cursor: pointer;
    }
    
    .custom-btn:hover {
        background-color: #0056b3;
    }


    /* SECTION CONTACTS */
    .footer-container{
        width: 100%;
        height: 500px;
        background-image: url('../assets/images/footer-bg.jpg');
        display: flex;
        align-items: center;
        justify-content: space-between;
        overflow: hidden;
        }
    .contacts-container{
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    .column-container{
            display: flex;
            gap: 20px;
        }
    .contact-column-title{
            color: white;
            text-transform: uppercase;
            margin-bottom: 5px;
            margin-top: 20px;
        }
    .column >ul{
            display: flex;
            flex-direction: column;
            list-style-type: none;
            padding: 0;
            text-align: left;
        }
     .column > ul> a{
            text-decoration: none;
            text-transform: capitalize;
            font-weight: normal;
            font-size: smaller;
            color: grey;
        }
    </style>

@endsection