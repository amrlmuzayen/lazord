# مشروع لازورد (Laravel Backend)

موقع لمختبر أسنان رقمي. استلمت قالباً جاهزاً من ملفات HTML وCSS وJS، وحوّلته إلى مشروع Laravel كامل **دون تغيير التصميم**. العمل هنا على الباك إند فقط.

## ما تم تنفيذه

- **قالب Blade مشترك:** `layouts/app` مع `partials/navbar` و`partials/footer`، وكل الصفحات تمدّده.
- **سبع صفحات** تعمل من Routes وControllers: الرئيسية، لماذا لازورد، خدمات المختبرات، الحلول، التسعير، التعلم، تسجيل الدخول.
- **محتوى من قاعدة البيانات:** الأسئلة الشائعة، المنتجات، الباقات مع مزاياها (علاقة `hasMany`)، والمقالات.
- **نموذج التواصل:** تحقق في السيرفر عبر Form Request، حماية CSRF، وحفظ الطلبات في جدول.
- **تسجيل الدخول والخروج:** كلمات مرور مشفّرة، وحماية بـ `guest` و`auth` و`throttle`.
- **Seeders** تملأ قاعدة البيانات بأمر واحد.

## المتطلبات

- PHP 8.2 أو أحدث
- Composer
- MySQL (مثلاً عبر XAMPP)

## التشغيل

```bash
git clone https://github.com/amrlmuzayen/lazord.git
cd lazord
composer install
cp .env.example .env
php artisan key:generate
```

أنشئ قاعدة بيانات MySQL فارغة باسم `lazord`، ثم تأكد من هذه الإعدادات في ملف `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lazord
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=database
CACHE_STORE=file
QUEUE_CONNECTION=sync
```

ثم ابنِ الجداول واملأها بالبيانات، وشغّل المشروع:

```bash
php artisan migrate:fresh --seed
php artisan serve
```

افتح `http://127.0.0.1:8000`.

> الأمر `migrate:fresh --seed` يمسح الجداول ويعيد بناءها، فلا تشغّله على بيانات تريد الاحتفاظ بها.

## حساب تجريبي

| البريد | كلمة المرور |
|---|---|
| `test@example.com` | `12345678` |

## المسارات (Routes)

| المسار | الطريقة | الوصف |
|---|---|---|
| `/` | GET | الصفحة الرئيسية |
| `/why-lazord` | GET | لماذا لازورد (الأسئلة الشائعة) |
| `/lab-services` | GET | خدمات المختبرات (المنتجات) |
| `/solutions` | GET | الحلول (المقالات) |
| `/pricing` | GET | التسعير (الباقات ونموذج التواصل) |
| `/learn` | GET | التعلم (مقالات وأسئلة) |
| `/contact` | POST | استقبال نموذج التواصل |
| `/login` | GET, POST | تسجيل الدخول (للزوار فقط، مع `throttle:5,1`) |
| `/logout` | POST | تسجيل الخروج (للمسجّلين فقط) |

## قاعدة البيانات

| الجدول | الغرض |
|---|---|
| `faqs` | الأسئلة الشائعة |
| `products` | المنتجات |
| `plans` | الباقات |
| `plan_features` | مزايا كل باقة (مرتبطة بـ `plans`) |
| `articles` | المقالات (`type` و`is_featured` يفرّقان بين أنواعها) |
| `contact_requests` | طلبات نموذج التواصل |
| `users` و`sessions` | المستخدمون والجلسات |

## هيكل الملفات المهمة

```
app/Http/Controllers/    PageController, FaqController, ContactRequestController, AuthController
app/Http/Requests/       StoreContactRequest
app/Models/              Faq, Product, Plan, PlanFeature, Article, ContactRequest, User
database/migrations/     جداول المشروع
database/seeders/        بيانات أولية، وDatabaseSeeder يجمعها
resources/views/         layouts, partials, pages
routes/web.php           كل المسارات
public/                  css, js, images
```

## غير منفّذ بعد

- زر «تسجيل الخروج» في واجهة الموقع (الـ Route والدالة موجودتان).
- صفحة لعرض طلبات التواصل.
- صفحة إنشاء حساب (لا تصميم لها في القالب الأصلي).
- اختبارات خاصة بالمشروع.
