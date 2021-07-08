<?php
include ("db.php") ;
include ("header.php") ;
$flag=0;
$update=0;
if(isset($_POST['submit']))
{
    $date=date("Y-m-d");

    $records=mysqli_query($con,"SELECT * FROM attendence_records where date=$date");
    $num=mysqli_num_rows($records);
    if($num)
    {
        foreach($_POST['attendence_status'] as $id=>$attendence_status)
    {
       $student_name=$_POST['student_name'][$id];
       $roll_number=$_POST['roll_number'][$id];
       $date=date("Y-m-d H:i:s");

       $result=mysqli_query($con,"update attendence_records set student_name='$student_name',roll_number='$roll_number', attendence_status='$attendence_status',date='$date'  
       where date ='$date';");

        if($result)
        {
        $update=1;
        }
    }
    }
    else
    {
    foreach($_POST['attendence_status'] as $id=>$attendence_status)
    {
       $student_name=$_POST['student_name'][$id];
       $roll_number=$_POST['roll_number'][$id];
 

        $result=mysqli_query($con,"insert into attendence_records(student_name,roll_number,attendence_status,date)values('$student_name','$roll_number','$attendence_status','$date') ");

        if($result)
        {
        $flag=1;
        }
    }
    }
}
?>
<div class="panel panel-default">
<div class="panel panel-heading">
<h2>
<a class="btn btn-success" href="add.php">Add Student </a>
<a class="btn btn-info pull-right" href="viewall.php"> View All </a>
</h2>
<?php if($flag) {?>
<div class="alert alert-success">
Attendence Data Insert Successfully
</div>
<?php  }?>

<?php if($update) {?>
<div class="alert alert-success">
Student attendence updated Successfully. 
</div>
<?php  }?>


<h3><div class="well text-center">Date:<?php echo date("Y-m-d");?></div></h3>
<div class="panel panel-body">
<form action="index.php"  method="Post">   
<table class="table table-striped">
<tr>
<th>#serial Number</th><th>Student Name</th><th>Roll Number</th><th>Attendence Status</th>
</tr>
<?php $result=mysqli_query ($con, "SELECT * FROM attendence") ;
$serialnumber=0;
$counter=0;
while ($row=mysqli_fetch_array ($result) )
{
$serialnumber++;

?>
<tr>
<td> <?php echo $serialnumber;?> </td>
<td> <?php echo $row['student_name'];?> 
<input type="hidden" value="<?php echo $row['student_name']; ?>" name="student_name[]">
</td>
<td> <?php echo $row['roll_number'];?>
<input type="hidden" value="<?php echo $row['roll_number']; ?>" name="roll_number[]">
</td>
<td>


<input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="Present"
<?php if(isset($_POST['attendence_status'][$counter]) && $_POST['attendence_status'][$counter]=='present' ){
    echo "checked-checked";
    
}
    ?>
 
 required>Present
<input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="Absent"
<?php if(isset($_POST['attendence_status'][$counter]) && $_POST['attendence_status'][$counter]=='absent ' ){
    echo "checked-checked";
    
}
    ?>
 
 
 required>Absent
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