
<!-- Main content -->
<section class="content">
 
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Order</h3>
            <div class="pull-right">
                <a href="<?= site_url('order')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    <div class="box-body">
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible">
                <?php echo session()->getFlashdata('message'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            </div>
           
               
            <?php endif; ?>
        <form method="post" action="<?= base_url('order/add');?>">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                    <div class="form-group">
                        <!-- penggunaan "for" disini agar ketika klik label, maka akan fokus ke "id" tujuan, yaitu disini pada input product name -->
                        <label for="product_name">Code Order</label>
                       
                        <input type="text" name="id_order" id="id_order" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <!-- penggunaan "for" disini agar ketika klik label, maka akan fokus ke "id" tujuan, yaitu disini pada input product name -->
                        <label for="product_name">ID Pegawai</label>
                        <select name="id_pegawai" class="form-control select2bs4" style="width: 100%;" required>
                       
                                <option value="">
                               
                                </option> 
                    </select>        
            </select>                     </div>
                    <div class="form-group">
                        <label>Id Costumer</label>
                        <select name="id_pegawai" class="form-control select2bs4" style="width: 100%;" required>
                       
                                <option value="">
                               
                                </option> 
                    </select>     
                        
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="product_name" id="product_name" value="" class="form-control" required>
                    </div>
                  
                    
                    <div class="form-group">
                        <button type="submit" name="" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Save
                        </button>
                        <button type="reset" class="btn bg-red btn-flat">
                            <i class="fa fa-refresh"></i> Reset
                        </button>
                    </div>
              
            </div>
        </div>
    </div>
</section>