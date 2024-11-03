<main>
  <div class="container-fluid">
    <h1 class="mt-4"></h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"><a href="<?php echo site_url('barang') ?>">Barang</a></li>
      <li class="breadcrumb-item active"><?php echo $title ?></li>
    </ol>
    <div class="card mb-4">
      <div class="card-body">
        <form action="<?php echo site_url('barang/edit') ?>" method="post" >
    <div class="mb-3">
        <label>Barkode</label>
        <input class="form-control" type="hidden" name="id" value="<?= $barang->id; ?>" required />
        <input class="form-control" name="barkode" value="<?= $barang->barkode; ?>" type="text" placeholder="Barkode">
    </div>
    <div class="mb-3">
        <label>Nama Barang <code>*</code></label>
        <input class="form-control" name="name" value="<?= $barang->name; ?>" type="text" placeholder="Nama Barang">
    </div>
    <div class="mb-3">
        <label>Harga Beli <code>*</code></label>
        <input class="form-control" name="harga_beli" value="<?= $barang->harga_beli; ?>" type="text" placeholder="Harga Beli">
    </div>
    <div class="mb-3">
        <label>Harga Jual <code>*</code></label>
        <input class="form-control" name="harga_jual" value="<?= $barang->harga_jual; ?>" type="text" placeholder="Harga Jual">
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input class="form-control" name="stok" value="<?= $barang->stok; ?>" type="text" placeholder="Stok" disabled>
    </div>
    <div class="mb-3">
        <label>Kategori <code>*</code></label>
        <select name="kategori" class="form-control" required>
            <?php foreach($kategori as $kategori): ?>
                <?php if($barang->kategori_id == $kategori['id']): ?>
                    <option value="<?= $kategori['id'] ?>" selected><?= $kategori['name'] ?></option>
                <?php else: ?>
                    <option value="<?= $kategori['id'] ?>"><?= $kategori['name'] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Satuan <code>*</code></label>
        <select name="satuan" class="form-control" required>
            <?php foreach($satuan as $satuan): ?>
                <?php if($barang->satuan_id == $satuan['id']): ?>
                    <option value="<?= $satuan['id'] ?>" selected><?= $satuan['name'] ?></option>
                <?php else: ?>
                    <option value="<?= $satuan['id'] ?>"><?= $satuan['name'] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Supplier <code>*</code></label>
        <select name="supplier" class="form-control" required>
            <?php foreach($supplier as $supplier): ?>
                <?php if($barang->supplier_id == $supplier['id']): ?>
                    <option value="<?= $supplier['id'] ?>" selected><?= $supplier['name'] ?></option>
                <?php else: ?>
                    <option value="<?= $supplier['id'] ?>"><?= $supplier['name'] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <button class="btn btn-warning" type="submit"><i class="fas fa-plus"></i> Update</button>
</form>

      </div>
    </div>
    <div style="height: 100vh"></div>
  </div>
</main>