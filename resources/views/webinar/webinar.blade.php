@extends('layouts.main')

@section('contain')
<header>
    <div style="background-image: url('/Assets/20220728_194108_0000.png');background-size: cover; background-repeat: no-repeat">
      <div class="section-header">
        <div class="page-padding">
          <div class="container-large">
            <div class="padding-vertical padding-large is-custom-padding">
              <div class="w-layout-grid homepage-header_component">
                <div id="w-node-c3733106-a61e-156e-654f-c21c9b4597c1-2897c137" class="homepage-header_content-wrapper">
                  <div class="homepage-header_content">
                    <div data-w-id="5fb4b4db-d69c-5d88-8c1a-2cd78f94baf3" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_heading-wrapper">
                      <h1 class="homepage_header_heading" style="padding-top: 20%">{{ $homepage[2]['judul_hitam'] }}<div><span style="background-color : #ffb703; border-radius : 20px"class="heading-highlight"> {{ $homepage[2]['judul_putih'] }}</span></div></h1>
                    </div>
                    <h1 class="homepage_header_heading" style="font-size: 200%; margin-top:-3%">Via<img src="/Assets/zoom.png" alt="zoom" style="max-width:19%; margin-left: 2%;"></h1>
                    <div data-w-id="c3733106-a61e-156e-654f-c21c9b4597c5" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_text-wrapper">
                      <div class="homepage_header-text">{{ $homepage[2]->desk }}</div>
                    </div>
                    <div data-w-id="c3733106-a61e-156e-654f-c21c9b4597c8" class="margin-top margin-medium is-custom-margin"><a href="#our-programs" data-w-id="c3733106-a61e-156e-654f-c21c9b4597c9" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0); font-size: 130%; margin-left:0%" class="button_program w-button">{{ $homepage[2]['button'] }}</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </header>

@include('webinar.webinar2')
@include('webinar.slide2')
@include('home8_2')
@endsection