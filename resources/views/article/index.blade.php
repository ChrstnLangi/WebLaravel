@extends('layouts.main')

@section('contain')
<header>
    <div style="background-color: #83d2d9;">
        <div>
            <div class="row" style="padding: 20% 6% 1% 4%">
                <div class="col-4" style="padding-left: 6%">
                    <div class="homepage-header_content">
                        <div data-w-id="5fb4b4db-d69c-5d88-8c1a-2cd78f94baf3" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_heading-wrapper">
                            <h2 class="homepage_header_heading" style="font-size: 350%;">DENTS.TALK<span class="heading-highlight" style="background-color : black; border-radius : 20px; padding-right: 3%;"> Articles</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col" style="margin-top: 15%;">
                    <div class="input-group rounded">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                          <a data-feather="search"></a>
                        </span>
                      </div>
                </div>
            </div>
        </div>
    </div>
  </header>

  <div style="background-color: #83d2d9;">
    <div class="row" style="padding-bottom: 5%;">
        <div class="col-3" style="background-color: #f6f3f6; border-radius: 10px; margin-left:8%;">
            <h2 style="margin: 10% 3% 5% 10%;">Kategori</h2>
            @foreach ($categories as $category)
                <ul style="margin-left: 7%;">
                    <li><a style="text-decoration: none" href="Article/categories/{{ $category['slug'] }}"><h2 style="font-size: 130%">{{ $category['name'] }}</h2></a></li>
                </ul>
            @endforeach
            <h2 style="margin: 1% 3% 5% 10%;">Bahasa</h2>
                <div class="form-check" style="margin-left:10%;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    <h2 style="font-size: 125%;">Indonesia</h2>
                    </label>
                </div>
                <div class="form-check" style="margin-left:10%;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    <h2 style="font-size: 125%;">Inggris</h2>
                    </label>
                </div>
            </div>
        <div class="col-7" style="background-color: #f6f3f6; border-radius: 10px; margin-left: 2%;">
            @foreach ( $post as $p)
            <div style="margin: 1%;">
                <a href="Article/{{ $p['slug'] }}" style="text-decoration:none;"><div class="homepage_header-text" style="font-family: MontserratRegular;font-weight: 600; font-size: 180%; padding: 2% 1% 2% 1%; text-align: justify;">
                    {{ $p["title"] }}
                </div></a>
                <div class="homepage_header-text" style="font-weight: 600; font-size: 130%; margin: -1% 0% 0% 1%; color: #81a6db;">
                    {{ $p["date"] }}
                </div>
                <div class="homepage_header-text" style="font-weight: 600; font-size: 130%; color: #81a6db;">
                    <div data-feather="user"></div>
                    {{ $p["author"] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    feather.replace()
</script>
@endsection
