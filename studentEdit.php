<?php
include 'link.php';
include 'config.php';
session_start();

$id=$_GET['id'];

if(isset($_POST['update'])) {


$name=$_POST['name'];
$studentId=$_POST['studentId'];
$phone=$_POST['phone'];
$batch=$_POST['batch'];
$email=$_POST['email'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$race=$_POST['race'];
$religion=$_POST['religion'];
$nationality=$_POST['nationality'];


$sql="UPDATE studentData set name=?,studentId=?,phone=?,batch=?,email=?,age=?,gender=?,race=?,religion=?,nationality=? where id=?";
$rep=$conn->prepare($sql);
$rep->bind_param('sssssissssi',$name,$studentId,$phone,$batch,$email,$age,$gender,$race,$religion,$nationality,$id);
$rep->execute();    
$rep->close();

  echo "<script>alert('Update Successfully!');</script>";
    echo "<script>window.location='fetchStudent.php';</script>";
}
?>

<style>
  .label{
    padding:10px;
  }
</style>

  <h1 style="padding:10px;color:#303030;text-align:center;">Student Details</h1>

<form style="margin:30px;padding:10px; background-color:#f0f5f5; border-radius:20px" action="" method="post">
 <?php 
    
    $ret = "select * from studentData WHERE id = '$id' ";
    $stmt2 = $conn->prepare($ret);
    $stmt2 -> execute();
     $res=$stmt2->get_result();
     $cnt=1;
       while($row=$res->fetch_object())
      {
    ?>
  <div class="row">
    <div class="col">
      <label class="label">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Your Name..." value="<?php echo $row->name;?>" required>
    </div>
    <div class="col">
       <label class="label">Stundet ID</label>
      <input type="text" class="form-control" name="studentId" placeholder="Your Student ID..." value="<?php echo $row->studentId;?>" required>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
       <label class="label">Phone</label>
      <input type="Number" class="form-control" name="phone" placeholder="Your Phone Number..." value="<?php echo $row->phone;?>" required>
    </div>
    <div class="col">
       <label class="label">Batch</label>
      <input type="text" class="form-control" name="batch" placeholder="Your Batch..." value="<?php echo $row->batch;?>" required>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
       <label class="label">Email</label>
      <input type="Email" class="form-control" name="email" placeholder="Your Email..." value="<?php echo $row->email;?>" required>
    </div>
    <div class="col">
       <label class="label">Age</label>
      <input type="Number" class="form-control" name="age" placeholder="Your Age..." value="<?php echo $row->age;?>" required>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
       <label class="label">Gender</label>
      <input type="Gender" class="form-control" name="gender" placeholder="Your Gender..." value="<?php echo $row->gender;?>" required>
    </div>
    <div class="col">
       <label class="label">Race</label>
      <input type="text" class="form-control" name="race" placeholder="Your Race..." value="<?php echo $row->race;?>" required>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
       <label class="label">Religion</label>
      <input type="text" class="form-control" name="religion" placeholder="Your Religion..." value="<?php echo $row->religion;?>" required>
    </div>
    <div class="col">
       <label class="label">Nationality</label>
      <input type="text" class="form-control" name="nationality" placeholder="Your Nationality..." value="<?php echo $row->nationality;?>" required>
    </div>
  </div>
  <br>
  <div>
    <form>
      <button type="submit" class="btn btn-primary" name="update"><i class="fas fa-plus"></i> Update</button>
    </form>
  </div>
    <?php } ?>
</form>