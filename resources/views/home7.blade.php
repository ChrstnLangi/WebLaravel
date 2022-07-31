<div class="section-tuition-options">
    <div class="page-padding">
      <div class="container-large">
        <div class="padding-vertical padding-xhuge">
          <div class="margin-bottom margin-xlarge">
            <div class="text-align-center">
              <h2 data-w-id="6345cca2-be67-4822-2c49-35a3d4f3f964" style="opacity:0" class="max-width-mobile">Lorem ipsum dolor sit</h2>
              <div class="underline-wrapper"><img src="Assets/span.png" loading="lazy" style="opacity:0" data-w-id="6345cca2-be67-4822-2c49-35a3d4f3f967" alt="" class="tuition-option_underline" /></div>
            </div>
          </div>
          <div class="tuition-options_component">
            @foreach ($options as $option)
            <div id="w-node-_6345cca2-be67-4822-2c49-35a3d4f3f969-2897c137" data-w-id="6345cca2-be67-4822-2c49-35a3d4f3f969" style="opacity:0" class="tuition-options_upper-row-card">
                <div class="tuition-options_icon-wrapper"><img src={{ $option["img"] }} loading="lazy" width="134" alt="" class="tuition-option_icon" /></div>
                <h3 class="tuition-options_card-heading text-align-center">{{ $option["judul"] }}<br /></h3>
                <p class="text-align-center">{{ $option["deskripsi"] }}</p>
                <div class="best-option-wrapper homepage">
                  <div>{{ $option["note"] }}</div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
