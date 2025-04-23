<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <i class="fas fa-hospital-alt menu-icon"></i>
            <span>SIP-Kes</span>
        </h3>
        <small>Sistem Informasi Pelayanan Kesehatan</small>
    </div>

    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        
        <li class="menu-item">
            <a href="{{ url('/pendaftaran') }}" class="{{ request()->is('pendaftaran*') ? 'active' : '' }}">
                <i class="fas fa-user-plus menu-icon"></i>
                <span class="menu-text">Pendaftaran</span>
                <span class="menu-badge"><i class="fas fa-times"></i></span>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="{{ url('/pemeriksaan') }}" class="{{ request()->is('pemeriksaan*') ? 'active' : '' }}">
                <i class="fas fa-stethoscope menu-icon"></i>
                <span class="menu-text">Pemeriksaan</span>
                <span class="menu-badge"><i class="fas fa-check"></i></span>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="{{ url('/farmasi') }}" class="{{ request()->is('farmasi*') ? 'active' : '' }}">
                <i class="fas fa-pills menu-icon"></i>
                <span class="menu-text">Farmasi</span>
                <span class="menu-badge"><i class="fas fa-check"></i></span>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="{{ url('/pembayaran') }}" class="{{ request()->is('pembayaran*') ? 'active' : '' }}">
                <i class="fas fa-money-bill-wave menu-icon"></i>
                <span class="menu-text">Pembayaran</span>
                <span class="menu-badge"><i class="fas fa-check"></i></span>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="{{ url('/persuratan') }}" class="{{ request()->is('persuratan*') ? 'active' : '' }}">
                <i class="fas fa-envelope menu-icon"></i>
                <span class="menu-text">Persuratan</span>
                <span class="menu-badge"><i class="fas fa-check"></i></span>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="{{ url('/rekam-medis') }}" class="{{ request()->is('rekam-medis*') ? 'active' : '' }}">
                <i class="fas fa-file-medical menu-icon"></i>
                <span class="menu-text">Rekam Medis</span>
                <span class="menu-badge"><i class="fas fa-times"></i></span>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="{{ url('/laporan') }}" class="{{ request()->is('laporan*') ? 'active' : '' }}">
                <i class="fas fa-chart-bar menu-icon"></i>
                <span class="menu-text">Laporan</span>
                <span class="menu-badge"><i class="fas fa-times"></i></span>
            </a>
        </li>
        
        <li class="menu-item">
            <a href="{{ url('/master-data') }}" class="{{ request()->is('master-data*') ? 'active' : '' }}">
                <i class="fas fa-database menu-icon"></i>
                <span class="menu-text">Master Data</span>
                <span class="menu-badge"><i class="fas fa-times"></i></span>
            </a>
        </li>
    </ul>
</div>