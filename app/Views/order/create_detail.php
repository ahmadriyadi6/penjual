
<!-- Main content -->
<section class="content">
 
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Order</h3>
            <div class="pull-right">
                <a href="<?= site_url('order_detail')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                    <div class="form-group">
                        <!-- penggunaan "for" disini agar ketika klik label, maka akan fokus ke "id" tujuan, yaitu disini pada input product name -->
                        <label for="product_name">Code Order</label>
                        <input type="hidden" name="id" value="">
                        <input type="text" name="product_name" id="product_name" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <!-- penggunaan "for" disini agar ketika klik label, maka akan fokus ke "id" tujuan, yaitu disini pada input product name -->
                        <label for="product_name">Code Item</label>
                        <input type="hidden" name="id" value="">
                        <input type="text" name="product_name" id="product_name" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <!-- cara lain untuk menampilkan data dari tabel lain, menggunakan form helper dari codeigniter -->
                        <label>Name Item</label>
                        <input type="text" name="product_name" id="product_name" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="product_name" id="product_name" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Qyt</label>
                        <input type="text" name="product_name" id="product_name" value="" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Subtotal</label>
                        <input type="text" name="product_name" id="product_name" value="" class="form-control" required>
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