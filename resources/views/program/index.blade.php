@extends('layouts.main')

@section('contain')
<header>
  <div style="background-image: url('@if (isset($page->Gambar->where('background', 1)->first()->img)){{ $page->Gambar->where('background', 1)->first()->img }}@endif'); background-size: cover;background-repeat: no-repeat">
    <div class="section-header">
      <div class="page-padding">
        <div class="container-large">
          <div class="padding-vertical padding-large is-custom-padding">
            <div class="w-layout-grid homepage-header_component">
              <div id="w-node-c3733106-a61e-156e-654f-c21c9b4597c1-2897c137" class="homepage-header_content-wrapper">
                <div class="homepage-header_content">
                  <div data-w-id="5fb4b4db-d69c-5d88-8c1a-2cd78f94baf3" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_heading-wrapper">
                    <h1 class="homepage_header_heading" style="padding-top: 20%">@if(isset($page->Text[0]->text)){{ $page->Text[0]->text }}@endif<div>
                        <span style="background-color : #ffb703; border-radius : 20px"class="heading-highlight">
                            @if(isset( $page->Text[1]->text )){{ $page->Text[1]->text }}@endif
                        </span></div></h1>
                  </div>
                  <h1 class="homepage_header_heading" style="font-size: 200%; margin-top:-3%">Via<img src="/Assets/zoom.png" alt="zoom" style="max-width:19%; margin-left: 2%;"></h1>
                  <div data-w-id="c3733106-a61e-156e-654f-c21c9b4597c5" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_text-wrapper">
                    <div class="homepage_header-text">
                        @if(isset($page->Text[2]->text)){!! $page->Text[2]->text !!}@endif
                    </div>
                  </div>
                  <div data-w-id="c3733106-a61e-156e-654f-c21c9b4597c8" class="margin-top margin-medium is-custom-margin"><a href="#our-programs" data-w-id="c3733106-a61e-156e-654f-c21c9b4597c9" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0); font-size: 130%; margin-left:0%" class="button_program w-button">
                    @if(isset($page->Text[3]->text)){{ $page->Text[3]->text }}@endif
                </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </header>

  <div class="background-webinar">
    <h1 class="homepage_header_heading text-center" style="padding: 1%; font-size: 230%">@if(isset($page->Text[4]->text)){{ $page->Text[4]->text }}@endif</h1>
    <img style ="height:900px" class="img-fluid mx-auto d-block" src="@if (isset($page->Gambar->where('background', 0)->skip(1)->first()->img)){{ $page->Gambar->where('background', 0)->skip(1)->first()->img }}@endif" alt="webinar" class="rounded mx-auto d-block">
    <h1 class="homepage_header_heading text-center" style="padding-top: 2%; padding-bottom: 3%; font-size: 230%">@if(isset($page->Text[5]->text)){{ $page->Text[5]->text }}@endif</h1>
</div>

<div style="background-image: url('@if (isset($page->Gambar->where('background', 1)->skip(1)->first()->img)){{ $page->Gambar->where('background', 1)->skip(1)->first()->img }}@endif'); padding: 10%; background-size: cover;background-repeat: no-repeat">
    <h1 class="homepage_header_heading text-center" style="font-size: 225%; margin-top: -10%; margin-bottom: 3%">@if(isset($page->Text[6]->text)){{ $page->Text[6]->text }}@endif</h1>

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style ="height:600px" src="@if(isset($page->Gambar->where('background', 0)[1]->img )){{ $page->Gambar->where('background', 0)[1]->img }}@endif" class="img-fluid mx-auto d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img style ="height:600px" src="@if(isset($page->Gambar->where('background', 0)[1]->img )){{ $page->Gambar->where('background', 0)[1]->img }}@endif" class="img-fluid mx-auto d-block" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <h1 class="homepage_header_heading text-center" style="font-size: 225%; margin-top: 2%; margin-bottom: -5%">DentsLearn: HandsOn 13<br>Simple Dental Wire</h1>
  </div>
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace()
  </script>

<div class="section-cta">
    <div class="page-padding">
      <div class="container-large">
        <div class="padding-vertical padding-xxhuge cta-homepage">
          <div class="cta_component">
            <div class="margin-bottom margin-large">
              <div class="text-align-center">
                <h2 data-w-id="f83eafeb-31ea-0356-b84d-476b68649693" style="opacity:0" class="cta_heading">Ada Yang Ingin Ditanyakan?<br>Hubungi Kami!</h2>
              </div>
            </div>
            <a href="https://wa.me/000000" data-w-id="48b2d287-b8b5-fe2e-2390-287447e55777" style="opacity:0" class="button-tertiary is-cta-button w-button">Whatsapp Us</a>
            <a href="mailto:LoremIpsum@dolor.sit" data-w-id="48b2d287-b8b5-fe2e-2390-287447e55777" style="opacity:0" class="button-tertiary is-cta-button w-button">Email Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection