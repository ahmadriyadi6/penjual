
<!-- Main content -->
<section class="content">
 
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Item</h3>
            <div class="pull-right">
                <a href="<?= site_url('items')?>" class="btn btn-warning btn-flat">
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
        <form method="post" action="<?= base_url('items/add');?>">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                    <div class="form-group">
                        <!-- penggunaan "for" disini agar ketika klik label, maka akan fokus ke "id" tujuan, yaitu disini pada input product name -->
                        <label for="product_name">Code Items</label>
                        <input type="text" name="id_items" id="id_items" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <!-- penggunaan "for" disini agar ketika klik label, maka akan fokus ke "id" tujuan, yaitu disini pada input product name -->
                        <label for="product_name">Name Items</label>
                        <input type="text" name="name" id="name" value="" class="form-control" required>
                    </div>
                   
                    <div class="form-group">
                        <label>Price *</label>
                        <input type="text" name="price" id="price" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <!-- cara lain untuk menampilkan data dari tabel lain, menggunakan form helper dari codeigniter -->
                        <label>Stock *</label>
                        <input type="text" name="stock" id="stock" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Save
                        </button>
                        <button type="reset" class="btn bg-red btn-flat">
                            <i class="fa fa-refresh"></i> Reset
                        </button>
                    </div>
              </form>
            </div>
        </div>
    </div>
</section>