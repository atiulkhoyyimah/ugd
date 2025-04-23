<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIP-Kes - @yield('title', 'Sistem Informasi Pelayanan Kesehatan')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --sidebar-width: 250px;
            --sidebar-bg: #2c3e50;
            --sidebar-color: #ecf0f1;
            --header-height: 60px;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }
        
        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--sidebar-bg);
            color: var(--sidebar-color);
            position: fixed;
            left: 0;
            top: 0;
            padding: 20px 0;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s;
            z-index: 1000;
        }
        
        .sidebar-header {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 20px;
        }
        
        .sidebar-header h3 {
            color: #fff;
            margin: 0;
            font-weight: 600;
        }
        
        .sidebar-header small {
            font-size: 12px;
            opacity: 0.7;
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .menu-header {
            padding: 10px 20px;
            font-size: 12px;
            text-transform: uppercase;
            color: #b8c7ce;
            font-weight: 600;
        }
        
        .menu-item a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #b8c7ce;
            text-decoration: none;
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }
        
        .menu-item a:hover, .menu-item a.active {
            background: rgba(0,0,0,0.2);
            color: #fff;
            border-left: 3px solid #3498db;
        }
        
        .menu-icon {
            margin-right: 10px;
            font-size: 16px;
            width: 20px;
            text-align: center;
        }
        
        .menu-text {
            flex: 1;
        }
        
        .menu-badge {
            font-size: 12px;
        }
        
        /* Main Content Styles */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 20px;
            min-height: calc(100vh - var(--header-height));
            margin-top: var(--header-height);
            transition: all 0.3s;
        }
        
        /* Header Styles */
        .main-header {
            height: var(--header-height);
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            left: var(--sidebar-width);
            right: 0;
            z-index: 999;
            display: flex;
            align-items: center;
            margin-top: -50px;
            justify-content: space-between;
            padding: 0 20px;
            transition: all 0.3s;
        }
        
        .sidebar-toggle {
            background: none;
            border: none;
            font-size: 1.2rem;
            color: #2c3e50;
            cursor: pointer;
            display: none;
        }
        
        .header-title h1 {
            font-size: 1.5rem;
            margin: 0;
            color: #2c3e50;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
        }
        
        .user-info {
            margin-right: 15px;
            text-align: right;
        }
        
        .user-name {
            font-weight: 600;
            margin: 0;
            font-size: 14px;
        }
        
        .user-role {
            font-size: 12px;
            color: #7f8c8d;
            margin: 0;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #3498db;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                left: -var(--sidebar-width);
            }
            
            .main-content, .main-header {
                margin-left: 0;
                left: 0;
            }
            
            .sidebar.active {
                left: 0;
            }
            
            .main-content.active, .main-header.active {
                margin-left: var(--sidebar-width);
                left: var(--sidebar-width);
            }
            
            .sidebar-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>
    @include('layout.sidebar')
    @include('layout.header')

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Toggle sidebar on mobile
        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.main-content').classList.toggle('active');
            document.querySelector('.main-header').classList.toggle('active');
        }
        
        // Set active page on load
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const menuItems = document.querySelectorAll('.sidebar-menu a');
            
            menuItems.forEach(item => {
                if (item.getAttribute('href') === currentPath) {
                    item.classList.add('active');
                }
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>