@extends('layouts.layout')

@section('content')
    @include('home.hero-slider')

    <!-- =============== START OF TOP MOVIES SECTION =============== -->
    <section class="top-movies2">
        <div class="container">
            <div class="row">
                @php
                    $containerClasses = ['col-sm-6 col-xs-12', 'col-sm-6 d-none d-sm-block', 'd-none d-lg-block', 'd-none d-lg-block'];
                @endphp
                @foreach ($top4movies as $movie)
                    @include('components.movie-item-dark', [
                        'movie' => $movie,
                        'containerClass' => $containerClasses[$loop->index],
                    ])
                @endforeach
            </div>
        </div>
    </section>
    <!-- =============== END OF TOP MOVIES SECTION =============== -->

    <!-- =============== START OF HOW IT WORKS SECTION =============== -->
    <section class="how-it-works4 pt50 pb100">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="title">كيف تستمتع معنا؟</h2>
                    <h6 class="subtitle">تشعر بالحيرة؟ إبدا من هنا</h6>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="icon-box2">
                        <i class="fa fa-film"></i>
                        <h4 class="title">اختر فيلمك</h4>
                        <p>تصفح مجموعتنا الواسعة والمثيرة من الأفلام مازلت لا تعرف ماذا تشاهد؟ ألق نظرة على <a href={{ route('movies.index') }} class="text-primary">توصياتنا.</a></p>
                    </div>

                    <div class="icon-box2">
                        <i class="fa fa-ticket"></i>
                        <h4 class="title">احجز تذكرتك</h4>
                        <p>احجز تذكرتك الأن لفيلمك المفضل</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="icon-box2">
                        <i class="icon-login"></i>
                        <h4 class="title">إنشاء حساب؟</h4>
                        <p>سجل في موقعنا لحجز التذاكر ودفع ثمنها وللبقاء على إطلاع بأحدث العروض و الأخبار</p>
                    </div>

                    <div class="icon-box2">
                        <i class="icon-heart"></i>
                        <h4 class="title">!استمتع</h4>
                        <p>استمتع بمشاهدة فيلمك في إحدى قاعاتنا واطلب وجبات خفيفة أثناء تواجدك في السينما,فرحتك هي أولويتنا</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =============== END OF HOW IT WORKS SECTION =============== -->

    <!-- =============== START OF LATEST RELEASES SECTION =============== -->
    <section class="latest-releases bg-light ptb100">
        <div class="container">

            <!-- Start of row -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="title">أحدث أفلامنا</h2>
                    <h6 class="subtitle">شاهد احدث مجموعة من أفلامنا</h6>
                </div>
            </div>
            <!-- End of row -->
        </div>
        <!-- End of Container -->

        <!-- Start of Latest Releases Slider -->
        <div class="owl-carousel latest-releases-slider">
            @each('components.movie-item', $newest_movies, 'movie')
        </div>
        <!-- End of Latest Releases Slider -->

        <div class="text-center pt-3">
            <a class="btn btn-main btn-effect" href="{{ route('movies.index') }}">عرض كل الأفلام</a>
        </div>
    </section>
    <!-- =============== END OF LATEST RELEASES SECTION =============== -->

    <!-- =============== START OF FEATURES SECTION =============== -->
    <section class="features">
        <div class="row">

            <div class="col-md-6 col-sm-12 with-bg overlay-gradient"
                style="background: url({{ asset('images/other/people-cinema.jpg') }})"></div>

            <div class="col-md-6 col-sm-12 bg-white">
                <div class="features-wrapper">
                    <h3 class="title"> !شاهد جميع الأفلام الجديدة بمجرد صدورها</h3>
                    @guest
                        <p>!اشترك أو سجل الأن لحجز تذاكرك الخاصة واحصل على إشعار بالعروض الجديدة</p>
                        <a class="btn btn-main btn-effect" href="{{ route('register') }}">للإشتراك</a>
                    @endguest

                    @auth
                        <p>ابدأ بحجز تذاكرك واستمتع بأحدث وأروع الأفلام</p>
                        <a class="btn btn-main btn-effect" href="{{ route('movies.index') }}">عرض الأفلام</a>
                    @endauth
                </div>
            </div>

        </div>
    </section>
    <!-- =============== END OF FEATURES SECTION =============== -->

    <!-- =============== END OF SUBSCRIBE SECTION =============== -->
    <section class="subscribe bg-light2 ptb100">
        <div class="container">

            <!-- Start of row -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    @guest
                        <h2 class="title">!الإنضمام إلينا الأن</h2>
                        <h6 class="subtitle">ادخل البريد الإلكتروني لتصبح على إطلاع بكل جديد</h6>
                    @endguest

                    @auth
                        <h2 class="title">شكراً لك لمشاركتنا  {{ config('app.name') }}!</h2>
                        <h6 class="subtitle">!نتمنى أنك استمتعت بمغامرتك معانا</h6>
                    @endauth
                </div>
            </div>
            <!-- End of row -->


            @guest
                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 col-sm-10 col-12">

                        <!-- Subscribe Form -->
                        <form method="POST" action="{{ route('leads') }}" class="mt50">
                            @csrf
                            <!-- Form -->
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="ادخل بريدك الإلكتروني" autocomplete="off">
                                    <label for="email"></label>
                                    <button type="submit" class="btn btn-main btn-effect">!انضم إلينا</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- End of row -->
            @endguest


        </div>
    </section>
    @include('components.flash-message')
    <!-- =============== END OF SUBSCRIBE SECTION =============== -->
@endsection
