@extends('layouts.layout')

@section('content')
    <section class="page-header overlay-gradient"
        style="background: url({{ asset('images/branding/posters/movie-collection.webp') }});">
        <div class="container">
            <div class="inner">
                <h2 class="title">تواصل معنا</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
                    <li>تواصل معنا</li>
                </ol>
            </div>
        </div>
    </section>

    <main class="contact-page ptb100">
        <div class="container">
            <div class="row">


                <!-- Start of Contact Details -->
                <div class="col-md-4 col-sm-12">
                    <h3 class="title">نبذة</h3>

                    <div class="details-wrapper">
                        <p>{{ config('app.name') }} نساعدك على حجز تذاكر لفيلمك المفضل دون الحاجة لتأخيرك عن مغامرتك المختارة من قبلك ويسعدنا أن نكون جزء منها</p>

                        @php
                            $url = preg_replace('#^https?://#', '', url('/'));
                            $email = 'info@' . $url;
                        @endphp

                        <ul class="contact-details">
                            <li>
                                <i class="icon-phone"></i>
                                <strong>:رقم الهاتف</strong>
                                <span>(123) 123-456 </span>
                            </li>
                            <li>
                                <i class="icon-printer"></i>
                                <strong>:الفاكس</strong>
                                <span>(123) 123-456 </span>
                            </li>
                            <li>
                                <i class="icon-globe"></i>
                                <strong>:الموقع</strong>
                                <span><a href="#">{{ $url }}</a></span>
                            </li>
                            <li>
                                <i class="icon-paper-plane"></i>
                                <strong>:البريد الإلكتروني</strong>
                                <span><a href="#">{{ $email }}</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Start of Contact Details -->


                <!-- Start of Contact Form -->
                <div class="col-md-8 col-sm-12">
                    <h3 class="title">للتواصل</h3>

                    <!-- Start of Contact Form -->
                    <form id="contact-form">

                        <!-- contact result -->
                        <div id="contact-result"></div>
                        <!-- end of contact result -->

                        <!-- Form Group -->
                        <div class="form-group">
                            <input class="form-control input-box" type="text" name="name" placeholder="اسمك"
                                autocomplete="off"
                                style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                            <input class="form-control input-box" type="email" name="email" placeholder="بريدك الإلكتروني"
                                autocomplete="off">
                        </div>


                        <!-- Form Group -->
                        <div class="form-group">
                            <input class="form-control input-box" type="text" name="subject" placeholder="الموضوع"
                                autocomplete="off">
                        </div>

                        <!-- Form Group -->
                        <div class="form-group mb20">
                            <textarea class="form-control textarea-box" rows="8" name="message" placeholder="...رسالتك"></textarea>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group text-center">
                            <button class="btn btn-main btn-effect" type="submit">إرسال</button>
                        </div>
                    </form>
                    <!-- End of Contact Form -->
                </div>
                <!-- Start of Contact Form -->

            </div>
        </div>
    </main>
@endsection
