
<section class="section-hired-by">
    <div class="page-padding">
      <div class="hired-by-container">
        <div class="padding-vertical padding-xhuge">
          <div class="margin-bottom margin-xlarge">
            <div class="text-align-center">
              <h2 data-w-id="e5ea1503-eb9f-fa9a-39c7-85174aef32f0" style="opacity:0" class="max-width-mobile">DENTS.TALK Dibawah Pengawasan PDGI Cabang Bali Timur:</h2>
            </div>
          </div>
          <div class="logo-outer-wrapper">
            <div class="hired-by-col-list-desktop-wrap margin-left w-dyn-list">
              <div role="list" class="hired-by-col-list-desktop w-dyn-items">
                @foreach ($hireds as $hired)
                <div role="listitem" class="hired-by-logo-desktop w-dyn-item">
                    <div class="hired_logo-homepage-wrapper"><img src={{ $hired["img"] }} loading="lazy" alt="" class="hired_logo" /></div>
                  </div>
                @endforeach
            </div>
            <div class="hired-by-col-list-mobile-wrap margin-left w-dyn-list">
              <div role="list" class="hired-by-col-list-mobile w-dyn-items">
                @foreach ($hireds as $hired)
                <div role="listitem" class="hired-by-logo-mobile w-dyn-item">
                    <div class="hired_logo-wrapper"><img src={{ $hired["img"] }} loading="lazy" alt="" class="hired_logo" /></div>
                  </div>
                @endforeach
            </div>
            <div class="accordion_item is-logos">
              <div class="accordion2_question-wrapper is-logos">
                <div class="according2_heading-wrapper">
                  <div class="hired-logos-text is-view-more"></div>
                </div><img src="https://assets.website-files.com/61af164800e38c4f53c60b4e/61bb03df642467ae3b1fdb87_ph_caret-down.svg" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0)" data-w-id="9ae2c719-dcc7-e754-a0c2-0472b8a92875" alt="" class="accordion-icon" />
              </div>
            </div>
            <div class="hired-logos-text"><strong></strong></div>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
  </section>
