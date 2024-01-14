<?php 
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php';?>

<div class="position-relative text-center">
<div class="container">

<img src="./images/giveaway.jpg" width="320" height="180">
<h1 class="display-4 fw-normal">اربح مع جعفر</h1>
<p class="lead fw-normal">باقي على فتح التسجيل</p>
<p id="demo"></p>
<p class="lead fw-normal">للسحب على نسخة مجانية من برنامج</p>
<a class="btn btn-outline-secondary" href="#">Coming soon</a>
</div>

<ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتنا على الفيسبوك بالتاريخ المذكور</li>
  <li class="list-group-item">سنقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة</li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item">وفي نهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul>
</div>

<div class="position-relative text-center">
<div class="col-md-5 p-lg-5 mx-auto my-5">
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
<h3>الرجاء أدخل معلوماتك</h3>

<div class="mb-3">
  <label for="FirstName" class="form-label">الاسم الأول</label>
  <input type="text" name="firstName" id="FirstName" class="form-control" value="<?php echo $firstName ?>" >
  <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError']?></div>
</div>
<div class="mb-3">
  <label for="LastName" class="form-label">الاسم الأخير</label>
  <input type="text" name="lastName" id="LastName" class="form-control" value="<?php echo $lastName ?>">
	<div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError']?></div>
</div>
<div class="mb-3">
  <label for="Email" class="form-label">البريد الالكتروني</label>
  <input type="text" name="email" id="Email" class="form-control" value="<?php echo $email ?>">
	<div id="emailHelp" class="form-text error"><?php echo $errors['emailError']?></div>
</div>
<button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
</div>

<div class="loader-con">
  <div id="loader">
    <canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-2 mx-auto my-5 ">
  <button type="button" id="winner" class="btn btn-primary">
   اختيار الرابح
  </button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">الرابح في المسابقة</h5>
        <button id="modal-close" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach($users as $user):?>
          <h1 class="card-title"><?php echo htmlspecialchars($user['firstName']). ' ' .htmlspecialchars($user['lastName']);?></h1>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<canvas id="confetti-canvas" style="display:none;z-index:999999;pointer-events:none"></canvas>

<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/loader.js"></script>
<script src="./js/script.js"></script>
        
</body>
</html>
	