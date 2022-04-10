<div class="col-md-3 static">
    <div class="suggestions" id="sticky-sidebar">
      <h4 class="grey">  
Groups List <!-- <a href="" style="    color: #27aae1;
font-size: 10px;
font-weight: bold;
float: right;
"> +  New Group</a> -->
        <a href="groups.php" ><!-- <img style="width:150px" src="https://www.ddvelderlaw.com/wp-content/uploads/2019/05/Anim_SpecialNeeds-5aa921793418c60036d1204c.gif"> -->
        </a>
      </h4>
<?php 
$admin = $_SESSION['login_user'];
$query = "select * from groups where groupadmin='$admin'";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)){
$name = $row['groupname'];
$first =  substr($name, 0, 1);
$color = "#" . random_int(100000, 999999);
?>

      <div class="follow-user">
      <span class="firstnumber pull-left" style="background: <?php echo $color;?>;
width: 40px;
height: 40px;
border-radius: 50%;
text-align: center;
padding: 8px;
color: #fff;
font-weight: bold;
font-size: 20px;"><?php echo $first;?></span>  
        <!-- <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm pull-left" /> -->
        <div>
          <h5><a href="groupmembers.php?group=<?php echo $row['id'];?>"><?php echo $row['groupname'];?></a></h5>
          <a>
           <i class="fa fa-user" aria-hidden="true"></i>

    <?php 
    $groupid= $row['id'];
     $query2 = "select * from groupmemberstable where groupid='$groupid'";
$result2 = mysqli_query($con,$query2);
while($row2=mysqli_fetch_assoc($result2)){
$totalmembers = $row2['groupmembers'];
$f = explode(',', $totalmembers); 
//print_r($f);
//echo "<br>";
echo $arrlength=count($f);
//echo count($f) - count(array_filter($f));
//echo array_count_values($f);
}
?>  &nbsp;<span style="font-size: 10px">Users in Group</span>
</a>
<br>
          <a href="#" class="text-green"><i class="fa fa-map-marker" aria-hidden="true"></i>  &nbsp; <?php echo $row['location'];?></a>

        </div>
      </div>
<?php } ?>

    </div>
  </div>