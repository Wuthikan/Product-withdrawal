# วิธีตั้งค่าสำหรับ BackEnd Developer
เราใช้ไฟล์ `routes/web.php` เพื่อ redirect URL จาก Browser ไปยังโมดูลปลายทางที่ถูกต้อง โปรดอย่าแก้ไขไฟล์นี้เพื่อป้องกันไม่ให้ส่งผลกระทบต่อ Developer ท่านอื่น ๆ ทั้งนี้หาก Developer มีความประสงค์จะปรับแต่งค่าของ Routes นี้ ขอความกรุณาติดต่อที่เจ้าหน้าที่ผ่าน [FaceBook Pages](https://www.facebook/adiwitcoth)

# การใช้งาน PHP Artisan จาก Docker
```
docker exec -it php7 php artisan migrate
```

# การเขียนโค๊ดตามมาตรฐาน PSR-2

รายละเอียเพิ่มเติม [คลิ๊ก](http://www.php-fig.org/psr/psr-2/)

บริษัทยึดมาตรฐาน PSR-2 ในการทำงาน และตรวจรับงานผ่านกระบวนการ CI/CD โดยใช้ใช้ PHP CodeSniffer ในการตรวจสอบคุณภาพ Code ในขั้นตอนการ Test ซึ่ง Developer สามารถตรวจสอบคุณภาพ Code ได้เองด้วยเครื่องมือเดียวกันนี้ใน Docker โดยใช้คำสั่ง :
```
docker exec -it php7 php vendor/bin/phpcs --standard=PSR2 app database tests
```

นอกจากนั้น Developer ยังสามารถให้ PHP CodeSniffer ซ่อม code ให้เบื้องต้นให้โดยอัตโนมัติได้อีกด้วยเพียงใช้คำสั่ง
```
docker exec -it php7 php vendor/bin/phpcbf --standard=PSR2 app database tests
```

# การใช้งาน PhpMyAdmin
ภายหลังจากที่ได้เปิดเซิร์ฟเวอร์จำลองขึ้นมาแล้ว Developer สามารถเข้าใช้งาน PHPMyAdmin ได้โดยเปิดผ่าน browser ที่ URL (http://localhost:8888) ข้อมูลเพิ่มเติมและวิธีใช้งาน Docker [คลิ๊ก](https://docs.docker.com/get-started)

# การวางไฟล์
บริษัทฯเชื่อว่าซอฟต์แวร์คุณภาพเริ่มต้นจากโค๊ดที่เขียนขึ้นตามฟอร์แม่ทมาตรฐานสากล บริษัทฯใช้ GitLab ในการทำ Automated Testing เบื้องต้นในการลดภาระของ Software Tester ของบริษัทฯ และเป็นการช่วย Developer ในการตรวจสอบผลลัพธ์ก่อนส่งมอบงานได้แบบ Real Time โดยเข้าไปที่ `https://<project_name>.durian.software`

# ไฟล์ Test
- กรุณาเก็บไฟล์ของคุณใว้ที่ `tests/Unit/BackOffice/<project_name>/` เช่น `tests/Unit/BackOffice/Settings/NewsAndEvents/` โดยแบ่งไฟล์แยกตาม RESTful_action ดังนี้ :
    - CreateTest.php
    - DeleteTest.php
    - DestroyTest.php
    - ReadTest.php
    - RestoreTest.php
    - UpdateTest.php

และเพิ่มเติมอีก 2 TestCase คือ:
    - SearchTest.php
    - RouteTest.php

## Route

ตัวอย่างการทำ UnitTest ของ Route
```
$response = $this->call('GET', '/<project_name>');
$this->assertEquals(200, $response->status());
```

# ไฟล์ Migration
วิธีการตั้งชื่อไฟล์ ขอให้ตั้งชื่อตาม action ที่เกิดขึ้นโดยใช้ [snake_case](https://en.wikipedia.org/wiki/Snake_case) ตามคำแนะนำของ [Laravel](https://laravel.com/docs/5.5/migrations#generating-migrations) โดย Developer สามารถใช้คำสั่ง php artisan make:migration <database_action_name> -all ที่มาพร้อมกับ Laravel เพื่อช่วยในการสร้าง Migraton นี้ได้ เช่น php artisan make:migration create_dim_examples_table หรือ php artisan make:migration add_companies_to_dim_examples_table เป็นต้น
- กรุณาเก็บไฟล์ของคุณใว้ที่ `databases/migrations/` โดยไม่ต้องใส่โฟลเดอร์ย่อยอะไรเพิ่มเติม
- โปรดตั้งชื่อ table ตามที่ระบุให้ใน ER Diagram
- ใช้ชื่อ table แบบพหุพจน์ (Plural) เช่น dim_companies แทนที่จะเป็น dim_company เช่น `2017_11_21_000000_create_dim_products_table.php` ตามฟอร์แม่ท `yyyy_mm_dd_hhmmss_create_(dim/fact)_tablename(s)_table.php`

# ไฟล์ Model
- กรุณาเก็บไฟล์ของคุณใว้ที่ `app/` โดยใช้ [PascalCase](https://en.wikipedia.org/wiki/PascalCase) ไม่ต้องใส่โฟลเดอร์ย่อยอะไรเพิ่มเติม
- ตั้งชื่อ ​Model ตามชื่อ table ที่ระบุใน ER Diagram โดยตัดคำว่า dim หรือ fact ทิ้ง เช่น dim_users => User
- ในกรณีที่ Developer ได้รับงานที่มี Relationship ทั้ง dim_ และ fact_ ซึ่งมีชื่อเหมือนกัน ให้คงชื่อของ Dim ใว้ แต่เติมคำว่า Item หลัง Model ของ fact เช่น fact_users => UserItem
- ใช้ชื่อ Model แบบเอกพจน์ (Singular) เช่น Company แทนที่จะเป็น Companies
- ในกรณีที่ Developer ได้รับงานในโมดูลที่มี Relationship (ForeignKey, 1-to-many หรือ many-to-many) ขอความกรุณา Developer สร้าง Model เปล่าๆขึ้นมาเพื่อรองรับ Relationship นี้ และเพิ่ม function ที่เกี่ยวข้อง เช่น BelongsTo, HasMany, HasOne, ManyToMany เป็นต้นให้กับทางบริษัทฯด้วย
- namespace ให้ใช้ `DurianSoftware/<module_name>/<sub_module_name>` เช่น โมดูล backOffice/setting/news-and-events.php ให้ใช้ namespace ว่า `DurianSoftware/BackOffice/Settings`

# ไฟล์ Seed
- กรุณาเก็บไฟล์ของคุณใว้ที่ `databases/seeds/back-office/<project_name>/` เช่น โมดูล backOffice/setting/news-and-events.php ให้เก็บใว้ที่ `databases/seeds/back-office/setting/NewsAndEventsTableSeeder.php`
- namespace ให้ใช้ `DurianSoftware/<module_name>/<sub_module_name>` เช่น โมดูล backOffice/setting/news-and-events.php ให้ใช้ namespace ว่า `DurianSoftware/BackOffice/Settings`
- ขอความกรุณาใช้ Factory + Faker ในการสร้าง Seed โดยให้สร้างข้อทมูลตัวอย่าง อย่างน้อย 100 records เช่น Seed ของ โมดูล Pre-Order ก็จะเป็น  `DurianSoftware\Seeder\BackOffice\PreOrder\PreOrderTableSeeder.php` 

# ไฟล์ Factory
- กรุณาเก็บไฟล์ของคุณใว้ที่ `databases/factories/<project_name>` เช่นโมดูล back-office/setting/warehouse ให้วางใว้ที่ factories\back-office\setting\warehouse\WarehouseFactory.php
- ขอความกรุณาใช้ Factory + Faker ในการสร้าง Seed โดยให้สร้างข้อทมูลตัวอย่าง อย่างน้อย 100 records เช่น Seed ของ โมดูล Pre-Order ก็จะเป็น  `DurianSoftware\Seeder\BackOffice\PreOrder\PreOrderTableSeeder.php` 

# ไฟล์ Controller
เพื่อให้ Developer ทำงานได้อย่างสะดวก สามารถปิดงานได้อย่างรวดเร็ว และย่นระยะเวลาการตรวจรับงานของทีมงานบริษัทฯ ขอความกรุณา Developer ใช้ [Resource Controller](https://laravel.com/docs/5.5/controllers#resource-controllers) โดยคำนึงถึงคอนเซ็ปต์ CRUD ในการเขียน Controller
- namespace ให้ใช้ `DurianSoftware/<module_name>/<sub_module_name>` เช่น โมดูล backOffice/setting/news-and-events.php ให้ใช้ namespace ว่า `DurianSoftware/BackOffice/Settings`
- กรุณาเก็บไฟล์ของคุณใว้ที่ `app/Http/Controllers/BackOffice/` ในรูปแบบ [PascalCase](https://en.wikipedia.org/wiki/PascalCase) โดยไม่ต้องใส่โฟลเดอร์ย่อยอะไรเพิ่มเติม เช่น `DurianSoftware\Controller\BackOffice\ ... \ModuleNameController.php`

## ฟังก์ชั่น Index
กรุณาเพิ่มฟิล์ดเพื่อใช้ในการ search โดยใช้ค้นหาได้ทุกฟิล์ดโดย ทำเป็นแบบ OR ขอเพียงแค่ให้มี %search_term% ก็หาเจอ

## ฟังก์ชั่น Duplicate
ให้ Developer ใช้ route เดียวกับ create โดยทำการ GET ไปที่ /create แล้วเพิ่ม id เข้าไปต่อท้าย queryString เช่น `GET https://www.adiwit.co.th?id=8` แล้วนำ data ทั้งหมดรวมไปถึง relationship ที่เกี่ยวข้องตามข้อมูลของ model ในฐานข้อมูลมาแสดงในแบบฟอร์ม view หน้า create เพื่อให้ user ดำเนินการตรวจสอบครั้งสุดท้ายก่อน duplicate จริง *กระบวนการทั้งหมดนี้ยังไม่มีการบันทึกข้อมูลใหม่เข้าฐานข้อมูล

## ฟังก์ชั่น Delete

สำหรับการทำ ForceDelete นั้นขอให้ Developer ใช้ฟังก์ชั่นเดียวกับการทำ softDelete กล่่าวคือให้ใช้ฟังก์ชั่น destroy ที่มาให้กับ RESTful Controller อยู่แล้ว เช่น:

```
$model = Model::withTrashed()->where('id', 1)->first();
if ($model->trashed()) {
    return $model->relationship()->forceDelete();
}
return $model->relationship()->delete();
```

ทั้งนี้ Developer อาจเพิ่ม parameter ?type=soft หรือ ?type=force เข้ามาเพิ่มด้วย เพื่อเป็นการป้อกันเหตุการ user 2 ท่านคลิ๊กพร้อมกัน (ไม่บังคับ)

## ฟังก์ชั่น Delete Delete Multiple

ให้ Developer เปิด route ใหม่

```
Route::delete('<project_name>/', ['as' => '<project_name>.delete-multiple', 'uses' => 'BackOffice\<project_name>Controller@destroy']);
```

และปรับฟังก์ชั่น destroy ที่มาให้กับ RESTful Controller อยู่แล้วให้ dynamic มากขึ้น คือ รับค่าที่เป็น array เพิ่มได้ด้วย


## ฟังก์ชั่น restore
ทีมงานของบริษัทฯเข้าใจดีว่า Resource Controller นั้นไม่ได้มี function ในส่วนของการ Restore และ ForceDelete ตามที่ระบุใน ER Diagram มาให้ จึงขอความกรุณา Developer เพิ่มเติมในส่วนของฟังก์ชั่น Restore ดังนี้:

```
/**
 * Restore the specified resource from Soft Deletion.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function restore($id)
{
    $model->relationship()->restore();
    return redirect()->route('<project_name>.index')->with('success', 'Restore success');
}
```

และเพิ่ม Route ดังนี้:
```
Route::get('<project_name>/{id}/restore', ['as' => '<project_name>.restore', 'uses' => 'BackOffice\<project_name>Controller@restore']);
```

# Nested Resources Controller
ในกรณีที่ Developer ได้รับโมดูลที่เชื่อมต่อกัน เช่น Post > Comments ขอความกรุณา Developer ใช้ [Nested Resource](https://laravel.com/docs/5.1/controllers#restful-nested-resources) เพื่อให้ Developer ทำงานได้อย่างสะดวก สามารถปิดงานได้อย่างรวดเร็ว และย่นระยะเวลาการตรวจรับงานของทีมงานบริษัทฯ

# ไฟล์ View
เนื่องจากบริษัทฯ แบ่งการทำงานระหว่าง BackEnd Developer ออกจาก FrontEnd Web Developer บริษัทฯจึงขอความกรุณา BackEnd Developer เขียน Code ในส่วนของ HTML, CSS, และ​ JavaScript ให้น้อยที่สุด โดยให้คำนึงว่าจุดประสงค์ของการเขียน​ View ในครั้งนี้คือแค่ให้เพียงพอที่ FrontEnd Developer (ผู้ซึ่งไม่ถนัด Logical Coding) สามารถหยิบ code ของคุณไปวางในที่ๆเหมาะสมได้อย่างง่ายดาย
- กรุณาเก็บไฟล์ของคุณใว้ที่ `resources/views/BackOffice/<project_name>/<RESTful_action>.blade.php` เช่น โมดูล `backOffice/settings/newsAndEvents.php` เก็บใว้ที่ `resources/views/back-office/settings/`
- ในกรณีที่มีข้อมูลที่เป็น static ฝังลงในหน้าเว็ป ขอให้ developer ใช้ @lang('<project_name>.message') แทนการฝังข้อมูลลงไปในหน้าเว็ปเพื่อเป็นการรองรับการทำงานหลายภาษา (เพิ่มเติม [คลิ๊ก](https://laravel.com/docs/5.5/localization))

## การวางชื่อไฟล์แปลภาษา
กรุณาเก็บไฟล์ของคุณใว้ที่ `resources/lang/en/back-office/<project_name>/<RESTful_action>.php` เช่นโมดูล `backOffice/settings/newsAndEvents.php` ให้เก็บไฟล์ภาษาอังกฤษใว้ที่ `resources/lang/en/back-office/settings/news-and-events.php`

## สำหรับหน้า Index
กรุณาเพิ่มฟิล์ดเพื่อใช้ในการ search โดยใช้ค้นหาได้ทุกฟิล์ดโดย ทำเป็นแบบ OR ขอเพียงแค่ให้มี %search_term% ก็หาเจอ
```
<input type="search" name="search" id="search" placeholder="search" value="{{ old('search') }}" required>
```

### ตัวอย่างแสดง error message:
ชื่อไฟล์ alert localization กลาง ที่ให้ไปเรียกมาใช้ `resources/lang/en/back-office/alert.php`

## สำหรับหน้า Show
- ให้แยกแบบฟอร์มหลักออกเป็นไฟล์ใหม่ เพื่อเพื่อสามารถนำไปใช้ซ้ำได้ทั้งการสร้าง pdf สำหรับส่ง email, กด print, และแสดงบนหน้าเว็ป (show)

# ไฟล์ Request (Validation และ Message)
- กรุณาเก็บไฟล์ของคุณใว้ที่ `app/Http/Requests/<module_name>/<sub_module_name>/<project_name>/` เช่น โมดูล BackOffice/Setting/NewsAndEvents ให้วางใว้ที่ `DurianSoftware\Request\BackOffice\Setting\NewsAndEventsRequest.php`

# ไฟล์รูป และไฟล์ต่างที่ user เป็นผู้อัปโหลดขึ้นมา
เพื่อป้องกันข้อมูลส่วนตัวของ User ขอความกรุณา Developer เซฟรูปใว้ที่ `/storage/images/<project_name>s/` เช่น `/storage/images/companies/abc.png` แทนที่จะเก็บใน public (ข้อมูลเพิ่มเติม [คลิ๊ก](https://laracasts.com/discuss/channels/laravel/how-and-where-can-store-images-with-laravel?page=1))
และกรุณาเก็บไฟล์แยกตามประเภทดังนี้ : 
- ชื่อ folder มี s ต่อท้ายเป็นแบบ plural (พหูพจน์)
- ไฟล์รูป เช่น JPG PNG GIF PSD AI กรุณาเก็บไฟล์ของ user ใว้ที่ `storage/images/<module_name>/<sub_module_name>/<project_name>`s
- ไฟล์เอกสาร เช่น DOC XLS PDF กรุณาเก็บไฟล์ของ user ใว้ที่ `storage/documents/<module_name>/<sub_module_name>/<project_name>`s
- ไฟล์ฟอนต์ เช่น OTF TTF EOF กรุณาเก็บไฟล์ของ user ใว้ที่ `storage/fonts/<module_name>/<sub_module_name>/<project_name>`s
- ไฟล์เพลง เช่น MP3 WAV กรุณาเก็บไฟล์ของ user ใว้ที่ `storage/musics/<module_name>/<sub_module_name>/<project_name>`s
- ไฟล์หนัง เช่น MP4 กรุณาเก็บไฟล์ของ user ใว้ที่ `storage/movies/<module_name>/<sub_module_name>/<project_name>`s
- ไฟล์อื่นๆ เช่น ZIP EXE MSI DMG กรุณาเก็บไฟล์ของ user ใว้ที่ `storage/others/<module_name>/<sub_module_name>/<project_name>`s

# การเรียกใช้รูปที่ user เป็นผู้อัปโหลดขึ้นมา
- เพื่อเป็นการย่นระยะเวลาโหลดเพจ และ ประหยัด data 3G-4G ให้กับ user ขอความกรุณา developer ย่อขนาดไฟล์ ตามความเหมาะสมของการใช้งานก่อน (ข้อมูลเพิ่มเติม [คลิ๊ก](http://image.intervention.io/api/resize)
- สำหรับการเรียกใช้รูป บริษัทขอให้ developer ฝังรูปไปใน html แบบ base64-encoded string แทนการเปิด route ใหม่ โดยใช้คำสั่ง `<img src="{{ return Image::make(storage_path('/images/project_name>s/')->encode('data-url') }}">` (ข้อมูลเพิ่มเติม [คลิ๊ก](http://image.intervention.io/api/encode))

# Scope งาน :
- UnitTest​
- Migration
- Model
- Seed
- Factory
- Controller
- Request (AccessControl, Validation และ Message)
- JavaScript (VueJS)