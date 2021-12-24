<?php
/*
Author: Shailesh Kumar Dangi
Website: http://nutantech.co.in/
*/
 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages 

$vendorid = $_GET['vendorid'];
$query = "SELECT * FROM `vendors` where id='$vendorid'";
$result = mysqli_query($con,$query) or die(mysql_error());
if($result){
$row = $result->fetch_assoc();
    // print_r($row); 
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Dashboard </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<style type="text/css">
		
		
	</style>
</head>
<body>

<header class="header">
          <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 ">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand p-0 mr-5" href="dashboard.php"><img src="http://via.placeholder.com/61x14"></a>
            <div class="float-left"> <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a> </div>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown messages-menu">
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-success bg-success">10</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <ul class="dropdown-menu-over list-unstyled">
                      <li class="header-ul text-center">You have 4 messages</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu list-unstyled">
                          <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle  " alt="User Image">
                            </div>
                            <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <!-- end message -->
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer-ul text-center"><a href="#">See All Messages</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown notifications-menu">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-warning bg-warning">10</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <ul class="dropdown-menu-over list-unstyled">
                    <li class="header-ul text-center">You have 10 notifications</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu list-unstyled">
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                            page and may cause design problems
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-red"></i> 5 new members joined
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-user text-red"></i> You changed your username
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer-ul text-center"><a href="#">View all</a></li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item dropdown  user-menu">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="http://via.placeholder.com/160x160" class="user-image" alt="User Image" >
                  <span class="hidden-xs"><?php echo $_SESSION['name'] ?></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Change Password</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="main">
        <aside>
          <div class="" style="display: flex;">
          <div class="sidebar left ">
            <div class="user-panel">
              <div class="pull-left image">
                <img src="http://via.placeholder.com/160x160" class="rounded-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>bootstrap develop</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <ul class="list-sidebar bg-defoult">
              <!-- <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Dashboards </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dashboard">
                <li class="active"><a href="#">CSS3 Animation</a></li>
                <li><a href="#">General</a></li>
                <li><a href="#">Buttons</a></li>
                <li><a href="#">Tabs & Accordions</a></li>
                <li><a href="#">Typography</a></li>
                <li><a href="#">FontAwesome</a></li>
                <li><a href="#">Slider</a></li>
                <li><a href="#">Panels</a></li>
                <li><a href="#">Widgets</a></li>
                <li><a href="#">Bootstrap Model</a></li>
              </ul>
            </li>
            <li> <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a> </li>
            <li> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="sub-menu collapse" id="products">
              <li class="active"><a href="#">CSS3 Animation</a></li>
              <li><a href="#">General</a></li>
              <li><a href="#">Buttons</a></li>
              <li><a href="#">Tabs & Accordions</a></li>
              <li><a href="#">Typography</a></li>
              <li><a href="#">FontAwesome</a></li>
              <li><a href="#">Slider</a></li>
              <li><a href="#">Panels</a></li>
              <li><a href="#">Widgets</a></li>
              <li><a href="#">Bootstrap Model</a></li>
            </ul>
          </li>
          <li> <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a> </li>
          <li> <a href="#" data-toggle="collapse" data-target="#tables" class="collapsed active" ><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa fa-chevron-left pull-right"></span></a>
          <ul  class="sub-menu collapse" id="tables" >
            <li><a href=""> Static Tables</a></li>
            <li><a href=""> Data Tables</a></li>
            <li><a href=""> Foo Tables</a></li>
            <li><a href=""> jqGrid</a></li>
          </ul>
        </li>
        <li> <a href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active" ><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="e-commerce" >
          <li><a href=""> Products grid</a></li>
          <li><a href=""> Products list</a></li>
          <li><a href="">Product edit</a></li>
          <li><a href=""> Product detail</a></li>
          <li><a href="">Cart</a></li>
          <li><a href=""> Orders</a></li>
          <li><a href=""> Credit Card form</a> </li>
        </ul>
      </li> -->
      <li> <a href="vendor.php"><i class="fa fa-pie-chart"></i> <span class="nav-label">Vendor</span> </a></li>
      <li> <a href="vendorlist.php"><i class="fa fa-files-o"></i> <span class="nav-label">Vendor List</span></a> </li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
      <li> <a href="business.php"><i class="fa fa-files-o"></i> <span class="nav-label">Business</span></a> </li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
    </ul>
    </div>



    <div class="">

        <div class="panelbody" style="padding: 10px 0px 0px 20px;width: 80vw;">
            <div class="">
              <h1>Vendor</h1>
            </div>
            <div class="" style="display: flex;justify-content: space-between;align-items: center;background-color: #f5f5f5;padding:10px 10px 10px 10px;margin-bottom: 10px;">
              <div class="">
                <h3>Create Edit Form</h3>
              </div>
              <div>
                <a href="vendorlist.php" class="btn btn-success">Vendor List</a>
              </div>
            </div>
            <div class="cardbody" style="background-color: #f5f5f5; padding: 10px 10px 10px 10px;">

              <?php 

              if(isset($_REQUEST['brandname']))
              {

                $brandname = $_POST["brandname"];
                $cityname = $_POST['cityname'];
                $vendortype = $_POST['vendortype'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];

                // $query = "INSERT into `vendors` (brandname, cityname,vendortype,email,phone, address) VALUES ('$brandname','$cityname','$vendortype','$email', '$phone','$address')";

                $query = "UPDATE `vendors` SET brandname='$brandname', cityname='$cityname',vendortype='$vendortype', email='$email', phone='$phone', address='$address' WHERE id='$vendorid'";

                $result = mysqli_query($con,$query);

                if($result){
                    echo "<div class='form'><h3>Vendor updated successfully.</h3></div>";
                }


              }
              else{
              ?>

              <form action="" method="POST">
                <div class="form-group">
                  <label>Brand Name</label>
                  <input type="text" class="form-control" name="brandname" placeholder="Brand Name" value="<?php echo $row['brandname'] ?>">
                </div>
                <div class="form-group">
                  <label>City Name</label>
                  <select class="form-control" name="cityname">
                    
                    <option value="Hazaribag" <?php echo $row['cityname'] == 'Hazaribag' ? 'selected' : "" ?>>Hazaribag</option>
                    <option value="Ranchi" <?php echo $row['cityname'] == 'Ranchi' ? 'selected' : "" ?>>Ranchi</option>
                    <option value="Patana" <?php echo $row['cityname'] == 'Patana' ? 'selected' : "" ?>>Patana</option>
                    <option value="Ramgarh" <?php echo $row['cityname'] == 'Ramgarh' ? 'selected' : "" ?>>Ramgarh</option>
                    <option value="Chatra" <?php echo $row['cityname'] == 'Chatra' ? 'selected' : "" ?>>Chatra</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Vendor Type</label>
                  <select class="form-control" name="vendortype">
                    <option value="Photographer" <?php echo $row['vendortype'] == 'Photographer' ? 'selected' : '' ?>>Photographer</option>
                    <option value="BridalMackup" <?php echo $row['vendortype'] == 'BridalMackup' ? 'selected' : '' ?>>Bridal Mackup</option>
                    <option value="Mehandi" <?php echo $row['vendortype'] == 'Mehandi' ? 'selected' : '' ?>>Mehandi</option>
                    <option value="Djs" <?php echo $row['vendortype'] == 'Djs' ? 'selected' : '' ?>>Djs</option>
                    <option value="Tent" <?php echo $row['vendortype'] == 'Tent' ? 'selected' : '' ?>>Tent</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Eamil</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter email" value="<?php echo $row['email']; ?>">
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="<?php echo $row['phone']; ?>">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" name="address" placeholder="Address"><?php echo $row['address']; ?></textarea>
                </div>
                <input type="submit" name="Submit" class="btn btn-primary">
              </form>
            <?php } ?>
            </div>
        </div>
    </div>



  </div>
    
    </aside>
    </div>







</div>
</body>
</html>
