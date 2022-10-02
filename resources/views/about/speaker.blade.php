@extends('about.main')

@section('contain')
<header>
    <section id = "Head">
        <div style="background-image: url('/Assets/2_20220908_160225_0001.png'); background-size: cover; background-position:center; padding: 190px 0px;">
            <div class="section-header" style = "padding-top: 8rem; padding-bottom: 6.5rem">
                <div class="page-padding">
                  <div class="container-large">
                    <div class="padding-vertical padding-large is-custom-padding">
                      <div class="w-layout-grid homepage-header_component" style="grid-template-columns: 6fr 1fr;
                      ">
                        <div id="w-node-c3733106-a61e-156e-654f-c21c9b4597c1-2897c137" class="homepage-header_content-wrapper" style="max-width: 100%;">
                          <div class="homepage-header_content" style="max-width: 100%;">
                            <div data-w-id="5fb4b4db-d69c-5d88-8c1a-2cd78f94baf3" style="max-width: 100%; opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_heading-wrapper">
                              <div class="homepage_header_heading"
                              style="max-width: 100%; line-height: 80px; font-size: 85px; font-family: 'MontserratSemiBold';bottom: -230px;">
                                <span style="color:white">Get to Know<br>Our Speakers!</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </div>
        </section>

        <section id = "Primary">

                                <head>
                                    <!-- Link Swiper's CSS -->
                                  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

                                  <!-- Demo styles -->
                                  <style>
                                html,
                                body {
                                  position: relative;
                                  height: 100%;
                                }

                                body {
                                  background: #eee;
                                  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                                  font-size: 14px;
                                  color: #000;
                                  margin: 0;
                                  padding: 0;
                                }

                                .swiper-container {
                                  overflow: hidden;
                                  width: 100%;
                                  height: 100%;
                                  background-image: url("/Assets/20220826_005223_0000.png");
                                  background-size: 100%;
                                }

                                .swiper-slide {
                                  cursor: pointer;
                                  text-align: center;
                                  font-size: 18px;
                                  background: transparent;
                                  /* Center slide text vertically */
                                  display: -webkit-box;
                                  display: -ms-flexbox;
                                  display: -webkit-flex;
                                  display: flex;
                                  wrap: wrap;
                                  flex-direction: column;
                                  -webkit-box-pack: center;
                                  -ms-flex-pack: center;
                                  -webkit-justify-content: center;
                                  justify-content: center;
                                  -webkit-box-align: center;
                                  -ms-flex-align: center;
                                  -webkit-align-items: center;
                                  align-items: center;
                                }

                                .swiper-slide {
                                  filter: blur(0px);
                                  color: transparent;
                                  z-index: -1;

                                  filter:opacity(0.5);
                                }

                                .swiper-slide-active {
                                  filter: blur(0);
                                  color: black;
                                  z-index: 1;
                                  margin:0;
                                  width: 100%;
                                }

                                .testosotto {
                                  margin-top: -15px;
                                  width: 100%;
                                  font-family: 'Poppins', sans-serif;
                                  font-style: normal;
                                  font-weight: 600;
                                  font-size: 15px;
                                  line-height: 22px;
                                  text-align: center;

                                }

                                  </style>
                                </head>

                                <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper -->
    <div class="swiper-container" style="padding-bottom: 5%; padding-top: 5%;">
        <h2 style="color: black; text-align:center; font-size:46px">Creative Content Dapartment</h2>
      <div class="swiper-wrapper">

        @foreach ($our->where('speaker_id', 1) as $our1 )
        <div class="swiper-slide"><img style="max-height: 560px; width:auto; margin-bottom:-5%;" src=" @if (isset($our1->img))
            {{ '/storage/' . $our1->img }}
            @endif" />
          <div class="testosotto" style="font-weight: 400; font-size: 20px;">
            <div style="font-family: 'MontserratSemiBold';font-size: 20px;"> @if (isset($our1->nama))
                {!! $our1->nama !!}
            @endif
        </div><br><br>
            @if (isset($our1->text))
            {!! $our1->text !!}
            @endif
        </div>
        </div>
        @endforeach


      </div>
      <!-- Add Pagination -->
      <!-- Add Arrows -->
      <!--<div class="swiper-button-next"></div> -->
      <!--<div class="swiper-button-prev"></div> -->
    </div>


    <!-- Swiper -->
    <div class="swiper-container" style="padding-bottom: 5%; padding-top: 5%; background-image:url('/Assets/20220826_005223_0001.png')">
        <h2 style="color: black; text-align:center; font-size:46px">Nucleus</h2>
      <div class="swiper-wrapper">
        @foreach ($our->where('speaker_id', 2) as $our2 )
        <div class="swiper-slide"><img style="max-height: 560px; width:auto; margin-bottom:-5%;" src=" @if (isset($our2->img))
            {{ '/storage/' . $our2->img }}
            @endif" />
          <div class="testosotto" style="font-weight: 400; font-size: 20px;">
            <div style="font-family: 'MontserratSemiBold';font-size: 20px;"> @if (isset($our2->nama))
                {!! $our2->nama !!}
            @endif
        </div><br><br>
            @if (isset($our2->text))
            {!! $our2->text !!}
            @endif
        </div>
        </div>
        @endforeach
          </div>


      </div>
      <!-- Add Pagination -->
      <!-- Add Arrows -->
      <!--<div class="swiper-button-next"></div> -->
      <!--<div class="swiper-button-prev"></div> -->
    </div>

    <div class="swiper-container" style="padding-bottom: 5%; padding-top: 5%; background-image:url('/Assets/20220826_005223_0002.png')">
        <h2 style="color: black; text-align:center; font-size:46px">DentsArmy Upgrading Class</h2>
      <div class="swiper-wrapper">
        @foreach ($our->where('speaker_id', 3) as $our3 )
        <div class="swiper-slide"><img style="max-height: 560px; width:auto; margin-bottom:-5%;" src=" @if (isset($our3->img))
            {{ '/storage/' . $our3->img }}
            @endif" />
          <div class="testosotto" style="font-weight: 400; font-size: 20px;">
            <div style="font-family: 'MontserratSemiBold';font-size: 20px;"> @if (isset($our3->nama))
                {!! $our3->nama !!}
            @endif
        </div><br><br>
            @if (isset($our3->text))
            {!! $our3->text !!}
            @endif
        </div>
        </div>
        @endforeach
          </div>


      </div>
      <!-- Add Pagination -->
      <!-- Add Arrows -->
      <!--<div class="swiper-button-next"></div> -->
      <!--<div class="swiper-button-prev"></div> -->
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
  slidesPerView: 3,
  centeredSlides: true,
  spaceBetween: -1000,
  slidesPerGroup: 1,
  loop: false,
  loopFillGroupWithBlank: false,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '',
    prevEl: '',
  },
});
    </script>
        </section>

</header>
@endsection
