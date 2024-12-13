<html lang="en">
@include('layouts.head')

<body>

    <!-- =============== START OF WRAPPER =============== -->
    <div class="wrapper">
        <main class="login-register-page"
            style="background-image: url({{ asset('images/branding/posters/movie-collection.webp') }})">
            <div class="container">

                <!-- =============== START OF LOGIN & REGISTER POPUP =============== -->
                <div class="small-dialog login-register">

                    <!-- ===== Start of Signin wrapper ===== -->
                    <div class="signin-wrapper">
                        <div class="small-dialog-headline">
                            <h4 class="text-center">تسجيل الدخول</h4>
                        </div>


                        <div class="small-dialog-content">

                            <!-- Start of Login form -->
                            <form id="login_form" method="post" action="login">
                                @csrf

                                <div class="form-group">
                                    <label for="email">البريدالإلكتروني</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="ادخل البريد الإلكتروني" required />
                                </div>

                                <div class="form-group">
                                    <label for="password">كلمة المرور</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="ادخل كلمة المرور" required />
                                </div>

                                <div class="form-group">
                                    <div class="checkbox pad-bottom-10">
                                        <input id="remember-me" type="checkbox" name="remember-me" value="yes">
                                        <label for="remember-me">حفظ بيانات تسجيل الدخول</label>
                                    </div>
                                </div>

                                @include('components.error-message', ['field_name' => 'email'])
                                <div class="form-group">
                                    <input type="submit" value="تسجيل الدخول" class="btn btn-main btn-effect nomargin" />
                                </div>
                            </form>
                            <!-- End of Login form -->

                            <div class="bottom-links">
                                <span>
                                    ليس لديك حساب؟
                                    <a href="{{ route('register') }}">إنشاء حساب</a>
                                </span>
                            </div>
                        </div>

                    </div>
                    <!-- ===== End of Signin wrapper ===== -->




                    <!-- ===== Start of Forget Password wrapper ===== -->
                    <div class="forgetpassword-wrapper">
                        <div class="small-dialog-headline">
                            <h4 class="text-center">نسيت كلمة المرور</h4>
                        </div>

                        <div class="small-dialog-content">

                            <!-- Start of Forger Password form -->
                            <form id="forget_pass_form" action="#" method="post">
                                <p class="status"></p>

                                <div class="form-group">
                                    <label for="password">البريد الإلكتروني</label>
                                    <input type="email" name="user_login" class="form-control" id="email3"
                                        placeholder="البريد الإلكتروني" />
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="إرسال" value="Get New Password"
                                        class="btn btn-main btn-effect nomargin" />
                                </div>
                            </form>
                            <!-- End of Forger Password form -->

                            <div class="bottom-links">
                                <a class="cancelClick">إلغاء</a>
                            </div>

                        </div><!-- .small-dialog-content -->

                    </div>
                    <!-- ===== End of Forget Password wrapper ===== -->

                </div>
                <!-- =============== END OF LOGIN & REGISTER POPUP =============== -->

                <a href={{ route('home') }} class="text-white">الصفحة الرئيسية</a>
            </div>
        </main>
    </div>
    <!-- =============== END OF WRAPPER =============== -->

    @include('layouts.includes')
</body>

</html>
