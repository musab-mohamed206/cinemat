<div class="reservation-movie-details pt-2 pb-2">
    <div>:الفيلم <strong id="movie-title" class="font-weight-bold">{{ $movie->title }}</strong></div>
    <div>:التاريخ <strong id="show-date" class="font-weight-bold"></strong></div>
    <div>:السعر <strong class="font-weight-bold"><strong id="show-price"></strong> {{ config('app.currency') }}</strong></div>
</div>

<ul class="showcase">
    <li>
        <div class="seat"></div>
        <small>متاح</small>
    </li>
    <li>
        <div class="seat selected"></div>
        <small>تم الإختيار</small>
    </li>
    <li>
        <div class="seat sold"></div>
        <small>غير متاح</small>
    </li>
</ul>
<div class="container cinema-container">
    <div class="screen"></div>
    <div class="seats-container">

    </div>
</div>

<p class="reservation-text">
    لقد  تم إختيار <span id="seats-count">0</span> سعر المقاعد <span id="total-price">0</span> {{ config('app.currency') }}
</p>