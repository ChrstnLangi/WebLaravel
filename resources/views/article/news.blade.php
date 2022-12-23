@extends('layouts.main')

@section('contain')
<header>
    <div class="heading" style="background-color: white;padding-bottom: 10%"></div>
    <div class="homepage_header_heading" style="font-family: MontserratRegular; float: right; margin: -1.7% 5% 1% 0%; font-size: 90%;">28 April, 2022</div>
    <h2 style="margin-left: 5%; border-block-end: 5px; border-block-end:solid; margin-right:5%; color: #719bd7; border-block-end-color: black; padding-bottom: 1%;">DentsArticle</h2>
    <div class="homepage_header_heading" style="font-family: MontserratRegular; float: right; margin: -4.5% -8% 1% 0%; font-size: 90%;">123 Anywhere St., Any City</div>
    <div style="margin-left: 10%;margin-right: 10%;">
        <img class="img-fluid" src="/Assets/{{ $article['image'] }}" alt="">
        <div style="background-color: #6d9ed8; padding: 1% 2% 2% 0%; margin-left: 75%; z-index: 999; margin-top: -5%; position: relative; margin-right: -3%;">
            <div class="homepage_header_heading" style="font-family: MontserratRegular; text-align: right; line-height: 140%; font-size: 120%;">
                Journal
                By {{ $article["author"] }},
                {{ $article["date"] }}
            </div>
        </div>
    </div>
</header>
<div class="heading">
    <h2 style="margin: 1% 10% 0% 10%; font-size: 100%;">{{ $article["title"] }}.</h2>
</div>
<div class="homepage_header-text" style="margin: 2% 10% 5% 10%; text-indent: 5%; text-align: justify; font-weight: 400;">
    {{ $article["body"] }}
</div>


@endsection
