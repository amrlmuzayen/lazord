@extends('layouts.app')

@section('title', 'لازورد — مختبر الأسنان الرقمي')

@section('content')

  <main>

    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>باقات وأسعار لازورد</h1>
          <p>اختر الباقة التي تناسب احتياجات عيادتك — ابدأ صغيراً وتوسع بلا حدود.</p>
        </div>
      </div>
    </section>

    <!-- PRICING CARDS -->
    <section class="pricing-section">
      <div class="container">
        <h2 class="section-title">اختر الباقة المناسبة</h2>
        <p class="section-subtitle">جميع الباقات تشمل الوصول الكامل إلى منصة لازورد الرقمية، مع دعم متخصص وتدريب غير
          محدود.</p>
        <div class="pricing-grid">
          @foreach($plans as $plan)
            <div class="pricing-card {{ $plan->is_popular ? 'pricing-popular' : '' }}">
              <div class="pricing-badge {{ $plan->is_popular ? 'popular' : '' }}">{{ $plan->badge }}</div>
              <h3>{{ $plan->name }}</h3>
              <div class="pricing-price">
                <span class="price-amount">{{ $plan->price_label }}</span>
                <span class="price-period">{{ $plan->price_period }}</span>
              </div>
              <p class="pricing-desc">{{ $plan->description }}</p>
              <ul class="pricing-features">
                @foreach($plan->features as $feature)
                  @if($feature->is_included)
                    <li><span class="check-icon">✓</span> {{ $feature->title }}</li>
                  @else
                    <li class="disabled"><span>✗</span> {{ $feature->title }}</li>
                  @endif
                @endforeach
              </ul>
              <a href="#contact" class="{{ $plan->is_popular ? 'btn-primary' : 'btn-outline' }} pricing-btn">
                {{ $plan->cta_text }}
              </a>
            </div>
          @endforeach



        </div>
      </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="contact" id="contact">
      <div class="container contact-container">
        <div class="contact-info">
          <h2>تواصل معنا</h2>
          <p>قم بتطوير ممارساتك مع لازورد — الشريك الرقمي المتكامل الوحيد وقم بتحسين تجربة المريض والحلول السريرية ونمو
            الأعمال.</p>
          <p class="contact-start"><strong>ابدأ اليوم عن طريق ملء النموذج.</strong></p>
          <p class="contact-legal">من خلال تقديم النموذج أعلاه، أوافق على شروط الاستخدام وسياسة الخصوصية الخاصة بشركة
            لازورد. يوافق على تلقي الاتصال بي من قبل شركة لازورد عبر رسالة نصية باستخدام معلومات الاتصال المقدمة. قد تم
            تطبيق أسعار الرسائل والبيانات ويمكنني الرد بـ STOP لإلغاء الاشتراك في أي وقت.</p>
        </div>
        <form class="contact-form" id="contactForm" method="POST" action="{{ route('contact.store') }}">
          @csrf

          @if(session('success'))
            <p style="color: #27ae60; font-weight: 600;">{{ session('success') }}</p>
          @endif

          <div class="form-row">
            <div class="form-group">
              <label for="firstName">الاسم الأول:</label>
              <input type="text" id="firstName" name="first_name" value="{{ old('first_name') }}" placeholder="الاسم" />
              @error('first_name') <small style="color:#e74c3c">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
              <label for="lastName">اسم العائلة:</label>
              <input type="text" id="lastName" name="last_name" value="{{ old('last_name') }}"
                placeholder="اسم العائلة" />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="email">عنوان البريد الإلكتروني:</label>
              <input type="email" id="email" name="email" value="{{ old('email') }}"
                placeholder="عنوان البريد الإلكتروني" />
              @error('email') <small style="color:#e74c3c">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
              <label for="phone">رقم الهاتف:</label>
              <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="رقم الهاتف" />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="clinic">اسم العيادة:</label>
              <input type="text" id="clinic" name="clinic_name" value="{{ old('clinic_name') }}"
                placeholder="اسم العيادة" />
            </div>
            <div class="form-group">
              <label for="role">دورك في العيادة:</label>
              <input type="text" id="role" name="role" value="{{ old('role') }}" placeholder="دورك في العيادة" />
            </div>
          </div>

          <button type="submit" class="btn-submit">ابدأ الآن</button>
        </form>
      </div>
    </section>

  </main>

@endsection