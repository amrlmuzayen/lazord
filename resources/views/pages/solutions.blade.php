@extends('layouts.app')

@section('title', 'لازورد — مختبر الأسنان الرقمي')

@section('content')

<main>


    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>الحلول الرقمية لعيادتك</h1>
          <p>سير عمل رقمية مثبتة وحلول مصممة لكل مرحلة من مراحل ممارستك — سواء كنت تبدأ أو تتوسع.</p>
          <a href="{{ route('pricing') }}" class="btn-primary">ابدأ الآن</a>
        </div>
      </div>
    </section>

    <!-- WORKFLOW -->
    <section class="workflow">
      <div class="container workflow-container">
        <div class="workflow-image">
          <img src="{{ asset('images/workflow.jpg') }}" alt="سير العمل" />
        </div>
        <div class="workflow-content">
          <h2>قم بتحويل ممارساتك باستخدام سير عمل رقمي مثبت</h2>
          <p class="workflow-sub">استمتع بمستوى من التحكم لم يكن ممكناً من قبل.</p>
          <ul class="workflow-list">
            <li><span class="check">✓</span> المسح الضوئي بدقة وثقة</li>
            <li><span class="check">✓</span> اطلب العمل المختبري باستخدام الوصفات الطبية الرقمية</li>
            <li><span class="check">✓</span> الموافقة على التصاميم الرقمية قبل التصنيع</li>
            <li><span class="check">✓</span> تتبع الحالات في الوقت الفعلي</li>
            <li><span class="check">✓</span> تسليم العلاج للمريض في أيام</li>
            <li><span class="check">✓</span><a href="{{ route('why-lazord') }}" class="link-green"> كيف يتم مقارنة لازورد مع
                مختبرات الأسنان الأخرى</a></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- SCANNING -->
    <section class="scanning">
      <div class="container">
        <h2 class="section-title">حلول طب الأسنان الترميمية لتناسب احتياجاتك</h2>
        <div class="scanning-grid">
          <div class="scanning-card dark">
            <h3>هل أنت جديد في مجال المسح الضوئي؟</h3>
            <p>تقديم نتائج موثوقة للمرضى باستخدام التكنولوجيا والأدوات المبتكرة التي تمنحك التحكم النهائي</p>
            <ul>
              <li><span class="check-icon">✓</span> المسح الضوئي 3Shape TRIOS السنجي</li>
              <li><span class="check-icon">✓</span> سير العمل الكامل الموجه</li>
              <li><span class="check-icon">✓</span> دعفات القبول لتقديم الأسنان بأكثر من ذلك</li>
              <li><span class="check-icon">✓</span> سجلات تصميم لإضافة الطباعة الإنتهائية إلى المهمة</li>
            </ul>
            <a href="{{ route('pricing') }}" class="btn-green">تسجيل الآن</a>
          </div>
          <div class="scanning-card light">
            <h3>هل تقوم بالمسح الضوئي بالفعل؟</h3>
            <p>قم بتنمية ممارستك من خلال الانتقال إلى سير العمل الرقمي باستخدام مجموعة أدوات طب الأسنان الرقمية المبنية
              لدينا</p>
            <ul>
              <li><span class="check-icon">✓</span> المسح الضوئي 3Shape TIROS السنجي</li>
              <li><span class="check-icon">✓</span> تدفقات المسح الضوئي الموجهة</li>
              <li><span class="check-icon">✓</span> مراجعات الأسنان الضوئي الخاصة بلغة</li>
              <li><span class="check-icon">✓</span> تدريب وتأقلم غير محدود</li>
            </ul>
            <a href="{{ route('pricing') }}" class="btn-dark">احصل على كل الفوائح المسح الضوئي الخاص بك</a>
          </div>
        </div>
      </div>
    </section>

    <!-- BLOG / CASE STUDIES -->
    <section class="blog">
      <div class="container">
        <p class="blog-intro">تعرف على المزيد حول مستقبل طب الأسنان وكيف يشكله لازورد.</p>
       <div class="blog-grid">
    <div class="blog-main">
        <img src="{{ asset('images/' . $featured->image) }}" alt="{{ $featured->title }}" />
        <p class="blog-label">{{ $featured->title }}</p>
    </div>
    <div class="blog-side">
        @foreach($side as $article)
            <div class="blog-thumb">
                <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->title }}" />
                <p>{{ $article->title }}</p>
            </div>
        @endforeach
    </div>
</div>
      </div>
    </section>

  </main>
  
  @endsection