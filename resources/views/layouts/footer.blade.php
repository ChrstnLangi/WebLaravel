@inject('programs', 'App\Models\Program')
@inject('articles', 'App\Models\Article')

<div class="footer">
    <div class="page-padding">
      <div class="container-large">
        <div class="padding-vertical padding-large is-custom-padding-bottom">
          <div class="footer_component">
            <div class="margin-bottom margin-large new">
              <div class="footer2_content">
                <div class="footer2_content-left"><a href="/" aria-current="page" class="footer_logo-link-block w-inline-block w--current"><img src="/Assets/dents.talk-rounf.png" loading="lazy" alt="" class="foote_logo" /></a></div>
                <div class="footer2_content-right _5-column">
                <div class="footer2_links-col">
                    <div class="text-weight-bold text-style-allcaps">Courses</div>
                    @foreach ($programs->content() as $link)
                    <div class="footer2_links-list"><a href="/{{ $link["link"] }}" class="footer2_link-2">{{ $link["judul"] }}</a></div>
                    @endforeach
                </div>
                <div class="footer2_links-col">
                    <div class="text-weight-bold text-style-allcaps">Articles</div>
                    @foreach ($articles->content() as $link)
                    <div class="footer2_links-list"><a href="/{{ $link["link"] }}" class="footer2_link-2">{{ $link["judul"] }}</a></div>
                    @endforeach
                </div>
                </div>
              </div>
            </div>
            <div class="footer_bottom-row">
              <div class="footer_bottom-left-column">
                <div class="footer_copyright">© 2022 Dents.Talk <br />All Rights Reserved</div>
              </div>
              <div class="footer_bottom-center-column">
                <div class="footer_email text-align-center mobile-text-right">Ada Pertanyaan? Email kami di <br /><a href="mailto:LoremIpsum@dolor.sit"><span class="footer_email-span">LoremIpsum@dolor.sit</span></a></div>
              </div>
              <div class="footer_bottom-right-column">
                <a href="https://instagram.com/dents.talk?igshid=YmMyMTA2M2Y=" target="_blank" class="footer_social-link-block w-inline-block"><img src="/Assets/12_20220719_015826_0011.png" style="height:64.43px;" loading="lazy" alt="" class="footer_logo-instagram" /></a>
                <a href="https://www.linkedin.com/company/dents-talk-indonesia/" target="_blank" class="footer_social-link-block w-inline-block"><img src="/Assets/9_20220719_015826_0008.png" style="height:64.43px;" loading="lazy" alt="" class="footer_logo-linkedin" /></a>
                <a href="https://twitter.com/DentsTalk?t=KU06DNcw_PZIFou1jU-n4w&s=09" target="_blank" class="footer_social-link-block w-inline-block"><img src="/Assets/11_20220719_015826_0010.png" style="height:64.43px;" loading="lazy" alt="" class="footer_logo-twitter" /></a>
                <a href="https://vt.tiktok.com/ZSdE7kaUy/" target="_blank" class="footer_social-link-block w-inline-block"><img src="/Assets/10_20220719_015826_0009.png" style="height:64.43px;" loading="lazy" alt="" class="footer_logo-instagram"  /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
