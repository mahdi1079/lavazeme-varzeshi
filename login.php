<?php
include("header.html");
?>
<section id="d6" class="col-10 list-inline m-2 card ">




<div class="col-6 m-5">
   <div class="mb-5">
  <label for="exampleFormControlInput1" class="form-label">نام کاربری</label>
  <input type="email" class="form-control" id="name" placeholder="-------">
</div>


<label for="inputPassword5" class="form-label">رمز</label>
<input type="password" id="inputPassword5" class="form-control " aria-describedby="***********">
<div id="passwordHelpBlock" class="form-text ">
رمز عبور شما باید 8 تا 20 کاراکتر داشته باشد، دارای حروف و اعداد باشد و نباید دارای فاصله، کاراکترهای خاص یا ایموجی باشد.  



   
   <div class="mb-5">
  <label for="inputPassword5" class="form-label">تکرار رمز</label>
  <input type="password" id="ramz" class="form-control " aria-describedby="***********">
</div>


<label for="inputPassword5" class="form-label">ایمیل</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
<div id="passwordHelpBlock" class="form-text ">
</div>

<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" onclick="ngh()" id="log">Confirm identity</button>
  </div>
<script src="login.js"></script>
<?php
include("footer.html");
?>
  