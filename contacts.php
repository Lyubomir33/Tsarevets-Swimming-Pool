<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

<section id="sectionAddress" class="section-bg" data-scroll-index="7">
  <div id="backgroundSetup" class="background">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex align-items-center">
          <div class="contact-info">

          <h2 class="contact-title">Локация и Контакти</h2>

          <ul class="contact-info">
              <li>
                <div class="info-left">
                  <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="info-right">
                  <h4>Даниел Стоянов - 0878 687 555</h4>
                </div>
              </li>

              <li>
              <div class="info-left">
                  <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="info-right">
                  <h4> Панайот Паздерков - 0898 579 010</h4>
                </div>
              </li>

              <li>
                <div class="info-left">
                  <i class="fas fa-at"></i>
                </div>
                <div class="info-right">
                  <h4>&nbsp skmp_carevec@abv.bg</h4>
                </div>
              </li>
              <li>
                <div class="info-left">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="info-right">
                  <h4>ул. Бяла Бона 10, гр. Велико Търново</h4>
                </div>
              </li>
            </ul>

           
            <p>Не успяхте да се свържете с нас по телефона? <br> <br>

              Нашият чат е на един клик разстояние от вас! <br> <br>

              Натиснете върху Messenger иконката и ни пишете. <br> <br>

              Ще се свържем с вас при първа възможност!</p>
           
          </div>
         
        </div>
     
        <div id="mapDiv" class="map">
          <iframe id="iframeLocation" class="locationFrame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.9976632541934!2d25.6005263!3d43.062516699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a9267ef2908953%3A0xf479f4e02c57e384!2sul.%20%22Byala%20Bona%22%2010%2C%205000%20g.k.%20Cholakovtsi%2C%20Veliko%20Tarnovo!5e0!3m2!1sen!2sbg!4v1696226521080!5m2!1sen!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <img class="logoMess" src="/images/mess-removebg-preview.png" alt="">
        </div>
        
      </div>
   
    </div>
   
  </div>
</section>

<script>
  const iframeLocation = document.getElementById('iframeLocation');
  const mapDiv = document.getElementById('mapDiv');
  const backgroundSetup = document.getElementById('backgroundSetup');

function resizeIframe() {
  if (window.innerWidth < 1000) {
    iframeLocation.style.display = "none";
    mapDiv.style.display = "flex";
    mapDiv.style.height = "200px";
    backgroundSetup.style.height = "870px"; 

  } else {
    iframeLocation.style.display = "block";
    mapDiv.style.display = "grid";
    mapDiv.style.height = "460px";
    backgroundSetup.style.height = "600px"; 
  }
}


window.addEventListener("resize", resizeIframe);


resizeIframe();

</script>

<style>

  .contact-title {
    display: flex;
    justify-content: center;
    font-size: 30px;
    color: white;
  }

  /* #sectionAddress {
   
  } */

  .locationFrame {
    display: none;
    margin-top: 121px;
    margin-top: 88px;
    width: 660px;
    margin-bottom: 27px;
    
  }

  .background {
   padding: 20px;
    background-color: #212529;
    height: 800px;
  }

  .logoMess {
    border-radius: 15px;
    height: 150px;
    
  }

  .logoMess:hover {
    transform: scale(1.3);
    transition: 0.5s;
  }

  .logoMess:not(:hover) {
    transition: 0.5s;
  }
  
  .map {
    display: none;
    background-color: #212529;
    height: 459px;
    width: 300px;
    flex-direction: row;
    align-items: end;
    justify-content: center;
    align-content: space-around;
    
  }

  

 

  
  .contact-info {
    padding: 0 30px 0px 0;
  }



  .contact-info p {
    color: #ececec;
  }

  ul.contact-info {
    margin-top: 30px;
  }

  ul.contact-info li {
    margin-bottom: 22px;
  }



  
  ul.contact-info li {
    display: flex;
    width: 100%;
  }

  .info-left {
    width: 10%;
  }

  .info-left i {
    width: 30px;
    height: 30px;
    line-height: 30px;
    font-size: 30px;
    color: #ffffff;
  }

  .info-right h4 {
    color: #fff;
    font-size: 15px;
  }

  



  @media only screen and (max-width: 767px) {
    .contact-form {
      padding: 30px;
    }

    .contact-form:before {
      width: 100%;
    }


  }

  @media (min-width: 768px) {
    .locationFrame {
    
    margin-top: 85px;
    height: 354px;
    width: 573px;
    margin-bottom: 27px;
    
  } 

  .map {
    display: grid;
    background-color: #212529;
    height: 459px;
    width: 300px;
    margin-left: 130px;
    flex-direction: row;
    align-items: end;
    justify-content: center;
    align-content: space-around;
    
  } 
  }
</style>