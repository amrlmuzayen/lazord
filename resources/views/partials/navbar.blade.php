  <header class="navbar">
    <div class="nav-container">
      <a href="{{ route('home') }}" class="logo">لازورد</a>
      <nav class="nav-links">
        <a href="{{ route('why-lazord') }}">لماذا لازورد</a>
        <a href="{{ route('lab-services') }}">خدمات المختبرات</a>
        <a  href="{{ route('solutions') }}">الحلول</a>
        <a href="{{ route('pricing') }}">التسعير</a>
        <a href="{{ route('learn') }}">التعلم</a>
      </nav>
      <div class="nav-actions">
        <span class="phone">هاتف: +(972)0597108400</span>
        <a href="{{ route('login') }}" class="btn-login">تسجيل الدخول</a>
        <a href="{{ route('pricing') }}" class="btn-cta">ابدأ الآن</a>
      </div>
      <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="القائمة">
        <span></span><span></span><span></span>
      </button>
    </div>
    <div class="mobile-menu" id="mobileMenu">
      <a  href="{{ route('why-lazord') }}">لماذا لازورد</a>
      <a href="{{ route('lab-services') }}">خدمات المختبرات</a>
      <a  href="{{ route('solutions') }}">الحلول</a>
      <a href="{{ route('pricing') }}">التسعير</a>
      <a href="{{ route('learn') }}">التعلم</a>
      <a href="{{ route('pricing') }}" class="btn-cta mobile-cta">ابدأ الآن</a>
    </div>
  </header>
