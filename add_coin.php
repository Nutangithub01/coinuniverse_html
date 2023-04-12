<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Coin Univerze</title>
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
  </head>
  <body>
  <header class="sub-header">
    <img src="images/bannerrobot.png" class="img-fluid bannerrobot vert-move">
    <?php include "nav.php"?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-7 mx-auto">
          <div class="banner-caption-add-coin">
            <h1 data-aos="fade-up" data-aos-duration="3000"><span>Add Your Crypto Coin to</span> Coin Univerze</h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="Coin-Hosting-Req">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <img src="images/hostingImg.png" class="img-fluid" data-aos="zoom-in" data-aos-duration="3000">
        </div>
        <div class="col-md-5">
          <div class="HotReq" data-aos="fade-up" data-aos-duration="2000">
            <h1>Coin Hosting Request</h1>
            <p>
              Coin hosting on the CoinPayments platform is the ideal way to increase the number of users of your coin. Our hosted wallets allow users to store, send, and receive your coin and our custom APIs and plugins allow businesses to easily accept payments in your coin. With over 2,904,500 vendors across 182 countries, it's only a matter of time before the adoption of your coin starts to grow.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <section class="Coin-Hosting-Pay">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-6 offset-lg-1" data-aos="fade-up" data-aos-duration="2000">
          <h1>
            Coin Hosting on the CoinPayments Platform Includes:
          </h1>
          <div class="CH-pay">
            <img src="images/bulletpoinPlanet.png" class="img-fluid">
            <h3>Initial Setup, Hosting,<br> Maintenance & Updates</h3>
          </div>
          <div class="CH-pay">
            <img src="images/bulletpoinPlanet.png" class="img-fluid">
            <h3>Marketing Package:</h3>
          </div>
          <ul>
            <li>Listing on our Supported Coins page</li>
            <li>Blog post about your coin</li>
            <li>Tweet to our followers</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="Requirments">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-6">
          <h1>Requirments</h1>
          <ul>
            <li data-aos="fade-up" data-aos-duration="100"><span> 01)</span>  Fork or using same RPC interface of a coin we currently support(see supported coins here)</li>
            <li data-aos="fade-up" data-aos-duration="500"><span> 02)</span>  Listed on an exchange with APIs (we need to pull rates from somewhere.) This must be a 3rd party public exchange, not one run by the coin developer(s) or solely an on-chain DEX.</li>
            <li data-aos="fade-up" data-aos-duration="1000"><span> 03)</span>  Provide ongoing advanced notifications about any future updates/forks/swaps/airdrops</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <ul>
            <li data-aos="fade-up" data-aos-duration="2000"><span> 04)</span>  Pay an Integration fee fo $10,000.00 for the first year. We require the minimum average commercial payments volume of your coin to be above $5,000/month. If you do not meet this monthly minimum volume requirement, then we will charge an additional payment of $10,000.00 for each additional year of hosting your coin.</li>
            <li data-aos="fade-up" data-aos-duration="3000"><span> 05)</span>  If you are an ERC20 token we will require a separate account funded with 10 ETH to cover gas fees to forward payments</li>
          </ul>
        </div>
      </div>
      
    </div>
  </section>
  <section class="SubmitRequest">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-5 offset-lg-1">
          <div class="S-Req" data-aos="zoom-in" data-aos-duration="3000">
            <h3>Submit Request <br>to Add Your Coin</h3>
            <form>
              <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="addon-wrapping">
                  <img src="images/profile.svg" class="img-fluid">
                </span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
              </div>
              <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="addon-wrapping">
                  <img src="images/email.svg" class="img-fluid">
                </span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
              </div>
              <div class="row">
                <div class="col mb-3">
                  <input type="text" class="form-control" placeholder="Coin Ticker Symbol" aria-label="First name">
                </div>
                <div class="col mb-3">
                  <input type="text" class="form-control" placeholder="Coin Name" aria-label="Last name">
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <input type="text" class="form-control" placeholder="Coin Website" aria-label="First name">
                </div>
                <div class="col mb-3">
                  <input type="text" class="form-control" placeholder="Coin Algorithm or ERC20" aria-label="Last name">
                </div>
              </div>
              <button class="btn btn-getStarted">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php include "footer.php"?>