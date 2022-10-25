
<section class="section-our-programs">
    <div class="padding-vertical padding-xhuge">
      <div class="page-padding">
        <div class="container-large">
          <div id="our-programs" class="margin-bottom margin-medium">
            <div class="text-align-center">
              <h2 data-w-id="a944bdaf-1912-efcf-5af0-ccc511c251ba" style="opacity:0" class="our-programs-heading">Explore Our Programs!</h2>
             <!-- <div class="underline-wrapper"><img src="Assets/span.png"  loading="lazy" style="opacity:0" data-w-id="a944bdaf-1912-efcf-5af0-ccc511c251bd" alt="" class="our-programs-underline" /></div> -->
            </div>
          </div>
          <div class="padding-vertical padding-large">

            <div data-w-id="50b7de01-cde7-83ac-4864-6da0f131ca98" style="opacity:0" class="our-programs_component container">
              <div class="row">
                @foreach ( $programs as $program)
                <div id="w-node-a42de7b5-0d35-d0fa-e394-2cc3ed1bc063-2897c137" class="our-programs_item col-sm" style="margin-right: 35px; margin-left 35px;  margin-top: 10px;">
                    <div class="our-programs_image-wrapper mx-auto" style="
                    margin-bottom: 25px;
                    margin-top: -55px;">
                    <img class="img-fluid" style="height: 365px; width: auto;" src="{{ $program["img"] }}" loading="lazy" sizes="(max-width: 479px) 92vw, (max-width: 767px) 33vw, (max-width: 1439px) 29vw, 370px" alt="" class="our-programs_image" /></div>
                    <div class="our-programs-wrapper">
                      <div class="our-programs_content" style="width: 100%;">
                        <h3 class="our-programs_heading mx-auto" style="max-width: 80%; padding-left:0;">{{ $program["judul"] }}</h3>
                        <div class="margin-vertical margin-small">
                          <div class="paragraph homepage" style="margin-top: 20px;">{!! $program["desk"] !!}</div>
                        </div>
                      </div>
                      <div class="programs-button-wrapper"><a id="apply" href="/{{ $program["link"] }}" class="button_program is-our-programs w-button">Telusuri</a>
                        <link rel="prefetch" href="/{{ $program["link"] }}" />
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
