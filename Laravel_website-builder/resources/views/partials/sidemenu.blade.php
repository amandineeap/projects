<?php
/*
* IP3 - Group 2
* Website Builder - 2016
*/
?>

<div id="sidemenu">

  <img src="/images/me.jpg">
  <p>Hi, {{ Auth::user()->name }}!</p>

  <nav class="navbar navbar-default">
     <div class="navbar-header">
      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <div id="auth">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <a href="{{ url('/login') }}">Login</a>
              <a href="{{ url('/register') }}">Register</a>
          @else
              <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a>
          @endif
        </div>

        <ul class="nav navbar-nav">
          <li><span class="fa fa-cog"></span><a href="/editSiteSettings"> Settings</a></li>
          <li><span class="fa fa-info"></span><a href="/editSiteInfos"> Site Information</a></li>
          <li><span class="fa fa-paint-brush"></span><a href="/editSiteAppearance"> Appearance</a></li>
          <li><span class="fa fa-share-alt"></span><a href="/editSiteSocials"> Socials</a></li>
          <li><span class="fa fa-shopping-cart"></span><a href="/editSitePurchases"> Purchase</a></li>
          <li><span class="fa fa-youtube"></span><a href="/editYoutube"> Youtube</a></li>
          <li><span class="fa fa-eye"></span><a href="/viewSite" target="_blank"> View Site</a></li>

    </div>

</nav>


  <ul>

  </ul>

</div>
