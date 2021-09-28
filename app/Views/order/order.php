
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Order</h3>
              <div class="pull-right">
                 <a href="<?= site_url('order/tambah')?>" class="btn bg-teal btn-flat">
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
                        <th>Name Pegawai</th>
                        <th>ID Costumer</th>
                        <th>Date</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($order as $row) :
                ?>
                 <tr>
                      <td><?= $no;?></td>
                      <td><?= $row['id_order'];?></td>
                      <td><?= $row['full_name'];?></td>
                      <td><?= $row['kd_costumer'];?></td>
                      <td><?= $row['date'];?></td>
                    
                        <td class="text-center" width="160px">
                           <a href="<?= base_url("order/edit/"). $row['id_order'];?>" class="btn bg-green btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a> 
                            <a href="<?= base_url("order/delete/"). $row['id_order']; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a> 
                        </td>                                          
                </tr>
                <?php endforeach;?>
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
 

 