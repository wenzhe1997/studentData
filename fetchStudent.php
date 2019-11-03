<?php
session_start();
include 'config.php';
include 'link.php';

if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from studentData where id=?";
	$stmt= $conn->prepare($adn);
	$stmt->bind_param('i',$id);
	$rs=$stmt->execute();
	if('rs'==true)
	{
		echo "<script>alert('Student data has been successfully Deleted');</script>";
		
	}
}
?>
<html>
<title>Student-Modules</title>
<style>

b{
	color: white
}

</style>


<body style="background-color:#f0f5f5; margin:50px">
	<center>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
<br>
<a href="fetchStudent.php"><h2><i class="fab fa-creative-commons-by"></i>Student Information</h2></a>

</center>

<label><h4><i class="fas fa-search"></i>Search</h4></label>
<input class="form-control" id="myInput" type="text" onkeyup="myFunction()" placeholder="Search for name" style="width:30%">
<br>
<form action="studentIndex.php" method="post">
<button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Add Student</button>
</form>

<table class="table table-striped" id="myTable" border="2" >
	<tr>
		<td class="p-3 mb-2 bg-info text-white"><b>ID</b></td>
		<td class="p-3 mb-2 bg-info text-white"><b>Name</b></td>
    <td class="p-3 mb-2 bg-info text-white"><b>Student ID</b></td>
		<td class="p-3 mb-2 bg-info text-white"><b>Phone</b></td>
		<td class="p-3 mb-2 bg-info text-white"><b>Batch</b></td>
		<td class="p-3 mb-2 bg-info text-white"><b><a >Email</a></b></td>
		<td class="p-3 mb-2 bg-info text-white"><b>Age</b></td>
    <td class="p-3 mb-2 bg-info text-white"><b><a >Details</a></b></td>
    <td class="p-3 mb-2 bg-info text-white"><b>Manage</b></td>
	</tr>
	<?php 
		$ret = "select * from studentData";
		$stmt2 = $conn->prepare($ret);
		$stmt2 -> execute();
		 $res=$stmt2->get_result();
		 $cnt=1;
		   while($row=$res->fetch_object())
		  {
		?>
	<tr>
		<td><?php echo $cnt;?></td>
		<td><?php echo $row->name;?></td>
    <td><?php echo $row->studentId;?></td>
		<td><?php echo $row->phone;?></td>
		<td><?php echo $row->batch;?></td>
    <td><?php echo $row->email;?></td>
    <td><?php echo $row->age;?></td>

		<td><a href="#showStudent" data-toggle="modal"
			data-id = "<?php echo $row->id; ?>"
			data-name = "<?php echo $row->name; ?>"
			data-phone = "<?php echo $row->phone; ?>"
			data-batch = "<?php echo $row->batch; ?>"
			data-email = "<?php echo $row->email; ?>"
			data-age = "<?php echo $row->age;?>"
			data-gender = "<?php echo $row->gender;?>"
			data-race = "<?php echo $row->race;?>"
			data-religion = "<?php echo $row->religion;?>"
			data-nationality = "<?php echo $row->nationality;?>"
			>
			<center><i class="fas fa-eye"></i></center>
			</a>
		</td>
		
		<td style="text-align: center;"><a href="studentEdit.php?id=<?php echo $row->id;?>"> <i class="fas fa-edit"></i> </a> |<a href="fetchStudent.php?del=<?php echo $row->id;?>"> <i class="fas fa-trash-alt"></i></a>
    </td>

	</tr>
<?php $cnt=$cnt+1; } ?>	

</table>
</div>
</div>
</div>
<br>

<form action="logout.php" style="float:right;">
  <button type="submit" class="btn btn-danger"><i class="fas fa-sign-in-alt"></i> Logout</button>
</form>

</body>

</html>
<div id="showStudent" class="modal showStudent" tabindex="-1" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Full details</h4>
      </div>
      <div class="modal-body">
        <table class = "table table-striped" >
        	<tr>
        		<td>ID:</td>
        		<td>:</td>
        		<td><p id="id"></p></td>
        	</tr>
        	<tr>
        		<td>Name:</td>
        		<td>:</td>
        		<td><p id="name"></p></td>
        	</tr>
          <tr>
          <tr>
        		<td>Age:</td>
        		<td>:</td>
        		<td><p id="age"></p></td>
        	</tr>
        	<tr>
        		<td>Phone:</td>
        		<td>:</td>
        		<td><p id="phone"></p></td>
        	</tr>
        	<tr>
        		<td>Batch</td>
        		<td>:</td>
        		<td><p id="batch"></p></td>
        	</tr>
        	<tr>
        		<td>Email:</td>
        		<td>:</td>
        		<td><p id="email"></p></td>
        	</tr>
        	<tr>
        		<td>Gender:</td>
        		<td>:</td>
        		<td><p id="gender"></p></td>
        	</tr>
        	<tr>
        		<td>Race:</td>
        		<td>:</td>
        		<td><p id="race"></p></td>
        	</tr>
        	<tr>
        		<td>Religion:</td>
        		<td>:</td>
        		<td><p id="religion"></p></td>
        	</tr>
        		<tr>
        		<td>Nationality:</td>
        		<td>:</td>
        		<td><p id="nationality"></p></td>
        	</tr>
        


        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

$("#showStudent").on("show.bs.modal", function(event){
	button = $(event.relatedTarget);

	var id = button.data("id");
	$("#id").text(id);

	var name = button.data("name");
	$("#name").text(name);

	var phone = button.data("phone");
	$("#phone").text(phone);

	var batch = button.data("batch");
	$("#batch").text(batch);

	var email = button.data("email");
	$("#email").text(email);

	var age = button.data("age");
	$("#age").text(age);

	var gender = button.data("gender");
	$("#gender").text(gender);

	var race = button.data("race");
	$("#race").text(race);

	var religion = button.data("religion");
	$("#religion").text(religion);

	var nationality = button.data("nationality");
	$("#nationality").text(nationality);

})

</script>
