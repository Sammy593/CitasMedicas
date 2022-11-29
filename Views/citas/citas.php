<?php
  $funcionUrl = funcionesBack("citas");
  require_once($funcionUrl);
?>
<!DOCTYPE html>
<html lang="en">
<?php headPath($data); ?>
<body class="sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
  <!-- Main Sidebar Container   (aside)-->
  <?php asidePath($data); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 mb-1"> Agendar citas</h1>
            <button class="btn btn-primary" type="button"><i class="fas fa-plus-circle"></i> Nuevo</button>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Citas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Cita</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                 <h3>Samuel</h3>
                </div>
                <!-- /.card-body -->
         </div>
       </div>
    </div>
    <!-- /.content -->
  </div>

  <footer>

  </footer>
</div>


<!-- REQUIRED SCRIPTS -->
<?php scriptsPath($data); ?>

</body>
</html>
