<?php
include 'link.php';
?>

<style>
  .label{
    padding:10px;
  }
</style>

  <h1 style="padding:10px;color:#303030;text-align:center;">Student Details</h1>

<form style="margin:30px;padding:10px; background-color:#f0f5f5; border-radius:20px" action="studentInsert.php" method="post">
  <div class="row">
    <div class="col">
      <label class="label">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Your Name..." required>
    </div>
    <div class="col">
       <label class="label">Stundet ID</label>
      <input type="text" class="form-control" name="studentId" placeholder="Your Student ID..." required>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
       <label class="label">Phone</label>
      <input type="Number" class="form-control" name="phone" placeholder="Your Phone Number..." required>
    </div>
    <div class="col">
       <label class="label">Batch</label>
      <input type="text" class="form-control" name="batch" placeholder="Your Batch..." required>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
       <label class="label">Email</label>
      <input type="Email" class="form-control" name="email" placeholder="Your Email..." required>
    </div>
    <div class="col">
       <label class="label">Age</label>
      <input type="Number" class="form-control" name="age" placeholder="Your Age..." required>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
       <label class="label">Gender</label>
      <input type="Gender" class="form-control" name="gender" placeholder="Your Gender..." required>
    </div>
    <div class="col">
       <label class="label">Race</label>
      <input type="text" class="form-control" name="race" placeholder="Your Race..." required>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
       <label class="label">Religion</label>
      <input type="text" class="form-control" name="religion" placeholder="Your Religion..." required>
    </div>
    <div class="col">
       <label class="label">Nationality</label>
      <input type="text" class="form-control" name="nationality" placeholder="Your Nationality..." required>
    </div>
  </div>
  <br>
  <div>
    <form>
      <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add</button>
    </form>
  </div>
</form>