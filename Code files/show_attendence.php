<?php
include ("db.php") ;
include ("header.php") ;
?>
<div class="panel panel-default">
<div class="panel panel-heading">
<h2>
<a class="btn btn-success" href="add.php">Add Student </a>
<a class="btn btn-info pull-right" href="index.php"> Back </a>
</h2>

<div class="panel panel-body">
<form action="index.php"  method="POST">   
<table class="table table-striped">
<tr>
<th>#serial Number</th><th>Student Name</th><th>Roll Number</th><th>Attendence Status</th>
</tr>
<?php $result=mysqli_query ($con, "SELECT * FROM attendence_records WHERE date=$_POST[date]") ;
$serialnumber=0;
$counter=0;
while ($row=mysqli_fetch_array ($result) )
{
$serialnumber++;

?>
<tr>
<td> <?php echo $serialnumber;?> </td>
<td> <?php echo $row['student_name'];?> 

</td>
<td> <?php echo $row['roll_number'];?>

</td>

<td>
<input type="radio" name="attedance_status[<?php echo $counter; ?>]"
<?php if($row['attedance_status']=="Present")
    echo"checked=checked"
?>
value="Present">Present
<input type="radio" name="attedance_status[<?php echo $counter; ?>]"value="Present"
<?php if($row['attedance_status']=="Absunt")
    echo"checked=checked"
?>
>Present

</td>
</tr>
<?php
$counter++;
}
?>
</table>
<input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>
</div>

</div>