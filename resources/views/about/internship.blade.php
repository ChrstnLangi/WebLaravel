@extends('about.main')

@section('contain')
<header>
<div style="background-image: url('{{ $judul[0]->Aboutgambar[0]->load('Aboutjudul')->img }}'); background-size: cover; background-position:center; padding-bottom: 150px;">
<div class="section-header" style = "padding-top: 8rem; padding-bottom: 6.5rem">
    <div class="page-padding">
      <div class="container-large">
        <div class="padding-vertical padding-large is-custom-padding">
          <div class="w-layout-grid homepage-header_component" style="grid-template-columns: 6fr 1fr;
          ">
            <div id="w-node-c3733106-a61e-156e-654f-c21c9b4597c1-2897c137" class="homepage-header_content-wrapper" style="max-width: 100%;">
              <div class="homepage-header_content" style="max-width: 100%;">
                <div data-w-id="5fb4b4db-d69c-5d88-8c1a-2cd78f94baf3" style="max-width: 100%; opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_heading-wrapper">
                  <h1 class="homepage_header_heading" style="font-size: 55px; max-width: 100%;"><span style="color:white; font-family: 'MontserratSemiBold';" >{!! $judul[0]->judul !!}</span></h1>
                </div>
                <div data-w-id="c3733106-a61e-156e-654f-c21c9b4597c5" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_text-wrapper">
                  <div class="homepage_header-text"></div>
                </div>
                <div data-w-id="c3733106-a61e-156e-654f-c21c9b4597c8" class="margin-top margin-medium is-custom-margin">
                    <a href="#our-programs"  data-w-id="c3733106-a61e-156e-654f-c21c9b4597c9" style="margin-left:0px; padding: 1rem 5rem;border-radius: 22px;background-color:#ffb703; opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="button is-hero-button w-button">
                        {!! $judul[0]->Aboutdesk[0]->load('Aboutjudul')->text !!}
                    </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<div>
<div class="section-header" style="margin-bottom: -10%;">
    <div class="page-padding" style = "
    width: 100%;
    max-width: 77rem;
    margin-right: auto;
    margin-left: auto;">
        <div class="padding-vertical padding-xhuge">
            <div class="margin-bottom margin-xlarge">
              <div class="text-align-center" style="margin: 0 6%;">
                <h2 class="homepage_header_heading text-center"><span style="color:black">{{ $judul[1]->judul }}</span></h2>
                <div class="homepage_header-text text-center">
                    {{ $judul[1]->Aboutdesk[0]->load('Aboutjudul')->text }}
                  </div>
              </div>
        </div>
      </div>
    </div>
</div>
</div>


<div>
    <div class="section-review" style="background-image: url('{{ $judul[2]->Aboutgambar->load('Aboutjudul')->where('background',1)[0]->img }}'); background-size: cover; background-position:center;">
        <div class="page-padding" style = "
        width: 100%;
        max-width: 77rem;
        margin-right: auto;
        margin-left: auto;">
      <div class="container-large">
        <div class="padding-vertical padding-xhuge">
          <div class="margin-bottom margin-medium">
            <div class="text-align-center">
              <h2 data-w-id="9ffab59e-7706-d2be-ebf0-c06419292ec7" style="opacity:0" class="max-width-mobile">{{ $judul[2]->judul }}
                </h2>
            </div>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @for ($i = 1; $i <= $judul[2]->Aboutgambar->load('Aboutjudul')->where('background',0)->count(); $i++ )
                    <div class="carousel-item @if ($i == 1)
                    active
                    @endif">
                    <div class="container mx-auto" style="margin-left: 15%;">
                        <div class="testimonial1_quote-wrapper-inside" style="right: auto; top: -4%; left:2%;"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c77a5c60b96_icon%201.svg" loading="lazy" alt="" class="testimonial1_quote-icon" /></div>
                        <div class="testimonial1_quote-wrapper-inside" style="right: 35%; top: auto; left:auto; bottom:0%; transform:scaleX(-1)"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c77a5c60b96_icon%201.svg" loading="lazy" alt="" class="testimonial1_quote-icon" /></div>
                        <div class="row mx-auto"style="background-color: white; padding: 50px 0;">
                            <div class="col-7">
                                <div style="
                                    display: table-cell;
                                    padding: 10px;
                                    vertical-align: middle;
                                  ">

                                  <div style="margin:auto;" class="paragraph-2">{{ $judul[2]->Aboutgambar->load('Aboutjudul', 'Aboutreview')->where('aboutreview_id',$i)[$i]->Aboutreview->text }}</div>
                                </div>
                            </div>
                            <div class="col-1">
                                <div style="border-right: 3px solid #eedc7a; height:80%; margin-top:10px;"></div>
                            </div>
                            <div class="col-2">
                                <div class=""><img src="{{ $judul[2]->Aboutgambar->load('Aboutjudul', 'Aboutreview')->where('aboutreview_id',$i)[$i]->img }}" class="testimonials1_client-image" alt="..."    style = "margin-left: 35%"></div>
                                <div class="testimonial1_name text-center">{{ $judul[2]->Aboutgambar->load('Aboutjudul', 'Aboutreview')->where('aboutreview_id',$i)[$i]->Aboutreview->nama }}</div>
                                <div class="paragraph-2 text-center">{{ $judul[2]->Aboutgambar->load('Aboutjudul', 'Aboutreview')->where('aboutreview_id',$i)[$i]->Aboutreview->role }}</div>
                            </div>
                          </div>
                </div>
                </div>
                @endfor

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
        </div>
    </div>
</div>

<div>
    <div class="section-review" style="">
        <div class="page-padding" style = "
        width: 100%;
        max-width: 77rem;
        margin-right: auto;
        margin-left: auto;">
      <div class="container-large">
        <div class="padding-vertical padding-xhuge">
          <div class="margin-bottom margin-medium">
            <div class="text-align-center">
              <h2 data-w-id="9ffab59e-7706-d2be-ebf0-c06419292ec7" style="opacity:0.75" class="max-width-mobile">{{ $judul[3]->judul }}
                </h2>
            </div>
          </div>
          <img src="{{ $judul[3]->Aboutgambar[0]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
        </div>
      </div>
        </div>
    </div>
</div>

<div>
    <div class="section-review" style="">
    <div class="page-padding" style = "
        width: 100%;
        max-width: 77rem;
        margin-right: auto;
        margin-left: auto;">
      <div class="container-large">
        <div class="padding-vertical padding-xhuge">
          <div class="margin-bottom margin-medium">
            <div class="text-align-center">
              <h2 data-w-id="9ffab59e-7706-d2be-ebf0-c06419292ec7" style="font-style: italic; opacity:0" class="max-width-mobile">{{ $judul[4]->judul }}
                </h2>
            </div>
          </div>
          <div data-delay="6000" data-animation="slide" class="slider desktop w-slider" data-autoplay="true" data-easing="ease-out" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="4" data-duration="500" data-infinite="true">

            @for ($i=1; $i<=$judul[4]->Aboutgambar->load('Aboutjudul')->where('background',0)->count()/4;$i++)

            @if ($i==1)<div class="gallery_mask w-slider-mask" >@endif
                    <div class="gallery_slide w-slide">
                        <div class="w-dyn-list">
                            <div role="list" class="slider-wrapper w-dyn-items">

                            @for ($j=0+($i*4); $j<4+($i*4);$j++)
                            <div role="listitem" class="w-dyn-item">
                                <div class="transformed-testimonial-wrapper hidden-mobile">
                                <div class="testimonials1_content">
                                    <img src="{{ $judul[3]->Aboutgambar[0]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
                                    </div>
                                </div>
                            </div>
                            @endfor

                        </div>
                    </div>
             @if ($i==1) </div> @endif
            @endfor
          </div>
        </div>

        <div class="program-testimonial_arrow is-slider w-slider-arrow-left"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c15dec60b98_ph_caret-left-bold.svg" loading="lazy" alt="" class="image-4" /></div>
            <div class="program-testimonial_arrow right is-slider-right w-slider-arrow-right"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c599cc60b97_ph_caret-right-bold.svg" loading="lazy" alt="" class="image-5" /></div>
            <div class="testimonials2_slider-nav-2 w-slider-nav w-slider-nav-invert w-round"></div>
            <div class="testimonials2_slider-nav-styles w-embed">
              <style>
                .w-slider-dot {
                  background: #24292e;
                  opacity: 25%;
                  width: 0.5rem;
                  height: 0.5rem;
                }

                .w-slider-dot.w-active {
                  opacity: 100%;
                }
              </style>
            </div>
      </div>


      <div data-delay="6000" data-animation="slide" class="slider mobile w-slider" data-autoplay="true" data-easing="ease-out" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="4" data-duration="500" data-infinite="true">
        <div class="gallery_mask w-slider-mask">

            @for ($i=0; $i<$judul[4]->Aboutgambar->load('Aboutjudul')->where('background',0)->count(); $i++)
            <div class="gallery_slide w-slide">
                <div class="w-dyn-list">
                  <div role="list" class="slider-wrapper w-dyn-items">
                    <div role="listitem" class="w-dyn-item">
                      <div class="transformed-testimonial-wrapper hidden-mobile">
                        <div class="testimonials1_content">
                            <img src="{{ $judul[3]->Aboutgambar[0]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
                        </div>
                      </div>
                    </div>
                    {{ $i += 1 }}
                    <div role="listitem" class="w-dyn-item">
                      <div class="transformed-testimonial-wrapper hidden-mobile">
                        <div class="testimonials1_content">
                            <img src="{{ $judul[3]->Aboutgambar[0]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endfor

        </div>
        <div class="program-testimonial_arrow is-slider mobile w-slider-arrow-left"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c15dec60b98_ph_caret-left-bold.svg" loading="lazy" alt="" class="image-4" /></div>
        <div class="program-testimonial_arrow right is-slider-right mobile w-slider-arrow-right"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c599cc60b97_ph_caret-right-bold.svg" loading="lazy" alt="" class="image-5" /></div>
        <div class="testimonials2_slider-nav-2 w-slider-nav w-slider-nav-invert w-round"></div>
        <div class="testimonials2_slider-nav-styles w-embed">
          <style>
            .w-slider-dot {
              background: #24292e;
              opacity: 25%;
              width: 0.5rem;
              height: 0.5rem;
            }

            .w-slider-dot.w-active {
              opacity: 100%;
            }
          </style>
        </div>
      </div>
    </div>
    </div>
</div>

<div style="background-image: url('{{ $judul[5]->Aboutgambar[0]->load('Aboutjudul')->img }}'); background-size: cover; background-position:center;">
  <div class="section-header">
      <div class="page-padding" style = "
      margin-right: auto;
      margin-left: auto;">
          <div class="padding-vertical padding-xhuge">
              <div class="margin-bottom margin-xlarge">
                <div class="text-align-center">
                  <h1 class="homepage_header_heading text-center" style="
                  max-width: 64%;
                  margin: auto;
                  line-height: 110%;
                  padding-bottom: 2%;"><span style="color:white">{{ $judul[5]->judul }}</span></h1>
                </div>

                <div style="margin: auto;max-width: 85%;">
                <div style="">
                <div class = "container">

                    @for ($i=0; $i<3; $i++)
                    <div style="background-color: #ffde3e; margin-bottom: 15px;">
                        <div style="background-color: white; border-radius: 20px;
                        padding-left: 15px;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        margin: 1px 0;">
                        <div class = "row" style="padding-bottom: 15px">
                            <div class = "col-1" style="max-width: 7%;margin-bottom: auto;margin-right: auto;margin-left: auto;margin-top: 20px;">
                                <div class="testimonials1_client-image-wrapper" style="border-radius: 0; margin:auto;"><img style="border-radius: 0; max-height:55px; width:auto" src="/Assets/data.JPG" loading="lazy" alt="" sizes="(max-width: 991px) 100vw, 72px" class="testimonials1_client-image img-fluid" /></div>
                            </div>
                            <div class = "col">
                                <p>
                                <button style="
                                float: right;
                                background-color: white;
                                color: black;
                                border: none;"
                                class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#toggle{{ $i }}" aria-expanded="false" aria-controls="toggle{{ $i }}">
                                    +
                                  </button></p>
                                <div class = "testimonial1_name">
                                {{ $judul[5]->Aboutdesk[0]->load('Aboutjudul')->text }}
                                </div>
                                <div class = "paragraph-2">{{ $judul[5]->Aboutdesk[1]->load('Aboutjudul')->text }}</div>
                        </div>
                        <div style="margin-top:15px" class="collapse" id="toggle{{ $i }}">
                            <div class="card card-body" style="    margin: auto;
                            margin-right: 10px;">
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis illo voluptates minima repellat nostrum odit suscipit quibusdam consectetur temporibus. Illum sunt delectus vitae quis, earum laborum placeat nobis vel corporis.
                            </div>
                          </div>
                    </div>
                    </div>
                    </div>
                    @endfor
            </div>

          </div>
        </div>
      </div>
  </div>
  </div>


  </header>
@endsection
