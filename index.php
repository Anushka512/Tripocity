<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style_tripocity.css">
  <link rel="stylesheet" type="text/css" href="assets/css/season.css">
  <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
  <title>Tripocity</title>
</head>

<body>
  <header class="p-3" style="color: black">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <div id="headerpage" class="header">
        <table style="width: 100%; margin-bottom: 5px">
          <tbody>
            <tr>
              <td>
                <div style="
                      clear: both;
                      float: left;
                      width: 230px;
                      margin-top: 15px;
                      margin-left: 20px;
                    ">
                  <a><img src="https://img.icons8.com/bubbles/50/000000/airport.png" alt="Tripocity Logo" /></a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <ul class="nav col-12 col-lg-auto me-lg-auto ms-a">
        <a class="navbar-brand text-primary ms-auto" href="#">Tripocity</a>
        <li>
          <a href="index.php" class="nav-link px-2 text-black">Home</a>
        </li>
        <li>
          <a href="about.php" class="nav-link px-2 text-black">About us</a>
        </li>

        <li>
          <a href="hotels.php" class="nav-link px-2 text-black">Hotels</a>
        </li>
        <li>
          <a href="TripocityReviews.php" class="nav-link px-2 text-black">Reviews</a>
        </li>
      </ul>
<!-- lohin -->
      <div class="text-end">
        <button class="login_signup"><a style="color: inherit; text-decoration: inherit;" href="login">Login / Sign-up</a></button>

      </div>
  </header>

  <section class="hero">
    <div class="container-fluid hero_container">
    
      <div class="main_form">

        <!-- <form action="hotels-api.php" method="post">             -->
        <div class="form_content">
        <form method="post" onsubmit="return redirect()" class= "d-flex flex-row justify-content-between align-items-center" >
          <input class = "form-control" type="text" id="loc_name" required style = "border-radius: 50px;width: 77%;margin: 0px;" placeholder = "search destination...">
          <input class = "form-control" type="submit" value="Search" style = "width: 21%;border-radius: 50px;background-color:purple;"> 
        </form>
          <p class="or_btn">OR</p>
          <a style=" text-decoration:none;text-align: center;line-height: 30px; background: transparent;" href="seasons.php">Search by season</a>
          <!-- <button class="search_btn_season" type="button2">Search by season<a href="seasons.php"></a></button> -->
          <!-- <button class="search-btn bg-light" type="button3">Trending<a href="http://127.0.0.1:5500/letsTrip.html"></a></button>
              <button class="search-btn bg-light active" type="button4">Lets Trip<a href="C:\Users\asus\OneDrive\Desktop\tripocity\images\letsTrip.html"></a></button> -->
        </div>
       
      </div>
    </div>
  </section>


  <!-- //api -->
  <script type="text/javascript" language="javascript">
    function redirect() {
      var loc = document.getElementById("loc_name").value
      window.location.assign("location.php?q=" + loc);
      return false;
    }
  </script>
  
  <!-- api -->



  <div class="container" style="width: 100%; border-bottom: 2px solid black">
    <div id="covidSection" class="covidSection page_blogHome">
      <h4 class="covidSection_heading">Our Commitment to Safe Holidays</h4>
      <div class="">
        <p class="covidSection_description">
          We are actively working with our Holiday Partners to maintain the
          safety measures for providing you a risk free vacation.
        </p>
        <div class="covidSection_cardList">
          <div class="covidCard_wrapper">
            <div class="covidCard">
              <div class="covidCard_img">
                <img src="https://img.traveltriangle.com/experiment/assests/Covid-safe-packages-illustrations1.png?tr=w-238,h-120" alt="covid image" />
              </div>
              <h4 class="covidCard_title">Availability of Protection Gear</h4>
              <p class="covidCard_description">
                Ensuring availability of sanitizers, masks &amp; gloves during
                commute and at hotels
              </p>
            </div>
          </div>
          <div class="covidCard_wrapper">
            <div class="covidCard">
              <div class="covidCard_img">
                <img src="https://img.traveltriangle.com/experiment/assests/Covid-safe-packages-illustrations2.png?tr=w-238,h-120" alt="covid image" />
              </div>
              <h4 class="covidCard_title">Sanitized Premises</h4>
              <p class="covidCard_description">
                Thoroughly sanitized commute Vehicles, Hotel rooms and
                premises
              </p>
            </div>
          </div>
          <div class="covidCard_wrapper">
            <div class="covidCard">
              <div class="covidCard_img">
                <img src="https://img.traveltriangle.com/experiment/assests/Covid-safe-packages-illustrations3.png?tr=w-238,h-120" alt="covid image" />
              </div>
              <h4 class="covidCard_title">Social Distancing Measures</h4>
              <p class="covidCard_description">
                Maintaining social distancing measures at hotel premises like
                restaurants, bars, lobby areas, etc
              </p>
            </div>
          </div>
          <div class="covidCard_wrapper">
            <div class="covidCard">
              <div class="covidCard_img">
                <img src="https://img.traveltriangle.com/experiment/assests/Covid-safe-packages-illustrations4.png?tr=w-238,h-120" alt="covid image" />
              </div>
              <h4 class="covidCard_title">Regular Temperature Checks</h4>
              <p class="covidCard_description">
                Regular screening of Hotel Staff, Guests, Drivers and Guides
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="Heading">
    <h3>Trending Trips</h3>
  </div>
  <section_content>
    <div class="container-fluid my-4">
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="
                display: flex;
                justify-content: center;
                position: absolute;
                background-size: cover;
                background-image: url(https://www.holidify.com/images/cmsuploads/compressed/433_20190919164225.jpg);
                background-repeat: no-repeat;
              ">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 style="font-size: x-large; font-weight: 900; color: brown">
                Trending
              </h3>

              <div class="div" style="position: absolute; bottom: 0">
                <h3 class="mb-0">Jabalpur</h3>
                <p class="card-text mb-auto" style="font-weight: 700; color: aliceblue">
                  <i>
                    Bhedaghat is a town and a nagar panchayat in Jabalpur
                    district in the state of Madhya Pradesh, India. <br />
                    It is situated by the side of river Narmada and is
                    approximately 20 km from Jabalpur city. Bhedaghat is
                    famous for the high marble rocks making a valley through
                    which river Narmada flows. <br />
                    The place also has a beautiful waterfall, known as
                    Dhuandhar Falls (literally meaning a stream of smoke,
                    because of its appearance).
                  </i>
                </p>
                <a href="jabalpur.html" class="stretched-link">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="
                display: flex;
                justify-content: center;
                position: absolute;
                background-size: cover;
                background-image: url(https://th.bing.com/th/id/R.87d35777af2c1f1ad2f62c86ee7e5dbb?rik=WsQdfNsGLfsa0A&riu=http%3a%2f%2fwww.themysteriousindia.net%2fwp-content%2fuploads%2fThe-Sanchi-Stupa-1.jpg&ehk=nQ%2bep0lo1LhJbwG5ciwhAgXcefrlM62iNr7v4aF1njg%3d&risl=&pid=ImgRaw&r=0);
                background-repeat: no-repeat;
              ">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 style="font-size: x-large; font-weight: 900; color: brown">
                Trending
              </h3>

              <div class="div" style="position: absolute; bottom: 0">
                <h3 class="mb-0">Sanchi</h3>
                <p class="mb-auto" style="font-weight: 700; color: aliceblue">
                  The Great Stupa at Sanchi is one of the oldest stone
                  structures in India, and an important monument of Indian
                  Architecture.[1] It was originally commissioned by the
                  Mauryan emperor Ashoka the Great in the 3rd century BCE. Its
                  nucleus was a simple hemispherical brick structure built
                  over the relics of the Buddha. It was crowned by the
                  'chhatra', a parasol-like structure symbolising high rank,
                  which was intended to honour and shelter the relics.
                </p>

                <p>
                  <a href="sanchi.php" class="stretched-link">Read More</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="
                display: flex;
                justify-content: center;
                position: absolute;
                background-size: cover;
                background-image: url(https://images.thrillophilia.com/image/upload/s--eLaLZMy7--/c_fill,g_auto,h_600,q_auto,w_975/f_auto,fl_strip_profile/v1/images/photos/000/179/369/original/1573883823_shutterstock_1507029020.jpg.jpg);
                background-repeat: no-repeat;
              ">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 style="font-size: x-large; font-weight: 900; color: brown">
                Trending
              </h3>
              <div class="div" style="position: absolute; bottom: 0">
                <h3 class="mb-0">Ujjain</h3>
                <p class="card-text mb-auto" style="font-weight: 700; color: aliceblue">
                  An ancient city situated on the eastern bank of the Shipra
                  River, Ujjain was the most prominent city on the Malwa
                  plateau of central India for much of its history. It emerged
                  as the political centre of central India around 600 BCE. It
                  was the capital of the ancient Avanti kingdom, one of the
                  sixteen mahajanapadas.
                </p>
                <a href="Ujjain.php" class="stretched-link">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="
                display: flex;
                justify-content: center;
                position: absolute;
                background-size: cover;
                background-image: url(https://th.bing.com/th/id/OIP.aDd_k9uQp1pvdDwI_LBcjQHaFA?w=249&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7);
                background-repeat: no-repeat;
              ">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 style="font-size: x-large; font-weight: 900; color: brown">
                Trending
              </h3>

              <div class="div" style="position: absolute; bottom: 0">
                <h3 class="mb-0">Gwalior</h3>
                <p class="card-text mb-auto" style="font-weight: 700; color: aliceblue">
                  Gwalior was the winter capital of the state of Madhya Bharat
                  which later became a part of the larger state of Madhya
                  Pradesh. Prior to Indian independence on 15 August 1947,
                  Gwalior remained a princely state of the British Raj with
                  the Scindia as the local rulers. High rocky hills surround
                  the city from all sides, on the north it just forms the
                  border of the Ganga- Yamuna Drainage Basin.
                </p>
                <a href="Gwalior.php" class="stretched-link">Read More</a>
              </div>
            </div>
            <div class="col d-none d-lg-block">
              <div class="card">
                <img src="gwalior.jpg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section_content>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <p class="text-center">
          <a class="btn btn-primary" style="width: 100%" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Why Tripocity ???
          </a>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            Planning every single trip needs answers to a number of questions.
            Tripocity is a trip planner website which will provide you all the
            details about a particular city on the basis of city name and
            season also. Tripocity is attempting to collect all the
            information that you will ever need to plan your trip - from when,
            where and how, to more hidden gems in every destination, Tripocity
            is the one-stop solution to all your travel planning needs.
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid contact_container">
    <div class="row">
      <div class="col-md-12">
        <div class="card border-dark my-3 text-center ">
          <div class="card-header bg-light ">Contact Us</div>
          <div class="container-fluid">
            <form action="action_page.php">
              <br>
              <label for="fname">Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your full name....">

              <label for="lname">Email Id</label>
              <input type="text" id="lname" name="lastname" placeholder="Your mail id.....">

              <label for="lname">Phone Number</label>
              <input type="text" id="lname" name="lastname" placeholder="Your mobile number....">

              <label for="subject">Message</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

              <input type="submit" value="Submit">

            </form>
          </div>
          <br>
          <div class="box bg-light">

            <a href="https://www.facebook.com/"><img src="https://img.icons8.com/cute-clipart/64/000000/facebook-new.png" /></a>
            <span style="width:30px;display:inline-block"></span>
            <a href="https://www.instagram.com/"><img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png" /></a>
            <span style="width:30px;display:inline-block"></span>
            <a href="https://twitter.com/?lang=en"><img src="https://img.icons8.com/cute-clipart/64/000000/twitter.png" /></a>
            <span style="width:30px;display:inline-block"></span>
            <a href="https://in.linkedin.com/"><img src="https://img.icons8.com/cute-clipart/64/000000/linkedin.png" /></a>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>

  <footer class="blog-footer text-center">
    <p>A Trip Planner<a href="..">Tripocity</a> by <a href="...">@Yav</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>

    <div class="row">
      <div class="col-sm-7">
        <div class="footer-item">
          <div class="col-sm-12">
            <p class="copyright">
              <i class="fa fa-copyright" aria-hidden="true"></i> Copyright
              2021 YAV All Right Reserved. |
              <a href="disclaimer.php" style="text-decoration: none">Disclaimer |
              </a>
              <a href="privacy-policy.php" style="text-decoration: none">Privacy Policy</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>