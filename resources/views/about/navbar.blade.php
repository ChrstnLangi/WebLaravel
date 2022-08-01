@inject('about', 'App\Models\About')

<div data-collapse="medium" data-animation="default" data-duration="200" data-easing="ease-in-out" data-easing2="ease-in-out" data-doc-height="1" role="banner" class="nav_component new-bacground new w-nav"
style="background-color: white;
       max-height: 122px;">
    <div class="page-padding">
      <div class="nav_container"><a href="/" aria-current="page" class="nav_logo-link w-nav-brand w--current"><img src="/Assets/13_20220719_015826_0012.png" loading="lazy" alt="" class="nav_logo new" /></a>
        <nav role="navigation" class="nav_menu w-nav-menu">
          <div data-hover="true" data-delay="0" class="nav_dropdown w-dropdown">
            <div class="nav_dropdown-toggle w-dropdown-toggle">
              <div class="nav_icon w-icon-dropdown-toggle"></div>
              <div class="text-block nav-text">Programs</div>
            </div>
            <nav class="nav_dropdown-list w-dropdown-list">
              <div class="nav_link nav-dropdown-catagory">Full Programs (6-months)</div>
              <a href="/digital-marketing" id="apply10" class="nav_link is-dropdown-link is-first-dropdown-link w-dropdown-link">Digital Marketing</a><a href="/data-analytics" id="apply11" class="nav_link is-dropdown-link w-dropdown-link">Data Analytics</a><a href="/product-management" id="apply12" class="nav_link is-dropdown-link is-last-dropdown-link w-dropdown-link">Product Management</a>
              <div class="nav_link nav-dropdown-catagory">Intro Programs (2-Weeks)</div><a href="https://revou.co/mini-course-digital-marketing" id="apply7" class="nav_link is-dropdown-link is-first-dropdown-link w-dropdown-link">Digital Marketing</a><a href="https://revou.co/mini-course-data-analytics" id="apply8" class="nav_link is-dropdown-link w-dropdown-link">Data Analytics</a><a href="https://revou.co/mini-course-product-management" id="apply9" class="nav_link is-dropdown-link is-last-dropdown-link w-dropdown-link">Product Management</a><a href="https://apply.revou.co/mini-course-sales-registration-closed/?source=webmc" class="nav_link is-dropdown-link mcts w-dropdown-link">Tech Sales</a>
            </nav>
          </div>
          <div data-hover="true" data-delay="0" class="nav_dropdown w-dropdown">
            <div class="nav_dropdown-toggle w-dropdown-toggle">
              <div class="nav_icon w-icon-dropdown-toggle"></div>
              <div class="text-block">Articles</div>
            </div>
            <nav class="nav_dropdown-list w-dropdown-list"><a href="/hiring" class="nav_link is-dropdown-link is-first-dropdown-link w-dropdown-link">Hire RevoU Graduates</a><a href="/labs-partner" class="nav_link is-dropdown-link is-first-dropdown-link w-dropdown-link">business solutions</a></nav>
          </div>
          <div data-hover="true" data-delay="0" class="nav_dropdown w-dropdown">
            <div class="nav_dropdown-toggle w-dropdown-toggle">
              <div class="nav_icon w-icon-dropdown-toggle"></div>
              <div class="text-block">About</div>
            </div>
            <nav class="nav_dropdown-list w-dropdown-list">
                @foreach ($about->content() as $about)
                <a href="/about/{{ $about->slug }}" class="nav_link is-dropdown-link w-dropdown-link">{{ $about->slug }}</a>
                @endforeach
            </nav>
          </div>

          @auth
          <div data-hover="true" data-delay="0" class="nav_dropdown w-dropdown">
            <div class="nav_dropdown-toggle w-dropdown-toggle">
              <div class="nav_icon w-icon-dropdown-toggle"></div>
              <div class="text-block nav-text">Selamat Datang, {{ auth()->user()->nama }}</div>
            </div>
            <nav class="nav_dropdown-list w-dropdown-list">
              <a href="/dashboard" id="apply10" class="nav_link is-dropdown-link is-first-dropdown-link w-dropdown-link">Dashboard <i class="bi bi-layout-text-sidebar-reverse"></i></a>
              <form action="/logout" method="post" class="nav_link is-dropdown-link w-dropdown-link">
                @csrf
                <button type="submit" id="apply11">Logout<i class="bi bi-box-arrow-right"></i></button>
            </form>
            </nav>
          </div>
          @else
          <a href="/login" class="text-block nav-text nav_icon nav_link nav_link">Login<i class="bi bi-box-arrow-in-right"></i></a>
          @endauth


        </nav>
        <div class="menu-button w-nav-button">
          <div class="menu-icon w-embed"><svg width="3rem" height="1.5rem" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19 7H1C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9H19C19.5523 9 20 8.55228 20 8C20 7.44772 19.5523 7 19 7Z" fill="currentColor" />
              <path d="M19 0H7C6.44772 0 6 0.447715 6 1C6 1.55228 6.44772 2 7 2H19C19.5523 2 20 1.55228 20 1C20 0.447715 19.5523 0 19 0Z" fill="currentColor" />
              <path d="M19 14H11C10.4477 14 10 14.4477 10 15C10 15.5523 10.4477 16 11 16H19C19.5523 16 20 15.5523 20 15C20 14.4477 19.5523 14 19 14Z" fill="currentColor" />
            </svg></div>
        </div>
      </div>
    </div>
  </div>
