
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles.css">
    <title>BitsPlease</title>
</head>
<body>
  
        <nav>
            <div class="mobileview">

            <div class="menu">
                <i class="fas fa-bars"></i>
            </div>
        
        <div class="sidenav">
        <ul>
        <li><a href="#">BitPlease</a></li>
        <li><a href="#">Join us</a></li>
        <li><a href="#">Sign in</a></li>
        <li><a href="#">Product Management</a></li>
        <li><a href="#">Product Design</a></li>
        <li><a href="#">UI/UX design</a></li>
        <li><a href="#">Front-End Development</a></li>
        <li><a href="#">Back-End Development</a></li>
    </ul>
      </div>
    </div>


      <div class="desktopview">
            <ul>
                <div class="bitpls">
                <li>
                    <h1 style="color: #0938B1;">Bits<span style="color: #2f52ac; font-weight: normal">Please</span></h1>
                </li>
            </div>
            
                <div class="right">
              <a href="" class="fg">FAQ</a>
              <a href="{{ route('register-user') }}"> <button>Join us</button></a>
            </div>
            </ul>
        </div>

        </nav>
    
<!-- =========nav end============== -->
<div class="mobileimgcontainer">
    <img src="{{asset('/image/image.png')}}" alt="">
</div>

    <div class="container">
        <div class="container-text">
            <h2>
                Transition into the world of IT easily with Us.
            </h2>
            <p class="text-p">
                We have a step-by-step guide, dedicated mentors, curious learners and resources to help you achieve your goals.
            </p>
            
       <div class="joincontainer">

       <div class="sig">
        <a href="{{ route('login') }}" > sign in</a></div>

           <div class="reg">
                <a href="{{ route('register-user') }}">join us now</a>
            </div>

        </div>
            

            <div class="chat">
              <div class="contentimg">
                  <img src="{{asset('/image/group.png')}}" alt="">
              </div>
                <p>We know you want to chat, what is it about?</p>
        </div>

    </div>


    <div class="container-img">
            <div class="img-group">
                <img src="HeroSection.png" alt="">
            </div>
            <div class="imgcontainer">
            <img src="{{asset('/image/image.png')}}" alt="">
            </div>
        </div>

</div>


</body>
</html>
