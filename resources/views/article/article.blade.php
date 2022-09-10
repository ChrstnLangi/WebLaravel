@extends('layouts.main')

@section('contain')
<header>
    <div style="background-color: #83d2d9;">
        <div>
            <div class="row" style="padding: 20% 3% 1% 3%">
                <div class="col-4" style="padding-left: 6%">
                    <div class="homepage-header_content">
                        <div data-w-id="5fb4b4db-d69c-5d88-8c1a-2cd78f94baf3" style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="homepage-header_heading-wrapper">
                            <h2 class="homepage_header_heading" style="font-size: 350%;">{{ $homepage[5]['judul_hitam'] }}<span class="heading-highlight" style="background-color : black; border-radius : 20px"> {{ $homepage[5]['judul_putih'] }}</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group" style=" margin-top: 12%;">
                        <input type="search" style="padding: 1% 2%;" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-primary">search</button>
                      </div>
                </div>
            </div>
        </div>
    </div>
  </header>

@include('article.news')
@endsection
