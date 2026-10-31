@extends('layouts.app')

@section('title', 'تسجيل الدخول — لازورد')

@section('content')
<section class="login-section">
  <div class="login-card">
    <a href="{{ route('home') }}" class="logo login-logo">لازورد</a>
    <h1>تسجيل الدخول</h1>
    <p class="login-sub">أدخل بياناتك للوصول إلى حسابك</p>

    <form class="login-form" id="loginForm" method="POST" action="{{ route('login.store') }}">
      @csrf

      <div class="form-group">
        <label for="loginEmail">البريد الإلكتروني</label>
        <input type="email" id="loginEmail" name="email" value="{{ old('email') }}" placeholder="example@gmail.com" />
        @error('email') <small style="color:#e74c3c">{{ $message }}</small> @enderror
      </div>

      <div class="form-group">
        <label for="loginPassword">كلمة المرور</label>
        <input type="password" id="loginPassword" name="password" placeholder="••••••••" />
        @error('password') <small style="color:#e74c3c">{{ $message }}</small> @enderror
      </div>

      <div class="login-remember">
        <label class="checkbox-label">
          <input type="checkbox" id="remember" name="remember" />
          <span>تذكرني</span>
        </label>
        <a href="#" class="forgot-link">نسيت كلمة المرور؟</a>
      </div>

      <button type="submit" class="btn-submit login-submit">تسجيل الدخول</button>
    </form>

    <p class="login-register">ليس لديك حساب؟ <a href="{{ route('pricing') }}" class="link-green">سجّل الآن مجاناً</a></p>
  </div>
</section>
@endsection