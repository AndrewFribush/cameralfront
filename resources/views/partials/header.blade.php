    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('index') }}">CAMERAL</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="{{ route('index') }}">HOME</a></li>
            <li><a href="{{ route('about') }}">ABOUT</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
              <ul class="dropdown-menu">
<!--                 <li><a href="{{ route('who') }}">Who We Are</a></li>
                <li><a href="{{ route('why') }}">Why We Matter</a></li>
 -->                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('hiramrevels') }}">The Hiram Revels Award</a></li>
              </ul>
            </li>
            <li><a href="{{ route('contact') }}">CONTACT</a></li>
<!--             <li><a href="{{ route('signup') }}">SIGN UP</a></li>
            <li><a href="{{ route('login') }}">USER SIGN IN</a></li>
 -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- *****************************************************************************************************************
     HEADERWRAP
     ***************************************************************************************************************** -->
