<?php
/*
* IP3 - Group 2
* Website Builder - 2016
*/
?>

@extends('layouts.viewsite')

@section('content')

<body class="pg-home">

  @if($backgroundImageUrl != '')
  <div id="background-wrapper" style="background-image: url('{{$backgroundImageUrl}}')">
  </div>
  @endif


  <div id="page" >


    <div id="content" class="homeContent">

      <div id="snsContainer">
        <ul>
            @if($social_facebook_str  != '')
              <li><a href="http://www.facebook.com/{{ $social_facebook_str }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
            @endif

            @if($social_twitter_str  != '')
              <li><a href="https://twitter.com/{{ $social_twitter_str }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
            @endif
        </ul>
      </div>
     <div class="outerCell">
        <div class="innerCell">

          @if($logoUrl != '')
              <div id="logo">
                <img src="{{$logoUrl}}" />
              </div>
          @endif


        <div id="info">
            @if($siteData->title != '')
            <div id="title">
              {{ $siteData->title }}
            </div>
            @endif

            @if($siteData->description != '')
            <div id="description">
              {{ $siteData->description }}
            </div>
            @endif
        </div>

        </div>
     </div>


     @if($purchase_itunes_str != '' || $purchase_apple_str != '')
          <div id="buyLinks">
            <p>Buy Now Via</p>
            @if($purchase_itunes_str != '')
            <p><a href="{{ $purchase_itunes_str }}" target="_blank">ITUNES</a>
            @endif

            @if($purchase_apple_str != '')
            <a href="https://itunes.apple.com/gb/artist/{{$purchase_apple_str }}" target="_blank">APPLE</a>
            @endif

            </p>
          </div>
      @endif

    </div>




  </div><!-- /#page -->




















    <!-- <div class="container">
        <div class="content">

                <div id = "nav">
                  <h2>SOCIAL</h2>
                  <ul>
                                <li><a href="{{ $social_facebook_str }}">Facebook</a></li>
                                <li><a href="{{ $social_twitter_str }}">Twitter</a></li>
                            </ul>
                </div>

                <h2>{{ $siteData->title }}</h2>
                <h2>{{ $siteData->description }}</h2> -->
                <!-- <h2>{{ $social_facebook_str }}</h2>
                <h2>{{ $social_twitter_str }}</h2> -->
                <!-- <h2>{{ $purchase_apple_str }}</h2>
                <h2>{{ $purchase_itunes_str }}</h2>

                @if($backgroundImageUrl != '')
                <div id = "background">
                  <img src="{{$backgroundImageUrl}}" />
                </div>
                @endif
                @if($logoUrl != '')
                <div id = "logo">
                  <img src="{{$logoUrl}}" />
                </div>
                @endif


        </div>
    </div> -->
@stop
