<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a
                                class="nav-link"
                                href="{{ route('dashboardAdmin') }}"
                            >
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-tachometer-alt"></i>
                                </div>
                                Dashboard
                            </a>
                            <a
                                class="nav-link"
                                href="{{ route('bukuAdmin') }}"
                            >
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                Buku
                            </a>
                            <a
                                class="nav-link"
                                href="/public/VIEW-PERPUSTAKAAN/admin_kategori_buku.blade.html"
                            >
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-list"></i>
                                </div>
                                Kategori Buku
                            </a>
                            <a
                                class="nav-link"
                                href="/public/VIEW-PERPUSTAKAAN/admin_penulis.blade.html"
                            >
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-pencil"></i>
                                </div>
                                Penulis
                            </a>
                            <a
                                class="nav-link"
                                href="{{ route('create_penerbit') }}"
                            >
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-house"></i>
                                </div>
                                Penerbit
                            </a>
                            <a
                                class="nav-link"
                                href="/public/VIEW-PERPUSTAKAAN/admin_peminjaman.blade.html"
                            >
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-hand"></i>
                                </div>
                                Peminjaman
                            </a>
                            <a
                                class="nav-link"
                                href="/public/VIEW-PERPUSTAKAAN/admin_pengaturan.blade.html"
                            >
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-gear"></i>
                                </div>
                                Pengaturan
                            </a>
                            <a
                                class="nav-link"
                                href="/public/VIEW-PERPUSTAKAAN/login.blade.html"
                            >
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-right-from-bracket"></i>
                                </div>
                                Logout
                            </a>
                        </div>
                    </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
            </div>
    </nav>
</div>