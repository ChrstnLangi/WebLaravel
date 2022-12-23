@extends('about.main')

@section('contain')
<header>
    <section id = "Head">
    <div style="background-image: url('/Assets/1_20220908_160225_0000.png'); background-size: cover; background-position:center; padding: 190px 0px;">
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
                            <span style="color:white">Get to Know<br>Our Team!</span></div>
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
    <div style="background-image: url('/Assets/20220826_010711_0001.png'); background-size: cover; background-position:center;">
        <div class="section-header" style="margin-bottom: 0%; padding-bottom: 50px;">
            <div class="page-padding" style = "
            width: 100%;
            max-width: 77rem;
            margin-right: auto;
            margin-left: auto;">
                <div class="padding-vertical padding-xhuge">
                    <div class="margin-bottom margin-xlarge">

                        <div>
                            <div class="container text-center">
                                <div class="row" style="width: 100%">
                                    <div class="col">
                                        <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->first()->img))
                                        {{ '/storage/' . $our->first()->img }}
                                        @endif" alt="">
                                        <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                            @if (isset($our->first()->nama))
                                                {!! $our->first()->nama !!}
                                            @endif
                                        </div>
                                        <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                            @if (isset($our->first()->role))
                                            {!! $our->first()->role !!}
                                            @endif
                                        </div>
                                      </div>
                                      <div class="col">
                                        <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->skip(1)->first()->img))
                                        {{ '/storage/' . $our->skip(1)->first()->img }}
                                        @endif" alt="">
                                        <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                            @if (isset($our->skip(1)->first()->nama))
                                                {!! $our->skip(1)->first()->nama !!}
                                            @endif
                                        </div>
                                        <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                            @if (isset($our->skip(1)->first()->role))
                                            {!! $our->skip(1)->first()->role !!}
                                            @endif
                                        </div>
                                      </div>
                                      <div class="col">
                                        <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->skip(2)->first()->img))
                                        {{ '/storage/' . $our->skip(2)->first()->img }}
                                        @endif" alt="">
                                        <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                            @if (isset($our->skip(2)->first()->nama))
                                                {!! $our->skip(2)->first()->nama !!}
                                            @endif
                                        </div>
                                        <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                            @if (isset($our->skip(2)->first()->role))
                                            {!! $our->skip(2)->first()->role !!}
                                            @endif
                                        </div>
                                      </div>
                                </div>
                              </div>

                              <div class="container text-center">
                                <div class="row" style="width: 100%">
                                    <div class="col">
                                        <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->skip(3)->first()->img))
                                        {{ '/storage/' . $our->skip(3)->first()->img }}
                                        @endif" alt="">
                                        <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                            @if (isset($our->skip(3)->first()->nama))
                                                {!! $our->skip(3)->first()->nama !!}
                                            @endif
                                        </div>
                                        <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                            @if (isset($our->skip(3)->first()->role))
                                            {!! $our->skip(3)->first()->role !!}
                                            @endif
                                        </div>
                                      </div>
                                </div>
                              </div>

                              <div class="container text-center">
                                <div class="row" style="width: 100%">
                                    <div class="col">
                                        <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->skip(4)->first()->img))
                                        {{ '/storage/' . $our->skip(4)->first()->img }}
                                        @endif" alt="">
                                        <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                            @if (isset($our->skip(4)->first()->nama))
                                                {!! $our->skip(4)->first()->nama !!}
                                            @endif
                                        </div>
                                        <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                            @if (isset($our->skip(4)->first()->role))
                                            {!! $our->skip(4)->first()->role !!}
                                            @endif
                                        </div>
                                      </div>
                                      <div class="col">
                                        <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->skip(5)->first()->img))
                                        {{ '/storage/' . $our->skip(5)->first()->img }}
                                        @endif" alt="">
                                        <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                            @if (isset($our->skip(5)->first()->nama))
                                                {!! $our->skip(5)->first()->nama !!}
                                            @endif
                                        </div>
                                        <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                            @if (isset($our->skip(5)->first()->role))
                                            {!! $our->skip(5)->first()->role !!}
                                            @endif
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
</section>

<section id = "Creative-Content">
    <div style="background-image: url('/Assets/20220826_010711_0002.png'); background-size: cover; background-position:center;">
        <div class="section-header" style="margin-bottom: 0%; padding-bottom: 50px;">
            <div class="page-padding" style = "
            width: 100%;
            max-width: 77rem;
            margin-right: auto;
            margin-left: auto;">
                <div class="padding-vertical padding-xhuge">
                    <div class="margin-bottom margin-xlarge">
                        <h2 style="color: white; text-align:center; font-size:46px">Creative Content Dapartment</h2>
                        <div class="container text-center">
                            <div class="row" style="width: 100%">
                                <div class="col">
                                    <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->where('team_id', 1)->skip(0)->first()->img))
                                    {{ '/storage/' . $our->where('team_id', 1)->skip(0)->first()->img }}
                                    @endif" alt="">
                                    <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                        @if (isset($our->where('team_id', 1)->skip(0)->first()->nama))
                                            {!! $our->where('team_id', 1)->skip(0)->first()->nama !!}
                                        @endif
                                    </div>
                                    <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                        @if (isset($our->where('team_id', 1)->skip(0)->first()->role))
                                        {!! $our->where('team_id', 1)->skip(0)->first()->role !!}
                                        @endif
                                    </div>
                                  </div>

                                  <div class="col">
                                    <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->where('team_id', 1)->skip(1)->first()->img))
                                    {{ '/storage/' . $our->where('team_id', 1)->skip(1)->first()->img }}
                                    @endif" alt="">
                                    <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                        @if (isset($our->where('team_id', 1)->skip(1)->first()->nama))
                                            {!! $our->where('team_id', 1)->skip(1)->first()->nama !!}
                                        @endif
                                    </div>
                                    <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                        @if (isset($our->where('team_id', 1)->skip(1)->first()->role))
                                        {!! $our->where('team_id', 1)->skip(1)->first()->role !!}
                                        @endif
                                    </div>
                                  </div>
                            </div>
                          </div>

                          <div class="container text-center">
                            <div class="row" style="width: 100%">
                                @foreach ($our->where('team_id', 1)->skip(2) as $our1 )
                                <div class="col">
                                    <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our1->img))
                                    {{ '/storage/' . $our1->img }}
                                    @endif" alt="">
                                    <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                        @if (isset($our1->nama))
                                            {!! $our1->nama !!}
                                        @endif
                                    </div>
                                    <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                        @if (isset($our1->role))
                                        {!! $our1->role !!}
                                        @endif
                                    </div>
                                  </div>

                                @endforeach
                            </div>
                          </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

<section id ="Creative-Design">
    <div style="background-image: url('/Assets/20220826_010711_0003.png'); background-size: cover; background-position:center;">
        <div class="section-header" style="margin-bottom: 0%; padding-bottom: 50px;">
            <div class="page-padding" style = "
            width: 100%;
            max-width: 77rem;
            margin-right: auto;
            margin-left: auto;">
                <div class="padding-vertical padding-xhuge">
                    <div class="margin-bottom margin-xlarge">
                        <h2 style="color: white; text-align:center; font-size:46px">Creative Design Dapartment</h2>
                        <div class="container text-center">
                            <div class="row" style="width: 100%">
                                <div class="col">
                                    <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->where('team_id', 2)->skip(0)->first()->img))
                                    {{ '/storage/' . $our->where('team_id', 2)->skip(0)->first()->img }}
                                    @endif" alt="">
                                    <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                        @if (isset($our->where('team_id', 2)->skip(0)->first()->nama))
                                            {!! $our->where('team_id', 2)->skip(0)->first()->nama !!}
                                        @endif
                                    </div>
                                    <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                        @if (isset($our->where('team_id', 2)->skip(0)->first()->role))
                                        {!! $our->where('team_id', 2)->skip(0)->first()->role !!}
                                        @endif
                                    </div>
                                  </div>

                                  <div class="col">
                                    <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->where('team_id', 2)->skip(1)->first()->img))
                                    {{ '/storage/' . $our->where('team_id', 2)->skip(1)->first()->img }}
                                    @endif" alt="">
                                    <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                        @if (isset($our->where('team_id', 2)->skip(1)->first()->nama))
                                            {!! $our->where('team_id', 2)->skip(1)->first()->nama !!}
                                        @endif
                                    </div>
                                    <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                        @if (isset($our->where('team_id', 2)->skip(1)->first()->role))
                                        {!! $our->where('team_id', 2)->skip(1)->first()->role !!}
                                        @endif
                                    </div>
                                  </div>
                            </div>
                          </div>

                          <div class="container text-center">
                            <div class="row" style="width: 100%">

                                @foreach ($our->where('team_id', 2)->skip(2) as $our2 )
                                <div class="col">
                                    <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our2->img))
                                    {{ '/storage/' . $our2->img }}
                                    @endif" alt="">
                                    <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                        @if (isset($our2->nama))
                                            {!! $our2->nama !!}
                                        @endif
                                    </div>
                                    <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                        @if (isset($our2->role))
                                        {!! $our2->role !!}
                                        @endif
                                    </div>
                                  </div>

                                @endforeach
                            </div>
                          </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

<section id = "Public-Relation">
    <div style="background-image: url('/Assets/20220826_010711_0004.png'); background-size: cover; background-position:center;">
        <div class="section-header" style="margin-bottom: 0%; padding-bottom: 50px;">
            <div class="page-padding" style = "
            width: 100%;
            max-width: 77rem;
            margin-right: auto;
            margin-left: auto;">
                <div class="padding-vertical padding-xhuge">
                    <div class="margin-bottom margin-xlarge">
                        <h2 style="color: white; text-align:center; font-size:46px">Public Relation Dapartment</h2>
                        <div class="container text-center">
                            <div class="row" style="width: 100%">
                                <div class="col">
                                    <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->where('team_id', 3)->skip(0)->first()->img))
                                    {{ '/storage/' . $our->where('team_id', 3)->skip(0)->first()->img }}
                                    @endif" alt="">
                                    <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                        @if (isset($our->where('team_id', 3)->skip(0)->first()->nama))
                                            {!! $our->where('team_id', 3)->skip(0)->first()->nama !!}
                                        @endif
                                    </div>
                                    <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                        @if (isset($our->where('team_id', 3)->skip(0)->first()->role))
                                        {!! $our->where('team_id', 3)->skip(0)->first()->role !!}
                                        @endif
                                    </div>
                                  </div>

                                  <div class="col">
                                    <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our->where('team_id', 3)->skip(1)->first()->img))
                                    {{ '/storage/' . $our->where('team_id', 3)->skip(1)->first()->img }}
                                    @endif" alt="">
                                    <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                        @if (isset($our->where('team_id', 3)->skip(1)->first()->nama))
                                            {!! $our->where('team_id', 3)->skip(1)->first()->nama !!}
                                        @endif
                                    </div>
                                    <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                        @if (isset($our->where('team_id', 3)->skip(1)->first()->role))
                                        {!! $our->where('team_id', 3)->skip(1)->first()->role !!}
                                        @endif
                                    </div>
                                  </div>
                            </div>
                        </div>
                          </div>

                          <div class="container text-center">
                            <div class="row" style="width: 100%">

                                @foreach ($our->where('team_id', 3)->skip(2) as $our3 )
                                <div class="col">
                                    <img class="img-fluid" style="height: 352px; width:auto;" src="@if (isset($our3->img))
                                    {{ '/storage/' . $our3->img }}
                                    @endif" alt="">
                                    <div style="font-size: 22px; text-align: center; font-family: 'MontserratSemiBold'; font-weight: 900; margin-top: -5%;">
                                        @if (isset($our3->nama))
                                            {!! $our3->nama !!}
                                        @endif
                                    </div>
                                    <div style="font-size: 22px;font-style: italic;font-family: 'MontserratRegular';font-weight: 100;">
                                        @if (isset($our3->role))
                                        {!! $our3->role !!}
                                        @endif
                                    </div>
                                  </div>

                                @endforeach
                            </div>
                          </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

</header>
@endsection
