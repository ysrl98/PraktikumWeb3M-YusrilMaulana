<main>
  <div class="container-fluid">
    <h1 class="mt-4"></h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"><a href="<?php echo site_url('barang') ?>"> Tambah Barang</a></li>
      <li class="breadcrumb-item active"><?php echo $title ?></li>
    </ol>
    <div class="card mb-4">
      <div class="card-body">
       <form action="<?php echo site_url('barang/save')?>" method="post">
        <div class="mb-3">
          <label >Barkode <code>*</code></label>
          <input type="text" class="form-control" name="barkode" placeholder="Barkode">
        </div>
        <div class="mb-3">
          <label >Nama Barang <code>*</code></label>
          <input type="text" class="form-control" name="name" placeholder="Nama Barang">
</div>
        <div class="mb-3">
          <label >Harga Beli <code>*</code></label>
          <input type="text" class="form-control" name="harga_beli" placeholder="Harga Beli">
        </div>
        <div class="mb-3">
          <label >Harga Jual <code>*</code></label>
          <input type="text" class="form-control" name="harga_jual" placeholder="Harga Jual">
        </div>
        <div>
        <label >Kategori <code>*</code></label>
        <select name="kategori" class="form-control" required>
          <option value="">-Pilih</option>
          <?php foreach($kategori as $k):?>
            <option value="<?php echo $k['id']?>"><?php echo $k['name']?></option>
            <?php endforeach;?>
        </select>
        </div>
        <div>
        <label >Satuan <code>*</code></label>
        <select name="satuan" class="form-control" required>
          <option value="">-Pilih</option>
          <?php foreach($satuan as $k):?>
            <option value="<?php echo $k['id']?>"><?php echo $k['name']?></option>
            <?php endforeach;?>
        </select>
        </div>
        <div>
        <label >Supplier <code>*</code></label>
        <select name="supplier" class="form-control" required>
          <option value="">-Pilih</option>
          <?php foreach($supplier as $k):?>
            <option value="<?php echo $k['id']?>"><?php echo $k['name']?></option>
            <?php endforeach;?>
        </select>
        </div>
        <div class="mb-3">
          <label >Stok <code>*</code></label>
          <input type="text" class="form-control" name="stok" placeholder="Stok">
        </div>
        <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i>Save</button>
       </form>
      </div>
    </div>
    <div style="height: 100vh"></div>
  </div>
</main>