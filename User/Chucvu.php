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
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Quản lý Chức vụ</h1>
			<button class="dropdown-item" id="add_button" data-toggle="modal" data-target="#themchucvu">
				<i class="fas fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
				Thêm mới Chức vụ
			</button>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh sách các chức vụ</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="bang" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tên chức vụ</th>                      
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

  <div class="modal fade" id="themchucvu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="min-width:800px" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
		<form method="POST" id="chucvu_form">
			<div class="row">
				<div class="form-group col-md-3">
					<label for="tenchucvu_add" class="col-form-label">Tên chức vụ:</label>
					<input type="text" name="tenchucvu_add" class="form-control" id="tenchucvu_add">
				</div>	
			</div>
      <div class="modal-footer">
          	<input type="hidden" name="chucvu_id" id="chucvu_id" />
			<input type="hidden" name="operation" id="operation" />
          	<button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
			<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
        </div>
      </div>
    </div>
		</form>

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

	$('#add_button').click(function(){
		$('#chucvu_form')[0].reset();
		$('.modal-title').text("Thêm chức vụ");
		$('#action').val("Thêm");
		$('#operation').val("Add");
	});
	
	var dataTable = $('#bang').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"Model/chucvu/fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[1, 2],
				"orderable":false,
			},
		],

	});

	$(document).on('click', '.update', function(){
		var chucvu_id = $(this).attr("id");
		$.ajax({
			url:"Model/chucvu/fetch_single.php",
			method:"POST",
			data:{chucvu_id:chucvu_id},
			dataType:"json",
			success:function(data)
			{
				$('#themchucvu').modal('show');
				$('.modal-title').text("Sửa chức vụ");
				$('#chucvu_id').val(data.ChucVuId);				
				$('#tenchucvu_add').val(data.TenChucVu);
				$('#action').val("Sửa");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var chucvu_id = $(this).attr("id");
		if(confirm("Bạn có chắc chắn muốn xóa"))
		{
			$.ajax({
				url:"Model/chucvu/delete.php",
				method:"POST",
				data:{chucvu_id:chucvu_id},
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
	$(document).on('submit', '#chucvu_form', function(event){
		event.preventDefault();
		var tenchucvu_add = $('#tenchucvu_add').val();

		if(tenchucvu_add != '')
		{
			$.ajax({
				url:"Model/chucvu/insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#chucvu_form')[0].reset();
					$('#themchucvu').modal('hide');
					dataTable.ajax.reload();
				}
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
