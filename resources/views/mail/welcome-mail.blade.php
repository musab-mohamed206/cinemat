@component('mail::message')
# Welcome to {{ config('app.name') }}

Hello {{ $user->first_name }},

@if( $user->wants_manager )
شكراً على التسجيل يرجى انتظار موافقة الإدارة على حساب المسؤول الخاص بك حتى ذلك الحين سيكون حسابك كعميل<br>
ستصلك رسالة بريد إلكتروني بالموافقة على العملية<br>
يمكنك محاولة تسجيل الدخول على الرابط أدناه<br>
@else
شكراً لتسجيلك تم إنشاء حسابك<br>
يمكنك الأن تسجيل الدخول من الرابط أدناه<br>
@endif

@component('mail::button', ['url' => config('app.url').'/login'])
    تسجيل الدخول
@endcomponent

شكراً <br>
{{ config('app.name') }}
@endcomponent