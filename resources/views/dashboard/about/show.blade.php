@extends('dashboard.dashboard')

@section('contain')
<link href="/Css/style.css" rel="stylesheet" type="text/css" />
<script src="/Js/script.js"> </script>
<header>
<div style="background-image: url('{{ $about->Aboutjudul[0]->Aboutgambar[0]->img }}'); background-size: cover;">
<div class="section-header">
    <div class="page-padding">
      <div class="container-large">
        <div class="padding-vertical padding-large is-custom-padding">
          <div class="w-layout-grid homepage-header_component">
            <div id="w-node-c3733106-a61e-156e-654f-c21c9b4597c1-2897c137" class="homepage-header_content-wrapper">
              <div class="homepage-header_content">
                <div data-w-id="5fb4b4db-d69c-5d88-8c1a-2cd78f94baf3" style="-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_heading-wrapper">
                  <h1 class="homepage_header_heading"><span style="color:white">{{ $about->Aboutjudul[0]->judul }}</span></h1>
                </div>
                <div data-w-id="c3733106-a61e-156e-654f-c21c9b4597c5" style=" -webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_text-wrapper">
                  <div class="homepage_header-text"></div>
                </div>
                <div data-w-id="c3733106-a61e-156e-654f-c21c9b4597c8" class="margin-top margin-medium is-custom-margin">
                    <a href="#our-programs" data-w-id="c3733106-a61e-156e-654f-c21c9b4597c9" style=" -webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="button is-hero-button w-button">
                        {{ $about->Aboutjudul[0]->Aboutdesk[0]->load('Aboutjudul')->text }}
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
<div class="section-header">
    <div class="page-padding" style = "
    width: 100%;
    max-width: 77rem;
    margin-right: auto;
    margin-left: auto;">
        <div class="padding-vertical padding-xhuge">
            <div class="margin-bottom margin-xlarge">
              <div class="text-align-center">
                <h1 class="homepage_header_heading text-center"><span style="color:black">{{ $about->Aboutjudul[1]->judul }}</span></h1>
                <div class="homepage_header-text text-center">
                    {{ $about->Aboutjudul[1]->Aboutdesk[0]->load('Aboutjudul')->text }}
                  </div>
              </div>
        </div>
      </div>
    </div>
</div>
</div>


<div>
    <div class="section-review" style="background-image: url('{{ $about->Aboutjudul[2]->Aboutgambar->load('Aboutjudul')->where('background',1)[0]->img }}'); background-size: cover;">
        <div class="page-padding" style = "
        width: 100%;
        max-width: 77rem;
        margin-right: auto;
        margin-left: auto;">
      <div class="container-large">
        <div class="padding-vertical padding-xhuge">
          <div class="margin-bottom margin-medium">
            <div class="text-align-center">
              <h2 data-w-id="9ffab59e-7706-d2be-ebf0-c06419292ec7" style="" class="max-width-mobile">{{ $about->Aboutjudul[2]->judul }}
                </h2>
            </div>
          </div>
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @for ($i = 1; $i <= $about->Aboutjudul[2]->Aboutgambar->load('Aboutjudul')->where('background',0)->count(); $i++ )
                    <div class="carousel-item @if ($i == 1)
                    active
                    @endif">
                    <div class="container" style="margin-left: 15%;">
                        <div class="row"style="
                        padding-top: 5%;
                        padding-bottom: 5%;
                        background-color: white;
                        padding-right: 0px;
                        width: 72%;
                    ">
                            <div class="col-8">
                                <div class="paragraph-2">{{ $about->Aboutjudul[2]->Aboutgambar->load('Aboutjudul', 'Aboutreview')->where('aboutreview_id',$i)[$i]->Aboutreview->text }}</div>
                            </div>
                            <div class="col">
                                <div class=""><img src="{{ $about->Aboutjudul[2]->Aboutgambar->load('Aboutjudul', 'Aboutreview')->where('aboutreview_id',$i)[$i]->img }}" class="testimonials1_client-image" alt="..."    style = "margin-left: 35%"></div>
                                <div class="testimonial1_name text-center">{{ $about->Aboutjudul[2]->Aboutgambar->load('Aboutjudul', 'Aboutreview')->where('aboutreview_id',$i)[$i]->Aboutreview->nama }}</div>
                                <div class="paragraph-2 text-center">{{ $about->Aboutjudul[2]->Aboutgambar->load('Aboutjudul', 'Aboutreview')->where('aboutreview_id',$i)[$i]->Aboutreview->role }}</div>
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
              <h2 data-w-id="9ffab59e-7706-d2be-ebf0-c06419292ec7" style="" class="max-width-mobile">{{ $about->Aboutjudul[3]->judul }}
                </h2>
            </div>
          </div>
          <img src="{{ $about->Aboutjudul[3]->Aboutgambar[0]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
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
              <h2 data-w-id="9ffab59e-7706-d2be-ebf0-c06419292ec7" style="" class="max-width-mobile">{{ $about->Aboutjudul[4]->judul }}
                </h2>
            </div>
          </div>
          <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @for ($i=0; $i<$about->Aboutjudul[4]->Aboutgambar->load('Aboutjudul')->where('background',0)->count()/4;$i++ )
                    <div class="carousel-item @if ($i == 0)
                    active
                    @endif">
                        <div>
                            <div class = "container">

                                <div class = "row"
                                style="width: 100%;">
                                    <div class = "col">
                                        @if ($i == 0)
                                        <img style ="height: 300px; width:500px" class= "img-fluid mx-auto d-block img-thumbnail" src="{{ $about->Aboutjudul[4]->Aboutgambar[$i]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
                                        @else
                                        <img style ="height: 300px; width:500px" class = "img-fluid mx-auto d-block img-thumbnail " src="{{ $about->Aboutjudul[4]->Aboutgambar[$i+3*$i]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
                                        @endif
                                    </div>
                                    <div class = "col">
                                        @if ($i == 0)
                                        <img style ="height: 300px; width:500px" class = "img-fluid mx-auto d-block img-thumbnail" src="{{ $about->Aboutjudul[4]->Aboutgambar[$i+1]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
                                        @else
                                        <img style ="height: 300px; width:500px" class = "img-fluid mx-auto d-block img-thumbnail" src="{{ $about->Aboutjudul[4]->Aboutgambar[$i+4*$i]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
                                        @endif
                                    </div>
                                </div>
                                <div class = "row"
                                style="width: 100%;">
                                    <div class = "col">
                                        @if ($i == 0)
                                        <img style ="height: 300px; width:500px" class = "img-fluid mx-auto d-block img-thumbnail" src="{{ $about->Aboutjudul[4]->Aboutgambar[$i+2]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
                                        @else
                                        <img style ="height: 300px; width:500px" class = "img-fluid mx-auto d-block img-thumbnail" src="{{ $about->Aboutjudul[4]->Aboutgambar[$i+5*$i]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
                                        @endif
                                    </div>
                                    <div class = "col">
                                        @if ($i == 0)
                                        <img style ="height: 300px; width:500px" class = "img-fluid mx-auto d-block img-thumbnail" src="{{ $about->Aboutjudul[4]->Aboutgambar[$i+3]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
                                        @else
                                        <img style ="height: 300px; width:500px" class = "img-fluid mx-auto d-block img-thumbnail" src="{{ $about->Aboutjudul[4]->Aboutgambar[$i+6*$i]->load('Aboutjudul', 'Aboutreview')->img }}" alt="...">
                                        @endif
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                        @endfor
                    </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        </div>
    </div>
</div>
</div>

<div style="background-image: url('{{ $about->Aboutjudul[5]->Aboutgambar[0]->load('Aboutjudul')->img }}'); background-size: cover;">
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
                  padding-bottom: 2%;"><span style="color:white">{{ $about->Aboutjudul[5]->judul }}</span></h1>
                </div>
                <div style="margin: auto;background-color: #ffde3e;max-width: 85%;">
                <div style="
                background-color: #fff;
                border-radius: 20px;
                padding-left: 15px;
                padding-top: 10px;
                padding-bottom: 10px;
                ">
                <div class = "container">
                    <div class = "row">
                        <div class = "col-1">
                            <div class="testimonials1_client-image-wrapper"><img src={{ $about->Aboutjudul[5]->Aboutgambar[0]->load('Aboutjudul')->img }} loading="lazy" alt="" sizes="(max-width: 991px) 100vw, 72px" class="testimonials1_client-image" /></div>
                        </div>
                        <div class = "col">
                            <div class = "testimonial1_name">
                            {{ $about->Aboutjudul[5]->Aboutdesk[0]->load('Aboutjudul')->text }}
                            </div>
                            <div class = "paragraph-2">{{ $about->Aboutjudul[5]->Aboutdesk[1]->load('Aboutjudul')->text }}</div>
                        </div>
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


@endsection
