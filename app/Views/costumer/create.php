
<!-- Main content -->
<section class="content">
 
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Costumer</h3>
            <div class="pull-right">
                <a href="<?= site_url('costumer')?>" class="btn btn-warning btn-flat">
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
        <form method="post" action="<?= base_url('costumer/add');?>">
        <div class="row">
        <?= csrf_field(); ?>
            <div class="col-md-4 col-md-offset-4">
                    <div class="form-group">
                        <!-- penggunaan "for" disini agar ketika klik label, maka akan fokus ke "id" tujuan, yaitu disini pada input product name -->
                        <label for="product_name">Code Costumer</label>
                        <input type="text" name="kd_costumer" id="kd_costumer" value="<?= old('kd_costumer'); ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <!-- penggunaan "for" disini agar ketika klik label, maka akan fokus ke "id" tujuan, yaitu disini pada input product name -->
                        <label for="product_name">Name</label>
                        <input type="text" name="name" id="name" value="<?= old('name'); ?>" class="form-control" required>
                      
                    </div>
                    <div class="form-group">
                        <!-- cara lain untuk menampilkan data dari tabel lain, menggunakan form helper dari codeigniter -->
                        <label>Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" value="<?= old('phone_number'); ?>" class="form-control" required>
                       
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" id="address" value="<?= old('address'); ?>" class="form-control" required>
                      
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" name="" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Save
                        </button>
                        <button type="reset" class="btn bg-red btn-flat">
                            <i class="fa fa-refresh"></i> Reset
                        </button>
                        </form>
                    </div>
              
            </div>
           

   
        </div>
    </div>
</section>