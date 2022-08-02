<div style="background-color: #83d2d9;">
    <div class="row" style="padding-bottom: 5%;">
        <div class="col-3" style="background-color: #f6f3f6; border-radius: 10px; margin-left:8%;">
            <h2 style="margin: 10% 3% 5% 10%;">Kategori</h2>
            @for ($i = 0; $i < 10; $i++)
                <div class="form-check" style="margin-left:10%;">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    <h2 style="font-size: 125%;">Periodonsia</h2>
                    </label>
                </div>
            @endfor
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
            @for ($i = 0; $i < 3; $i++)
            <div style="border-style: solid; border-width: 3px; border-radius: 15px; margin: 1%;">
                <div class="homepage_header-text" style="text-indent: 10%; font-weight: 600; font-size: 110%; padding: 2% 1% 2% 1%; text-align: justify;">
                    ipsum dolor sit, amet consectetur adipisicing elit. Tempora in quod, ipsa ducimus veniam molestias quos ut repudiandae nobis sunt consequatur mollitia quisquam dicta alias provident consequuntur, temporibus fugiat est officiis vero quae excepturi qui nesciunt beatae? Impedit illum maiores facilis, numquam non aspernatur corporis! Sit debitis distinctio voluptatem soluta?
                </div>
                <div class="homepage_header-text" style="font-weight: 600; font-size: 130%; margin-top: -2%; text-align: right; color: #769ed7;">
                    July 2022 - Leadericko Wisnu
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>