<?php
include ("header.php") ;
include ("db.php");
?>
<div class="panel panel-default">
<div class="panel panel-heading">
<h2>
<a class="btn btn-success" href="add.php">Add Student </a>
<a class="btn btn-info pull-right" href="index.php"> Back </a>
</h2>
<div class="panel panel-body">

<table class="table table-striped">
<th>serial Number</th><th>dates</th><th>show attedance</th>
<tr>
<?php $result=mysqli_query($con, "SELECT DISTINCT date FROM attendence_records") ;
$serialnumber=0;
$counter=0;
while ($row=mysqli_fetch_array($result))
{
$serialnumber++;
?>
<tr>    
<td><?php echo $serialnumber; ?></td>
<td><?php echo $row['date']; ?></td>
<td>
<form action="show_attendence.php" method="POST">
        <input type="hidden" value="<?php echo $row['date'] ?>" name="date">
        <input type="submit" value="show_attendence" class="btn btn-primary">
</form>

</td>
</tr>
    <?php
    }
    ?>
    </table>
    

</form>