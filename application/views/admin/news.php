<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">News</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">news</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- Main row -->
        <div class="table-responsive">
          <table class="data-table table table-bordered table-striped table-hoverable mb-0 table-light">
            <thead>
              <tr>
                <th width="5%">S.No.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $count = 1;
              foreach($newss as $news) {?>
              <tr>
                <td><?=$count++?></td>
                <td><img src="<?=$news->image?>" alt="" height="100"></td>
                <td><?=$news->title?></td>
                <td>Last Modified on <?=date('d M, Y', strtotime($news->date_mod))?> </td>
                <td></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  