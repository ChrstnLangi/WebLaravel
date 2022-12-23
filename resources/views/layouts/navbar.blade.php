@inject('about', 'App\Models\About')
@inject('web', 'App\Models\Web')

<div data-collapse="medium" data-animation="default" data-duration="200" data-easing="ease-in-out" data-easing2="ease-in-out" data-doc-height="1" role="banner" class="nav_component new-bacground new w-nav">
    <div class="page-padding">
      <div class="nav_container"><a href="/" aria-current="page" class="nav_logo-link w-nav-brand w--current"><img src="/Assets/png_20220719_050121_0000.png" loading="lazy" alt="" class="nav_logo new" /></a>
        <nav role="navigation" class="nav_menu w-nav-menu">
          @foreach ( $web->content() as $web )
          @if($loop->iteration !== 1)
          <div data-hover="true" data-delay="0" class="nav_dropdown w-dropdown">
            <div class="nav_dropdown-toggle w-dropdown-toggle">
                @if ($web->judul == "Article")
                      <a href="/{{ $web->judul }}" class="text-block" style="font-size: 28.1531px;color: black; text-decoration : none;">{{ $web->judul }}</a>
                      @else
              <div class="nav_icon w-icon-dropdown-toggle"></div>
                      <div class="text-block" style="font-size: 28.1531px;color: black; text-decoration : none;">{{ $web->judul }}</div>
                @endif
            </div>
            <nav class="nav_dropdown-list w-dropdown-list">
                @foreach ($web->Page as $page)
                <a href="/{{ $web->judul }}/{{ $page->slug }}" style="font-size: 0.85rem;" class="nav_link is-dropdown-link w-dropdown-link">{{ $page->judul }}</a>
                @endforeach
            </nav>
          </div>
          @endif
          @endforeach


          @auth
          <div data-hover="true" data-delay="0" class="nav_dropdown w-dropdown">
            <div class="nav_dropdown-toggle w-dropdown-toggle">
              <div class="nav_icon w-icon-dropdown-toggle"></div>
              <div class="text-block nav-text" style="font-size:28.1531px;">Selamat Datang, {{ auth()->user()->nama }}</div>
            </div>
            <nav class="nav_dropdown-list w-dropdown-list">
              @if (auth()->user()->role == 'Admin')
              <a href="/dashboard" id="apply10" class="nav_link is-dropdown-link is-first-dropdown-link w-dropdown-link" style="font-size: 0.85rem;">Dashboard <i class="bi bi-layout-text-sidebar-reverse"></i></a>
              @endif
              <form action="/logout" method="post" class="nav_link is-dropdown-link w-dropdown-link">
                @csrf
                <button type="submit" id="apply11" style="font-size: 0.85rem;">Logout<i class="bi bi-box-arrow-right"></i></button>
            </form>
            </nav>
          </div>
          @else
          <a href="/login" class="text-block nav-text nav_icon nav_link nav_link" style="font-size:28.1531px;text-decoration : none;">Login<i class="bi bi-box-arrow-in-right"></i></a>
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
