<?php
include('include/config.php');
if(!empty($_POST["address"])) 
{

 $sql=mysql_query("select doctors,id from doctors where address='".$_POST['address']."'");?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=mysql_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['doctor']); ?></option>
  <?php
}
}


if(!empty($_POST["address"])) 
{

 $sql=mysql_query("select docFees from doctors where id='".$_POST['doctor']."'");
 while($row=mysql_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}
}

?>

