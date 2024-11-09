  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="<?php echo site_url('menu') ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
              Master Data
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="<?php echo site_url('kategori'); ?>">Kategori</a>
                <a class="nav-link" href="<?php echo site_url('satuan'); ?>">Satuan</a>
                <a class="nav-link" href="<?php echo site_url('supplier'); ?>">Supplier</a>
                <a class="nav-link" href="<?php echo site_url('kustomer'); ?>">Kustomer</a>
                <a class="nav-link" href="<?php echo site_url('barang'); ?>">Barang</a>
                <a class="nav-link" href="<?php echo site_url('user'); ?>">user</a>
              </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
              Management
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                  Transaksi
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?php echo site_url('penjualan'); ?>">Penjualan</a>
                    <a class="nav-link" href="<?php echo site_url('pembelian'); ?>">Pembelian</a>
                    <a class="nav-link" href="<?php echo site_url('return'); ?>">Return</a>

                  </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                  Laporan
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?php echo site_url('laporan/penjualan'); ?>">Laporan Penjualan</a>
                    <a class="nav-link" href="<?php echo site_url('laporan/barang'); ?>">Laporan Barang</a>
                    <a class="nav-link" href="<?php echo site_url('laporan/stok'); ?>">Laporan Stok</a>
                    <a class="nav-link" href="<?php echo site_url('laporan/pembelian'); ?>"> Laporan Pembelian</a>
                    <a class="nav-link" href="<?php echo site_url('laporan/return'); ?>">Stok Barang</a>
                    <a class="nav-link" href="<?php echo site_url('kustomer/laporan'); ?>">Kustomer</a>
                  </nav>
                </div>
              </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="charts.html">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Charts
            </a>
            <a class="nav-link" href="tables.html">
              <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
              Tables
            </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
          Start Bootstrap
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">