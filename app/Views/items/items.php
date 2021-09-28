
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Items</h3>
              <div class="pull-right">
                <a href="<?= site_url('items/tambah')?>" class="btn bg-teal btn-flat">
                    <i class="fa fa-user-plus"></i> Create Product Item
                </a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php if (!empty(session()->getFlashdata('message'))) : ?>
              <div class="alert alert-danger alert-dismissible">
              <?php echo session()->getFlashdata('message'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  
              </div>  
            <?php endif; ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                        <th style="width: 10px">No</th>
                        <th>Code Items</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $no = 1;
                foreach ($items as $row) {
                ?>
                 <tr>
                      <td><?= $no;?></td>
                      <td><?= $row->id_items;?></td>
                      <td><?= $row->name;?></td>
                      <td><?= $row->price;?></td>
                      <td><?= $row->stock;?></td>
                    
                        <td class="text-center" width="160px">
                           <a href="<?= base_url("items/edit/$row->id_items");?>" class="btn bg-green btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a> 
                            <a href="<?= base_url("items/delete/$row->id_items"); ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </a> 
                        </td>                                          
                </tr>
                <?php }?>

             
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
 

 