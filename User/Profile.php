<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Quản lý chức vụ - AD</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="/bai3/custom.css" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="vendor/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="vendor/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/bootstrap.min.css.map">

    <script src="vendor/gijgo.min.js" type="text/javascript"></script>
	  <link href="vendor/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php include("Share/sidebar.php");?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php include("Share/topnav.php");?>



        <!-- Begin Page Content -->
        <div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Thông tin tài khoản</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Thông báo</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Chỉnh sửa</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit_password" data-toggle="tab" class="nav-link">Đổi mật khẩu</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">Thông tin người dùng</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Tên</h6>
                            <p id="ten">
                                
                            </p>
                            <h6>Ngày sinh</h6>
                            <p id="ngaysinh">

                            </p>
                            <h6>Địa chỉ</h6>
                            <p id="diachi">
                            
                            </p>
                            <h6>Số điện thoại</h6>
                            <p id="sdt">
                            
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Kỹ năng</h6>
                            <a href="#" class="badge badge-dark badge-pill">html5</a>
                            <a href="#" class="badge badge-dark badge-pill">react</a>
                            <a href="#" class="badge badge-dark badge-pill">codeply</a>
                            <a href="#" class="badge badge-dark badge-pill">angularjs</a>
                            <a href="#" class="badge badge-dark badge-pill">css3</a>
                            <a href="#" class="badge badge-dark badge-pill">jquery</a>
                            <a href="#" class="badge badge-dark badge-pill">bootstrap</a>
                            <a href="#" class="badge badge-dark badge-pill">responsive-design</a>
                            <hr>
                            <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Theo dõi</span>
                            <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Lượt xem</span>
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Hoạt động gần đây</h5>
                            <table class="table table-sm table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> đã vào ACME Project Team ở <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> đã bán xe của cô ấy ở <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> đã kiếm về 3 tỷ ở <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> đã kiếm về 3 tỷ ở  <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> đã kiếm về 3 tỷ ở <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div>
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros. 
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                </div>
                <div class="tab-pane" id="edit">
                    <form id="edit_form" role="form">
                        <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label">Mã Nhân Viên</label>
                              <div class="col-lg-9">
                                  <input disabled class="form-control" name="user_id" id="user_id" type="text" value="Jane">
                              </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Họ</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="ho_add"  id="ho_add" type="text" value="Jane">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Tên</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="ten_add" id="ten_add" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <label class="col-lg-3 col-form-label form-control-label">Ngày sinh</label>
                            <div class="col-lg-9">

                            <input autocomplete="off" class="col-lg-6" style="min-width:120px" name="birthday_add" id="birthday_add"/>
                            <script>
                            $('#birthday_add').datepicker({
                                uiLibrary: 'bootstrap4'
                            });
                            </script>
                            </div>
                            <style>
                            .input-group-append{
                                display:none;
                            }

	</style>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Địa chỉ</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="diachi_add" id="diachi_add" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Số điện thoại</label>
                            <div class="col-lg-9">
                                <input class="form-control"  name="sdt_add" id="sdt_add" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Giới tính</label>
                            <div class="col-lg-9">
                                <select class="form-control" name="gioitinh_add" id="gioitinh_add">
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Xác nhận Mật Khẩu</label>
                            <div class="col-lg-9">
                                <input class="form-control" id="pass" name="pass" type="password" value="">
                            </div>
                        </div>
                        <input id="nhanvien_id" style="display:none"/>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="submit" class="btn btn-primary" value="Lưu">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="edit_password">
                    <form role="form">
                      <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Mật Khẩu cũ</label>
                            <div class="col-lg-9">
                                <input class="form-control" id="passs" name="passs" type="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Mật Khẩu mới</label>
                            <div class="col-lg-9">
                                <input class="form-control" id="pass_edit" name="pass_edit" type="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Xác nhận Mật Khẩu</label>
                            <div class="col-lg-9">
                                <input class="form-control" id="pass_edit_conf" name="pass_edit_conf" type="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="submit" class="btn btn-primary" value="Lưu">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
            <h6 class="mt-2">Upload a different photo</h6>
            <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control">Choose file</span>
            </label>
        </div>
    </div>
</div>
      <!-- End of Main Content -->
      <?php
     echo '<input style="display:none" id="nhanvien_idd" value="'.$_COOKIE["Id"].'" />';
?>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn đăng xuất</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Chọn Đăng xuất để thoát ra khỏi hệ thống</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
          <a class="btn btn-primary" href="/bai3/logout.php">Đăng xuất</a>
        </div>
      </div>
    </div>
  </div>
</div>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


  <script type="text/javascript" language="javascript" >	
$(document).ready(function(){	
            var nhanvien_id = $('#nhanvien_idd').val();
            $('#nhanvien_id').val(nhanvien_id);
			$.ajax({
				url:"Model/nhanvien/fetch_single.php",
				method:"POST",
				data:{nhanvien_id:nhanvien_id},
				dataType:"json",
				success:function(data)
				{
					$('#ten').text(data.Ho+' '+data.Ten);
                    $('#diachi').text(data.DiaChi);
                    $('#sdt').text(data.SoDienThoai);
                    $('#ngaysinh').text(data.NgaySinh);

                    //edit
                    $('#user_id').val(data.Id);
					$('#ho_add').val(data.Ho);
					$('#ten_add').val(data.Ten);
					$('#birthday_add').val(data.NgaySinh);
                    $('#diachi_add').val(data.DiaChi);
                    $('#sdt_add').val(data.SoDienThoai);
                    $('#gioitinh_add').val(data.GioiTinh);

                    
				}
			})
  
});

$(document).on('submit', '#edit_password', function(event){
			event.preventDefault();			
			var pass_edit = $('#pass_edit').val();
			var pass_edit_conf = $('#pass_edit_conf').val();
            var passs= $('#passs').val();
            var id = $('#nhanvien_id').val();

			if(pass_edit==pass_edit_conf)
			{
				$.ajax({
                    url:"Share/doimatkhau.php",
                    method:"POST",
                    data:{passs:passs,id:id,pass_edit:pass_edit},
                    dataType:"json",
					success:function(data)
					{
						alert(data);
					},
                    error:function(error)
					{
						alert(error.responseText);
					},
				});
			}
			else
			{
				alert("Xác nhận mật khẩu không đúng");
			}
		});
$(document).on('submit', '#edit_form', function(event){
			event.preventDefault();
			var ho_add = $('#ho_add').val();
			var ten_add = $('#ten_add').val();
			var sdt_add = $('#sdt_add').val();
			var diachi_add = $('#diachi_add').val();
			var birthday_add = $('#birthday_add').val();
			var nhanvien_idd = $('#nhanvien_id').val();
			var gioitinh_add = $('#gioitinh_add').val();
			var pass = $('#pass').val();

			if(ho_add != ''&& ten_add!='' && sdt_add!=''&& diachi_add!=''&& birthday_add!='')
			{
				$.ajax({
                    url:"Share/doithongtin.php",
                    method:"POST",
                    data:{pass:pass,gioitinh_add:gioitinh_add,ho_add:ho_add,ten_add:ten_add,sdt_add:sdt_add,diachi_add:diachi_add,birthday_add:birthday_add,nhanvien_idd:nhanvien_idd},
                    dataType:"json",
					success:function(data)
					{
						alert(data);
					},
                    error:function(error)
					{
						alert(error.responseText);
					},
				});
			}
			else
			{
				alert("Không được để trống");
			}
		});
</script>
</body>

</html>
