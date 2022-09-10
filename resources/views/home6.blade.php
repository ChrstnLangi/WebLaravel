<section id="Components">
    <div class="section-review" style="background-image: url('/Assets/20220728_185446_0002.png');">
    <div class="page-padding">
      <div class="container-large">
        <div class="padding-vertical padding-xhuge">
          <div class="margin-bottom margin-medium">
            <div class="text-align-center">
              <h2 data-w-id="9ffab59e-7706-d2be-ebf0-c06419292ec7" style="opacity:0" class="max-width-mobile">Apa Yang #dentsfriends Katakan....
                </h2>
            </div>
          </div>
          <div data-delay="6000" data-animation="slide" class="slider desktop w-slider" data-autoplay="true" data-easing="ease-out" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="4" data-duration="500" data-infinite="true">
            <div class="gallery_mask w-slider-mask">
              <div class="gallery_slide w-slide">
                <div class="w-dyn-list">
                  <div role="list" class="slider-wrapper w-dyn-items">
                    @for($i = 0; $i < 4; $i++ )
                    <div role="listitem" class="w-dyn-item">
                        <div class="transformed-testimonial-wrapper hidden-mobile">
                          <div class="testimonials1_content">
                            <div class="testimonial1_quote-wrapper-inside"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c77a5c60b96_icon%201.svg" loading="lazy" alt="" class="testimonial1_quote-icon" /></div>
                            <div class="testimonials1_client-wrapper">
                              <div class="testimonials1_client-image-wrapper"><img src={{ $review[$i]['img'] }} loading="lazy" alt="" sizes="(max-width: 991px) 100vw, 72px" class="testimonials1_client-image" /></div>
                              <div class="testimonials1_client-details">
                                <div class="testimonial1_name">{{ $review[$i]['judul'] }}</div>
                                <div class="testimonial1_role text-style-muted" style="font-family: 'poppins';">{{ $review[$i]['role'] }}</div>
                              </div>
                            </div>
                            <p class="paragraph-2">&quot;{{ $review[$i]['desk'] }}&quot;</p><a href={{ $review[$i]['link'] }} target="_blank" class="testimonial-link-block-wrapper w-inline-block">
                              <div class="testimonial-link">Read more</div>
                            </a>
                          </div>
                        </div>
                      </div>
                    @endfor
                  </div>
                </div>
              </div>
              <div class="gallery_slide w-slide">
                <div class="w-dyn-list">
                  <div role="list" class="slider-wrapper w-dyn-items">
                    @for($i = 0+4; $i < 4+4; $i++ )
                    <div role="listitem" class="w-dyn-item">
                        <div class="transformed-testimonial-wrapper hidden-mobile">
                          <div class="testimonials1_content">
                            <div class="testimonial1_quote-wrapper-inside"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c77a5c60b96_icon%201.svg" loading="lazy" alt="" class="testimonial1_quote-icon" /></div>
                            <div class="testimonials1_client-wrapper">
                              <div class="testimonials1_client-image-wrapper"><img src={{ $review[$i]['img'] }} loading="lazy" alt="" sizes="(max-width: 991px) 100vw, 72px" class="testimonials1_client-image" /></div>
                              <div class="testimonials1_client-details">
                                <div class="testimonial1_name">{{ $review[$i]['judul'] }}</div>
                                <div class="testimonial1_role text-style-muted">{{ $review[$i]['role'] }}</div>
                              </div>
                            </div>
                            <p class="paragraph-2">&quot;{{ $review[$i]['desk'] }}&quot;</p><a href={{ $review[$i]['link'] }} target="_blank" class="testimonial-link-block-wrapper w-inline-block">
                              <div class="testimonial-link">Read more</div>
                            </a>
                          </div>
                        </div>
                      </div>
                    @endfor
                  </div>
                </div>
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

                @for ($i=0; $i<$review->count(); $i++)
                <div class="gallery_slide w-slide">
                    <div class="w-dyn-list">
                      <div role="list" class="slider-wrapper w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                          <div class="transformed-testimonial-wrapper hidden-mobile">
                            <div class="testimonials1_content">
                              <div class="testimonial1_quote-wrapper-inside"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c77a5c60b96_icon%201.svg" loading="lazy" alt="" class="testimonial1_quote-icon" /></div>
                              <div class="testimonials1_client-wrapper">
                                <div class="testimonials1_client-image-wrapper"><img src="{{ $review[$i]['img'] }}" loading="lazy" alt="" sizes="(max-width: 991px) 72px, 100vw" srcset="{{ $review[$i]['img'] }} 500w, {{ $review[$i]['img'] }} 800w" class="testimonials1_client-image" /></div>
                                <div class="testimonials1_client-details">
                                  <div class="testimonial1_name">{{ $review[$i]['judul'] }}</div>
                                  <div class="testimonial1_role text-style-muted">{{ $review[$i]['role'] }}</div>
                                </div>
                              </div>
                              <p class="paragraph-2">&quot;{{ $review[$i]['desk'] }}&quot;</p><a href="{{ $review[$i]['link'] }}" target="_blank" class="testimonial-link-block-wrapper w-inline-block">
                                <div class="testimonial-link">Read more</div>
                              </a>
                            </div>
                          </div>
                        </div>
                        {{ $i += 1 }}
                        <div role="listitem" class="w-dyn-item">
                          <div class="transformed-testimonial-wrapper hidden-mobile">
                            <div class="testimonials1_content">
                              <div class="testimonial1_quote-wrapper-inside"><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61af164800e38c77a5c60b96_icon%201.svg" loading="lazy" alt="" class="testimonial1_quote-icon" /></div>
                              <div class="testimonials1_client-wrapper">
                                <div class="testimonials1_client-image-wrapper"><img src="{{ $review[$i]['img'] }}" loading="lazy" alt="" class="testimonials1_client-image" /></div>
                                <div class="testimonials1_client-details">
                                  <div class="testimonial1_name">{{ $review[$i]['judul'] }}</div>
                                  <div class="testimonial1_role text-style-muted">{{ $review[$i]['role'] }}</div>
                                </div>
                              </div>
                              <p class="paragraph-2">&quot;{{ $review[$i]['desk'] }}&quot;</p><a href="{{ $review[$i]['link'] }}" target="_blank" class="testimonial-link-block-wrapper w-inline-block">
                                <div class="testimonial-link">Read more</div>
                              </a>
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
</div>
  </section>
