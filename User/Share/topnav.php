<?php
  if((isset($_COOKIE["Name"]))){
    if($_COOKIE["Role"]==0){
      header("Location: /bai3/Ad/index.php");
    }
    else{
      
    }
  }
  else{
    header("Location: /bai3/login.php");
  }
?>


<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<form class="form-inline">
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
</form>

<!-- Topbar Search -->
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm" aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-primary" type="button">
        <i class="fas fa-search fa-sm"></i>
      </button>
    </div>
  </div>
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
  <li class="nav-item dropdown no-arrow d-sm-none">
    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-search fa-fw"></i>
    </a>
    <!-- Dropdown - Messages -->
    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
      <form class="form-inline mr-auto w-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </li>

  <!-- Nav Item - Alerts -->
  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-bell fa-fw"></i>
      <!-- Counter - Alerts -->
      <span class="badge badge-danger badge-counter">3+</span>
    </a>
    <!-- Dropdown - Alerts -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
      <h6 class="dropdown-header">
        Thông báo
      </h6>
      <?php
       $connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
       $query = "SELECT * FROM nhanvien ";
       $statement = $connection->prepare($query);
       $statement->execute();
       $result = $statement->fetchAll();
       foreach($result as $row)
       {	
         $time = strtotime($row['NgaySinh']);
         $homnay= date('d/m/yy');
         if((int)date('d',$time)==(int)date('d')&&(int)date('m',$time)==(int)date('m')){
           echo '<a class="dropdown-item d-flex align-items-center" href="#">
           <div class="mr-3">
             <div class="icon-circle bg-primary">
               <i class="fas fa-file-alt text-white"></i>
             </div>
           </div>
           <div>
             <div class="small text-gray-500">'.$homnay.'</div>
             <span class="font-weight-bold">Hôm nay là sinh nhật của '.$row["Ho"]." ".$row["Ten"].'</span>
           </div>
         </a>';
 
         }
       }      
      ?>
      <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
    </div>
  </li>


  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small" id="name">Valerie Luna</span>
      <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="Profile.php">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Thông tin cá nhân
      </a>   
      
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/bai3/louout.php" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Đăng xuất
      </a>
    </div>
  </li>

</ul>

</nav>
<script>
$(document).ready(function(){	
	var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  $("#name").text(ca[2].slice(6));
  console.log(ca);
  });
</script>