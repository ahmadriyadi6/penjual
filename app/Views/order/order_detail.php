
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Order</h3>
              <div class="pull-right">
                 <a href="<?= site_url('order_detail/create')?>" class="btn bg-teal btn-flat">
                    <i class="fa fa-user-plus"></i> Create Order
                </a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                        <th style="width: 10px">No</th>
                        <th>Code Order</th>
                        <th>Code Item</th>
                        <th>Name Item</th>
                        <th>Harga</th>
                        <th>QYT</th>
                        <th>Subtotal</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>

                 <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center" width="250px">
                            <a href="#" class="btn bg-green btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a> 
                            <a href="#" onclick="return confirm('Apakah anda yakin untuk menghapus data?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a> 
                            <a href="#" onclick="return confirm('Apakah anda yakin untuk mengeprint data?')" class="btn btn-success btn-xs">
                                <i class="fa fa-print"></i> Print
                            </a> 
                        </td>                                          
                </tr>

             
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

 