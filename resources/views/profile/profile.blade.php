@extends('layouts.main')

@section('contain')
<header>
    <div style="background-image: url('/Assets/20220728_193418_0001.png'); background-size: cover;background-repeat: no-repeat">
      <div class="section-header">
        <div class="page-padding">
          <div class="container-large">
            <div class="padding-vertical padding-large is-custom-padding">
              <div class="w-layout-grid homepage-header_component">
                <div id="w-node-c3733106-a61e-156e-654f-c21c9b4597c1-2897c137" class="homepage-header_content-wrapper">
                  <div class="homepage-header_content">
                    <div data-w-id="5fb4b4db-d69c-5d88-8c1a-2cd78f94baf3" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_heading-wrapper">
                      <h1 class="homepage_header_heading" style="padding-top: 25%">{{ $homepage[4]['judul_hitam'] }}</h1>
                    </div>
                    <div data-w-id="c3733106-a61e-156e-654f-c21c9b4597c5" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_text-wrapper">
                      <div class="homepage_header-text" style="line-height: 120%; margin-top: 12%; font-size: 200%; font-weight:600;">{{ $homepage[4]->desk }}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </header>

@include('profile.desc')
@include('profile.story')
@include('profile.ceo')
@endsection