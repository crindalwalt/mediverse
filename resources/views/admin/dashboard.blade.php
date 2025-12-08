<x-layouts.dashboard-layout>
    <!-- ===== CONTENT AREA ===== -->
    <div class="admin-content">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Dashboard Overview</h1>
            <p class="page-subtitle">Welcome back! Here's what's happening with your medicine directory today.</p>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <!-- Total Medicines -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon blue">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <div class="stat-card-trend up">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 19V5M5 12l7-7 7 7" />
                        </svg>
                        12%
                    </div>
                </div>
                <div class="stat-card-body">
                    <div class="stat-card-value">10</div>
                    <div class="stat-card-label">Total Medicines</div>
                </div>
                <div class="stat-card-footer">
                    +2 from last month
                </div>
            </div>

            <!-- Total Categories -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon green">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z" />
                            <path d="M2 17l10 5 10-5" />
                            <path d="M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <div class="stat-card-trend up">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 19V5M5 12l7-7 7 7" />
                        </svg>
                        8%
                    </div>
                </div>
                <div class="stat-card-body">
                    <div class="stat-card-value">9</div>
                    <div class="stat-card-label">Categories</div>
                </div>
                <div class="stat-card-footer">
                    All active categories
                </div>
            </div>

            <!-- Side Effects -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon orange">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <div class="stat-card-trend up">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 19V5M5 12l7-7 7 7" />
                        </svg>
                        24%
                    </div>
                </div>
                <div class="stat-card-body">
                    <div class="stat-card-value">30</div>
                    <div class="stat-card-label">Side Effects</div>
                </div>
                <div class="stat-card-footer">
                    Across all medicines
                </div>
            </div>

            <!-- Total Users -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon purple">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 00-3-3.87" />
                            <path d="M16 3.13a4 4 0 010 7.75" />
                        </svg>
                    </div>
                    <div class="stat-card-trend up">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 19V5M5 12l7-7 7 7" />
                        </svg>
                        18%
                    </div>
                </div>
                <div class="stat-card-body">
                    <div class="stat-card-value">1</div>
                    <div class="stat-card-label">Total Users</div>
                </div>
                <div class="stat-card-footer">
                    Active users
                </div>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="content-grid">
            <!-- Recent Medicines -->
            <div class="content-card">
                <div class="content-card-header">
                    <h2 class="content-card-title">Recent Medicines</h2>
                    <a href="#" class="content-card-action">
                        View all
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <div class="content-card-body">
                    <ul class="recent-list">
                        <li class="recent-item">
                            <div class="recent-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <div class="recent-item-content">
                                <div class="recent-item-title">Ibuprofen</div>
                                <div class="recent-item-meta">Updated 2 hours ago</div>
                            </div>
                            <div class="recent-item-action">
                                <span class="recent-item-badge published">Published</span>
                            </div>
                        </li>
                        <li class="recent-item">
                            <div class="recent-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <div class="recent-item-content">
                                <div class="recent-item-title">Amoxicillin</div>
                                <div class="recent-item-meta">Updated 5 hours ago</div>
                            </div>
                            <div class="recent-item-action">
                                <span class="recent-item-badge published">Published</span>
                            </div>
                        </li>
                        <li class="recent-item">
                            <div class="recent-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <div class="recent-item-content">
                                <div class="recent-item-title">Metformin</div>
                                <div class="recent-item-meta">Updated 1 day ago</div>
                            </div>
                            <div class="recent-item-action">
                                <span class="recent-item-badge draft">Draft</span>
                            </div>
                        </li>
                        <li class="recent-item">
                            <div class="recent-item-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <div class="recent-item-content">
                                <div class="recent-item-title">Vitamin D3</div>
                                <div class="recent-item-meta">Updated 2 days ago</div>
                            </div>
                            <div class="recent-item-action">
                                <span class="recent-item-badge published">Published</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="content-card">
                <div class="content-card-header">
                    <h2 class="content-card-title">Recent Activity</h2>
                    <a href="#" class="content-card-action">
                        View all
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <div class="content-card-body">
                    <ul class="activity-feed">
                        <li class="activity-item">
                            <div class="activity-icon blue">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7" />
                                    <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                                </svg>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text">
                                    <strong>You</strong> updated <strong>Ibuprofen</strong> medicine
                                </div>
                                <div class="activity-time">2 hours ago</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon green">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M12 5v14M5 12h14" />
                                </svg>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text">
                                    <strong>You</strong> added new side effect to <strong>Amoxicillin</strong>
                                </div>
                                <div class="activity-time">5 hours ago</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon purple">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                    <path d="M2 17l10 5 10-5" />
                                </svg>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text">
                                    <strong>You</strong> created new category <strong>Mental Health</strong>
                                </div>
                                <div class="activity-time">1 day ago</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon blue">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                    <path d="M20 8v6M23 11h-6" />
                                </svg>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text">
                                    New user <strong>John Doe</strong> registered
                                </div>
                                <div class="activity-time">2 days ago</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard-layout>
