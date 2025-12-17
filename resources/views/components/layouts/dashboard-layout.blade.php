<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard - {{ config('app.name', 'Mediverse') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* =====================================================
           ADMIN DASHBOARD STYLES - ORGANIZED BY COMPONENTS
           ===================================================== */

        /* ----- ROOT VARIABLES ----- */
        :root {
            --admin-primary: #1a1a1a;
            --admin-secondary: #f5f5f5;
            --admin-accent: #3b82f6;
            --admin-accent-hover: #2563eb;
            --admin-accent-light: #dbeafe;
            --admin-success: #10b981;
            --admin-success-light: #d1fae5;
            --admin-warning: #f59e0b;
            --admin-warning-light: #fef3c7;
            --admin-danger: #ef4444;
            --admin-danger-light: #fee2e2;
            --admin-info: #8b5cf6;
            --admin-info-light: #ede9fe;
            --admin-text-primary: #1a1a1a;
            --admin-text-secondary: #6b7280;
            --admin-text-muted: #9ca3af;
            --admin-border: #e5e7eb;
            --admin-surface: #ffffff;
            --admin-background: #f9fafb;
            --admin-sidebar-width: 280px;
            --admin-header-height: 72px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Instrument Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--admin-background);
            color: var(--admin-text-primary);
            overflow-x: hidden;
        }

        /* ===== ADMIN LAYOUT ===== */
        .admin-layout {
            display: flex;
            min-height: 100vh;
        }

        /* ===== SIDEBAR COMPONENT ===== */
        .admin-sidebar {
            width: var(--admin-sidebar-width);
            background: var(--admin-surface);
            border-right: 1px solid var(--admin-border);
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            z-index: 100;
            transition: transform 0.3s ease;
        }

        /* Sidebar Header */
        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--admin-border);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .sidebar-logo {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--admin-accent), #1d4ed8);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .sidebar-logo svg {
            width: 28px;
            height: 28px;
            color: white;
        }

        .sidebar-brand {
            display: flex;
            flex-direction: column;
        }

        .sidebar-brand-name {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--admin-text-primary);
            line-height: 1.2;
        }

        .sidebar-brand-tagline {
            font-size: 0.75rem;
            color: var(--admin-text-muted);
            font-weight: 500;
        }

        /* Sidebar Navigation */
        .sidebar-nav {
            flex: 1;
            padding: 1.5rem 1rem;
            overflow-y: auto;
        }

        .sidebar-nav-section {
            margin-bottom: 2rem;
        }

        .sidebar-nav-title {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--admin-text-muted);
            padding: 0 0.75rem;
            margin-bottom: 0.75rem;
        }

        .sidebar-nav-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .sidebar-nav-item {
            position: relative;
        }

        .sidebar-nav-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem;
            border-radius: 10px;
            text-decoration: none;
            color: var(--admin-text-secondary);
            font-weight: 500;
            font-size: 0.925rem;
            transition: all 0.2s;
            position: relative;
        }

        .sidebar-nav-link:hover {
            background: var(--admin-background);
            color: var(--admin-text-primary);
        }

        .sidebar-nav-link.active {
            background: var(--admin-accent-light);
            color: var(--admin-accent);
        }

        .sidebar-nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 60%;
            background: var(--admin-accent);
            border-radius: 0 3px 3px 0;
        }

        .sidebar-nav-icon {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }

        .sidebar-nav-text {
            flex: 1;
        }

        .sidebar-nav-badge {
            background: var(--admin-danger);
            color: white;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.125rem 0.5rem;
            border-radius: 100px;
        }

        /* Sidebar Footer */
        .sidebar-footer {
            padding: 1rem;
            border-top: 1px solid var(--admin-border);
        }

        .sidebar-user {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem;
            border-radius: 10px;
            background: var(--admin-background);
        }

        .sidebar-user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--admin-accent), #1d4ed8);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.925rem;
            flex-shrink: 0;
        }

        .sidebar-user-info {
            flex: 1;
            min-width: 0;
        }

        .sidebar-user-name {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--admin-text-primary);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .sidebar-user-role {
            font-size: 0.75rem;
            color: var(--admin-text-muted);
        }

        /* ===== MAIN CONTENT ===== */
        .admin-main {
            flex: 1;
            margin-left: var(--admin-sidebar-width);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ===== HEADER COMPONENT ===== */
        .admin-header {
            height: var(--admin-header-height);
            background: var(--admin-surface);
            border-bottom: 1px solid var(--admin-border);
            position: sticky;
            top: 0;
            z-index: 90;
            display: flex;
            align-items: center;
            padding: 0 2rem;
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.95);
        }

        .header-left {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .header-search {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        .header-search-input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 3rem;
            border: 1.5px solid var(--admin-border);
            border-radius: 12px;
            font-size: 0.925rem;
            font-family: inherit;
            transition: all 0.2s;
            background: var(--admin-background);
        }

        .header-search-input:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 3px var(--admin-accent-light);
            background: var(--admin-surface);
        }

        .header-search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            color: var(--admin-text-muted);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .header-action-btn {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            border: none;
            background: var(--admin-background);
            color: var(--admin-text-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            position: relative;
        }

        .header-action-btn:hover {
            background: var(--admin-border);
            color: var(--admin-text-primary);
        }

        .header-action-btn .badge {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 8px;
            height: 8px;
            background: var(--admin-danger);
            border-radius: 50%;
            border: 2px solid var(--admin-surface);
        }

        .header-divider {
            width: 1px;
            height: 28px;
            background: var(--admin-border);
            margin: 0 0.5rem;
        }

        .header-user {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.5rem 0.75rem;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.2s;
            position: relative;
        }

        .header-user:hover {
            background: var(--admin-background);
        }

        .header-user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--admin-accent), #1d4ed8);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.925rem;
        }

        .header-user-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .header-user-name {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--admin-text-primary);
        }

        .header-user-role {
            font-size: 0.75rem;
            color: var(--admin-text-muted);
        }

        .header-user-dropdown-icon {
            width: 16px;
            height: 16px;
            color: var(--admin-text-muted);
        }

        /* User Dropdown Menu */
        .user-dropdown {
            position: absolute;
            top: calc(100% + 0.5rem);
            right: 0;
            width: 220px;
            background: var(--admin-surface);
            border: 1px solid var(--admin-border);
            border-radius: 12px;
            box-shadow: 0 10px 40px -12px rgba(0, 0, 0, 0.15);
            display: none;
            flex-direction: column;
            overflow: hidden;
        }

        .user-dropdown.active {
            display: flex;
        }

        .user-dropdown-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.875rem 1rem;
            text-decoration: none;
            color: var(--admin-text-secondary);
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.2s;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            font-family: inherit;
        }

        .user-dropdown-item:hover {
            background: var(--admin-background);
            color: var(--admin-text-primary);
        }

        .user-dropdown-divider {
            height: 1px;
            background: var(--admin-border);
            margin: 0.25rem 0;
        }

        .user-dropdown-item.danger {
            color: var(--admin-danger);
        }

        .user-dropdown-item.danger:hover {
            background: var(--admin-danger-light);
        }

        /* ===== CONTENT AREA ===== */
        .admin-content {
            flex: 1;
            padding: 2rem;
        }

        /* Page Header */
        .page-header {
            margin-bottom: 2rem;
        }

        .page-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--admin-text-primary);
            margin-bottom: 0.5rem;
        }

        .page-subtitle {
            font-size: 1rem;
            color: var(--admin-text-secondary);
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--admin-surface);
            border: 1px solid var(--admin-border);
            border-radius: 16px;
            padding: 1.5rem;
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px -8px rgba(0, 0, 0, 0.1);
        }

        .stat-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .stat-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stat-card-icon.blue {
            background: var(--admin-accent-light);
            color: var(--admin-accent);
        }

        .stat-card-icon.green {
            background: var(--admin-success-light);
            color: var(--admin-success);
        }

        .stat-card-icon.orange {
            background: var(--admin-warning-light);
            color: var(--admin-warning);
        }

        .stat-card-icon.purple {
            background: var(--admin-info-light);
            color: var(--admin-info);
        }

        .stat-card-trend {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            font-size: 0.875rem;
            font-weight: 600;
            padding: 0.25rem 0.625rem;
            border-radius: 100px;
        }

        .stat-card-trend.up {
            background: var(--admin-success-light);
            color: var(--admin-success);
        }

        .stat-card-trend.down {
            background: var(--admin-danger-light);
            color: var(--admin-danger);
        }

        .stat-card-body {
            margin-bottom: 0.5rem;
        }

        .stat-card-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--admin-text-primary);
            margin-bottom: 0.25rem;
        }

        .stat-card-label {
            font-size: 0.925rem;
            color: var(--admin-text-secondary);
            font-weight: 500;
        }

        .stat-card-footer {
            font-size: 0.875rem;
            color: var(--admin-text-muted);
        }

        /* Content Grid */
        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .content-card {
            background: var(--admin-surface);
            border: 1px solid var(--admin-border);
            border-radius: 16px;
            overflow: hidden;
        }

        .content-card-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--admin-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .content-card-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--admin-text-primary);
        }

        .content-card-action {
            font-size: 0.875rem;
            color: var(--admin-accent);
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .content-card-action:hover {
            color: var(--admin-accent-hover);
        }

        .content-card-body {
            padding: 1.5rem;
        }

        /* Recent Items List */
        .recent-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .recent-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.875rem;
            border-radius: 12px;
            transition: background 0.2s;
        }

        .recent-item:hover {
            background: var(--admin-background);
        }

        .recent-item-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: var(--admin-accent-light);
            color: var(--admin-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .recent-item-content {
            flex: 1;
            min-width: 0;
        }

        .recent-item-title {
            font-size: 0.925rem;
            font-weight: 600;
            color: var(--admin-text-primary);
            margin-bottom: 0.125rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .recent-item-meta {
            font-size: 0.8125rem;
            color: var(--admin-text-muted);
        }

        .recent-item-action {
            flex-shrink: 0;
        }

        .recent-item-badge {
            padding: 0.375rem 0.75rem;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .recent-item-badge.published {
            background: var(--admin-success-light);
            color: var(--admin-success);
        }

        .recent-item-badge.draft {
            background: var(--admin-warning-light);
            color: var(--admin-warning);
        }

        /* Activity Feed */
        .activity-feed {
            list-style: none;
            display: flex;
            flex-direction: column;
        }

        .activity-item {
            display: flex;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--admin-border);
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .activity-icon.blue {
            background: var(--admin-accent-light);
            color: var(--admin-accent);
        }

        .activity-icon.green {
            background: var(--admin-success-light);
            color: var(--admin-success);
        }

        .activity-icon.purple {
            background: var(--admin-info-light);
            color: var(--admin-info);
        }

        .activity-content {
            flex: 1;
        }

        .activity-text {
            font-size: 0.875rem;
            color: var(--admin-text-secondary);
            margin-bottom: 0.25rem;
        }

        .activity-text strong {
            color: var(--admin-text-primary);
            font-weight: 600;
        }

        .activity-time {
            font-size: 0.8125rem;
            color: var(--admin-text-muted);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .admin-sidebar {
                transform: translateX(-100%);
            }

            .admin-main {
                margin-left: 0;
            }

            .admin-content {
                padding: 1.5rem;
            }

            .header-search {
                display: none;
            }

            .header-user-info {
                display: none;
            }
        }
    </style>
</head>
<body>
    @include('sweetalert::alert')

    <!-- ===== ADMIN LAYOUT ===== -->
    <div class="admin-layout">

        <!-- ===== SIDEBAR COMPONENT ===== -->
        <x-utils.sidebar />

        <!-- ===== MAIN CONTENT ===== -->
        <main class="admin-main">

            <!-- ===== HEADER COMPONENT ===== -->
            <header class="admin-header">
                <!-- Header Left -->
                <div class="header-left">
                    <!-- Search -->
                    <div class="header-search">
                        <svg class="header-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="M21 21l-4.35-4.35"/>
                        </svg>
                        <input type="text" class="header-search-input" placeholder="Search medicines, categories, users...">
                    </div>
                </div>

                <!-- Header Right -->
                <div class="header-right">
                    <!-- Notifications -->
                    <button class="header-action-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                            <path d="M13.73 21a2 2 0 01-3.46 0"/>
                        </svg>
                        <span class="badge"></span>
                    </button>

                    <!-- Messages -->
                    <button class="header-action-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                        </svg>
                    </button>

                    <div class="header-divider"></div>

                    <!-- User Menu -->
                    <div class="header-user" onclick="toggleUserDropdown()">
                        <div class="header-user-avatar">
                            {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 2)) }}
                        </div>
                        <div class="header-user-info">
                            <div class="header-user-name">{{ Auth::user()->name ?? 'Admin User' }}</div>
                            <div class="header-user-role">Administrator</div>
                        </div>
                        <svg class="header-user-dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>

                        <!-- User Dropdown -->
                        <div class="user-dropdown" id="userDropdown">
                            <a href="#" class="user-dropdown-item">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                                    <circle cx="12" cy="7" r="4"/>
                                </svg>
                                Profile
                            </a>
                            <a href="#" class="user-dropdown-item">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="3"/>
                                    <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m4.24 4.24l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m4.24-4.24l4.24-4.24"/>
                                </svg>
                                Settings
                            </a>
                            <div class="user-dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                                @csrf
                                <button type="submit" class="user-dropdown-item danger">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/>
                                        <polyline points="16 17 21 12 16 7"/>
                                        <line x1="21" y1="12" x2="9" y2="12"/>
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            {{ $slot }}
        </main>
    </div>

    <script>
        // Toggle User Dropdown
        function toggleUserDropdown() {
            const dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('active');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const userMenu = document.querySelector('.header-user');
            const dropdown = document.getElementById('userDropdown');

            if (!userMenu.contains(event.target)) {
                dropdown.classList.remove('active');
            }
        });
    </script>
</body>
</html>
