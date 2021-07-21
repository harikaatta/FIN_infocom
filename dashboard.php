<?php
  $value = $_GET["data"];
  $coursearr = $_GET["coursearr"];
  $schoolarr = $_GET["schoolarr"];
  $yeararr = $_GET["yeararr"];
  $percentagearr = $_GET["percentagearr"];
  //echo  $value;
  $value = explode("||^||",$value);
  $coursearr = explode(",",$coursearr);
  $schoolarr = explode(",",$schoolarr);
  $yeararr = explode(",",$yeararr);
  $percentagearr = explode(",",$percentagearr);
  //echo count($percentagearr); //echo $percentagearr;
?>
<div>
  <table border="1">
    <tr>
      <th>S.No</th>
      <th>Name</th>
      <th>S.Nmail</th>
      <th>mobile number</th>
      <th>age</th>
      <th>gender</th>
      <th>Address</th>
    </tr>
    <tr>
      <td><?php echo 1; ?></td>
      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php echo $value[2]; ?></td>
      <td><?php echo $value[3]; ?></td>
      <td><?php echo $value[4]; ?></td>
      <td><?php echo $value[5]; ?></td>
    </tr>
  </table>
  <table class="tabcontainer">
    <tr>
      <th>S.No</th>
      <th>Course</th>
      <th>School / College/ University</th>
      <th>Year</th>
      <th>Percentage</th>
    </tr>
    <br>
    <br>
    <?php for($a=0;$a<count($coursearr);$a++){ ?>
      <tr>
        <td><?php echo $a+1; ?></td>
        <td><?php echo $coursearr[$a]; ?></td>
        <td><?php echo $schoolarr[$a]; ?></td>
        <td><?php echo $yeararr[$a]; ?></td>
        <td><?php echo $percentagearr[$a]; ?></td>
      </tr>
    <?php }?>
  </tavle>
</div>
