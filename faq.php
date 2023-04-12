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
        <div class="col-md-12 col-lg-8 mx-auto">
          <div class="banner-caption-add-coin">
            <h1 data-aos="fade-up" data-aos-duration="3000"><span>Frequently Asked </span> Questions </h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="FaqSec">
    <div class="container">
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div class="Faq">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item" data-aos="fade-up" data-aos-duration="3000">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   What is Coin Univerze?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Coin Univerze is a crypto payment management software that we provide freely to anyone that wants to manage crypto payments.
                  </div>
                </div>
              </div>
              <div class="accordion-item" data-aos="fade-up" data-aos-duration="2500">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What is the process to register on Coin Univerze?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                   The joining process of Coin Univerze is very simple:
                   <ul>
                      <li>Visit our homepage <a href="https://www.coinuniverze.com/">https://www.coinuniverze.com/</a></li>
                      <li>Click on the SignUp button</li>
                      <li>Fill up the form and boom! You are registered</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Do I need to link my bank account to use Coin Univerze?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                   Yes, in order to take online credit card/debit card transactions in any form, you must have a merchant processor account
                  </div>
                </div>
              </div>
              <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Does Coin Univerze work on mobile devices?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                   Yes! Coin Univerze interface is built as a responsive program and works in any modern web browser that adheres to the standard web formats.
                  </div>
                </div>
              </div>
              <div class="accordion-item" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="accordion-header" id="headingFave">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFave" aria-expanded="false" aria-controls="collapseFave">
                    Does it cost anything to me for receiving money?
                  </button>
                </h2>
                <div id="collapseFave" class="accordion-collapse collapse" aria-labelledby="headingFave" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                   Yes, Every online transaction with a debit or credit card requires a middleman to handle the transaction between you and the credit card company. That’s called the merchant processor. Merchant processors dictate their own fees.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php include "footer.php"?>