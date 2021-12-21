<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Quản lý nhân viên - AD</title>

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
	<style>
		.input-group-append{
			display:none;
		}

	</style>
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
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Quản lý nhân sự</h1>
			<a class="dropdown-item" id="add_button" href="#" data-toggle="modal" data-target="#themnhanvien">
				<i class="fas fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
				Thêm mới nhân viên
			</a>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh sách nhân viên</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="bangnhanvien" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Mã nhân viên</th>
                      <th>Mật khẩu</th>
                      <th>Tên</th>
                      <th>Giới tính</th>
                      <th>Số điện thoại</th>
                      <th>Chức vụ</th>
                      <th>Phòng ban</th>
                      <th>Hợp đồng lao động</th>
                      <th>Sửa</th>
                      <th>Xóa</th>
                    </tr>
                  </thead>                
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

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
  <div class="modal fade" id="themnhanvien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="min-width:800px" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm mới nhân viên</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
			<form method="POST" id="user_form">
        <div class="row">
          <div class="form-group col-md-3">
            <label for="ho_add" class="col-form-label">Họ:</label>
            <input type="text" name="ho_add" class="form-control" id="ho_add">
          </div>
          <div class="form-group col-md-3">
            <label for="ten_add" class="col-form-label">Tên:</label>
            <input type="text" name="ten_add" class="form-control" id="ten_add">
          </div>
          <div class="form-group col-md-3">
            <label for="sdt_add" class="col-form-label">Số điện thoại:</label>
            <input type="text" name="sdt_add" class="form-control" id="sdt_add">
          </div>
          <div class="form-group col-md-3">
            <label style="padding-top:7px" for="gioitinh_add">Giới tính</label>
            <select class="form-control" name="gioitinh_add" id="gioitinh_add">
              <option value="1">Nam</option>
              <option value="0">Nữ</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="diachi_add" class="col-form-label">Địa chỉ:</label>
            <input type="text" class="form-control" name="diachi_add" id="diachi_add">
          </div>
          <div class="form-group col-md-3">
            <label style="padding-top:7px" for="chucvu_add">Chức vụ</label>
            <select class="form-control" name="chucvu_add" id="chucvu_add">
              <option value="1">Nam</option>
              <option value="0">Nữ</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <label style="padding-top:7px" for="phongban_add">Phòng ban</label>
            <select class="form-control" name="phongban_add" id="phongban_add">
              <option value="1">Nam</option>
              <option value="0">Nữ</option>
            </select>
          </div>
          <div class="form-group col-md-8">
            <label style="padding-top:7px" for="">Hợp đồng lao động</label>
            <div class="row">
              <div style="min-width:150px" class="col-md-4">
              <label>Từ ngày</label>
                <input autocomplete="off" style="min-width:150px" name="dateStart_add" id="dateStart_add"/>
                <script>
                  $('#dateStart_add').datepicker({
                    uiLibrary: 'bootstrap4'
                  });
                </script>
              </div>
              <div style="min-width:120px; margin-left:20px" class="col-md-4">
                <label>Đến ngày ngày</label>
                <input autocomplete="off" style="min-width:120px" name="dateEnd_add"  id="dateEnd_add"/>
                <script>
                  $('#dateEnd_add').datepicker({
                    uiLibrary: 'bootstrap4'
                  });
                </script>
              </div>
            </div>
          </div>
          <div class="form-group col-md-4">
            <label style="padding-top:7px" for="exampleFormControlSelect1">Sinh ngày</label>
            
            <div class="row">
            <label>.</label>
            
                <input autocomplete="off" style="min-width:120px" name="birthday_add" id="birthday_add"/>
                <script>
                  $('#birthday_add').datepicker({
                    uiLibrary: 'bootstrap4'
                  });
                </script>
            </div>
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="nhanvien_id" id="nhanvien_id" />
					<input type="hidden" name="operation" id="operation" />
          <input type="hidden" name="hdld" id="hdld" />
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
        </div>
      </div>
    </div>
		</form>
  </div>
  <div class="modal fade" id="sinhnhat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chúc mừng sinh nhật nào!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="thuong">
        <div class="modal-body">
            <div class="form-group">
              <input type="text" style="display:none" class="form-control" id="user_id" name="user_id">
            </div>
            <div class="form-group">
              <label for="tien" class="col-form-label">Tiền thưởng:</label>
              <input class="form-control" id="tien" name="tien"/>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <input type="submit" class="btn btn-primary" value="Thưởng" />
        </div>
      </form>
    </div>
  </div>
</div>
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
			$.ajax({
				url:"Model/nhanvien/loadchucvu.php",
				method:"POST",
				success:function(data)
				{
					$('#chucvu_add').html(data);
				}
			});
      $.ajax({
				url:"Model/nhanvien/loadphongban.php",
				method:"POST",
				success:function(data)
				{
					$('#phongban_add').html(data);
				}
			});
	});  
	
	$(document).ready(function(){
		$('#add_button').click(function(){
			$('#user_form')[0].reset();
			$('.modal-title').text("Thêm nhân viên");
			$('#action').val("Thêm");
			$('#operation').val("Add");
		});
		
		var dataTable = $('#bangnhanvien').DataTable({
			"processing":true,
			"serverSide":true,
			"order":[],
			"ajax":{
				url:"Model/nhanvien/fetch.php",
				type:"POST"
			},
			"columnDefs":[
				{
					"targets":[8, 9],
					"orderable":false,
				},
			],

		});

		$(document).on('click', '.update', function(){
			var nhanvien_id = $(this).attr("id");
			$.ajax({
				url:"Model/nhanvien/fetch_single.php",
				method:"POST",
				data:{nhanvien_id:nhanvien_id},
				dataType:"json",
				success:function(data)
				{
					$('#themnhanvien').modal('show');
          $('#nhanvien_id').val(nhanvien_id);
          $('.modal-title').text("Sửa thông tin nhân viên");
					$('#ho_add').val(data.Ho);
					$('#ten_add').val(data.Ten);
			    $('#sdt_add').val(data.SoDienThoai);
			    $('#diachi_add').val(data.DiaChi);
          $('#dateStart_add').val(data.hdstart);
          $('#dateEnd_add').val(data.hdend);
          $('#birthday_add').val(data.NgaySinh);
          $('#chucvu_add').val(data.ChucVuId);
          $('#phongban_add').val(data.PhongBanId);
          $('#hdld').val(data.hdld);
					$('#action').val("Sửa");
					$('#operation').val("Edit");
				}
			})
		});
		
		$(document).on('click', '.delete', function(){
			var nhanvien_id = $(this).attr("id");
			if(confirm("Bạn có chắc chắn muốn xóa"))
			{
				$.ajax({
					url:"Model/nhanvien/delete.php",
					method:"POST",
					data:{nhanvien_id:nhanvien_id},
					success:function(data)
					{
						alert(data);
						dataTable.ajax.reload();
					}
				});
			}
			else
			{
				return false;	
			}
		});
		$(document).on('submit', '#user_form', function(event){
			event.preventDefault();
			var ho_add = $('#ho_add').val();
			var ten_add = $('#ten_add').val();
			var sdt_add = $('#sdt_add').val();
			var diachi_add = $('#diachi_add').val();
			var dateStart_add = $('#dateStart_add').val();
			var dateEnd_add = $('#dateEnd_add').val();
			var birthday_add = $('#birthday_add').val();
			var chucvu = $('#chucvu_add').val();
			var phongban = $('#phongban_add').val();
			var nhanvien_id = $('#nhanvien_id').val();

			if(ho_add != ''&& ten_add!='' && sdt_add!=''&& diachi_add!=''&& dateStart_add!=''&& dateEnd_add!=''&& birthday_add!='')
			{
				$.ajax({
					url:"Model/nhanvien/insert.php",
					method:'POST',
					data:new FormData(this),
					contentType:false,
					processData:false,
					success:function(data)
					{
						alert(data);
            // console.log(data);
						$('#user_form')[0].reset();
						$('#themnhanvien').modal('hide');
						dataTable.ajax.reload();
					}
				});
			}
			else
			{
				alert("Không được để trống");
			}
		});
		
    $('#sinhnhat').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
  var modal = $(this)
  // modal.find('.modal-body #tien').val(recipient)
  $('#user_id').val(recipient);
})

$(document).on('submit', '#thuong', function(event){
			event.preventDefault();			
			var user_id = $('#user_id').val().substring(1);
			var tien = $('#tien').val();          

			if(tien!='')
			{
				$.ajax({
                    url:"Share/thuong.php",
                    method:"POST",
                    data:{user_id:user_id,tien:tien},
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
		
	});
</script>
</body>

</html>
