@extends('about.main')

@section('contain')
<header>
<div style="background-image: url('{{ $judul[0]->Aboutgambar[0]->load('Aboutjudul')->img }}');">
<div class="section-header">
    <div class="page-padding">
      <div class="container-large">
        <div class="padding-vertical padding-large is-custom-padding">
          <div class="w-layout-grid homepage-header_component">
            <div id="w-node-c3733106-a61e-156e-654f-c21c9b4597c1-2897c137" class="homepage-header_content-wrapper">
              <div class="homepage-header_content">
                <div data-w-id="5fb4b4db-d69c-5d88-8c1a-2cd78f94baf3" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_heading-wrapper">
                  <h1 class="homepage_header_heading"><span style="color:white">{{ $judul[0]->judul }}</span></h1>
                </div>
                <div data-w-id="c3733106-a61e-156e-654f-c21c9b4597c5" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_text-wrapper">
                  <div class="homepage_header-text"></div>
                </div>
                <div data-w-id="c3733106-a61e-156e-654f-c21c9b4597c8" class="margin-top margin-medium is-custom-margin">
                    <a href="#our-programs" data-w-id="c3733106-a61e-156e-654f-c21c9b4597c9" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="button is-hero-button w-button">
                        {{ $judul[0]->Aboutdesk[0]->load('Aboutjudul')->text }}
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
                <h1 class="homepage_header_heading text-center"><span style="color:black">{{ $judul[1]->judul }}</span></h1>
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
    <div class="section-review" style="background-image: url('/Assets/20220728_193418_0001.png');">
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
                    <div class="container" style="margin-left: 15%;">
                        <div class="row"style="
                        padding-top: 5%;
                        padding-bottom: 5%;
                        background-color: white;
                        padding-right: 0px;
                        width: 72%;
                    ">
                            <div class="col-8">
                                <div class="paragraph-2">{{ $judul[2]->Aboutgambar->load('Aboutjudul', 'Aboutreview')->where('aboutreview_id',$i)[$i]->Aboutreview->text }}</div>
                            </div>
                            <div class="col">
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


  </header>
@endsection
