<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                              <?php $query=mysqli_query($con,"select fullName,userImage from Staff_user where Employee_Id='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
                  <p class="centered"><a href="profile.php">
<?php $userphoto=$row['userImage'];
if($userphoto==""):
?>
<img src="userimages/noimage.png"  class="img-circle" width="70" height="70" >
<?php else:?>
  <img src="userimages/<?php echo htmlentities($userphoto);?>" class="img-circle" width="70" height="70">

<?php endif;?>
</a>
</p>
 
                  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
                    
                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Account Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile.php">Profile</a></li>
                          <li><a  href="change-password.php">Change Password</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="closed-complaint.php" >
                          <i class="fa fa-book"></i>
                          <span>Closed Complaints</span>
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="complaint-details.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Complaint Details</span>
                      </a>
                      
                  </li>

				  <li class="sub-menu">
                      <a href="inprocess-complaint.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Opend Complaint</span>
                      </a>
                      
                  </li>

				  <li class="sub-menu">
                      <a href="notprocess-complaint.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Not Processed Complaint</span>
                      </a>
                      
                  </li>

				  <li class="sub-menu">
                      <a href="updatecomplaint.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Update Complaint</span>
                      </a>
                      
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>