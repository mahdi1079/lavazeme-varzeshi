

<?php
include("header.php");
?>

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header text-center bg-primary text-white">
      <h5>فرم ثبت اطلاعات ارسال بسته</h5>
    </div>
    <div class="card-body">

      <form action="s.php" method="POST">

        <div class="mb-3">
          <label for="fullname" class="form-label">نام و نام خانوادگی</label>
          <input type="text" class="form-control" id="fullname" name="fullname" required>
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">شماره تماس</label>
          <input type="tel" class="form-control" id="phone" name="phone" required pattern="09[0-9]{9}" placeholder="مثال: 09123456789">
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">آدرس دقیق</label>
          <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>

        <div class="mb-3">
          <label for="zipcode" class="form-label">کد پستی</label>
          <input type="text" class="form-control" id="zipcode" name="zipcode" required pattern="[0-9]{10}">
        </div>

        <div class="mb-3">
          <label for="notes" class="form-label">توضیحات اضافی</label>
          <textarea class="form-control" id="notes" name="notes" rows="2"></textarea>
        </div>

        <button type="submit" class="btn btn-success w-100">ثبت اطلاعات</button>

      </form>
    </div>
  </div>
</div>

<?php
$_SESSION["kharid"]=true;

include("footer.html");
?>
