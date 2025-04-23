<header class="main-header">
    <button class="sidebar-toggle" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>
    
    <div class="header-title">
        <h1>@yield('title', 'Dashboard')</h1>
    </div>
    
    <div class="user-menu">
        <div class="user-info">
            <p class="user-name">Admin SIP-Kes</p>
            <p class="user-role">Administrator</p>
        </div>
        <div class="user-avatar">
            <i class="fas fa-user"></i>
        </div>
    </div>
</header>