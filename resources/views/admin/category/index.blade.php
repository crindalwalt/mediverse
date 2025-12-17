<x-layouts.dashboard-layout>
    <!-- ===== CONTENT AREA ===== -->
    <div class="admin-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-content">
                <div>
                    <h1 class="page-title">Categories Management</h1>
                    <p class="page-subtitle">Manage and organize medicine categories</p>
                </div>
                <a href="/admin/categories/create" class="btn-primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 5v14M5 12h14"/>
                    </svg>
                    Add New Category
                </a>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid stats-grid-3">
            <!-- Total Categories -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon purple">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                </div>
                <div class="stat-card-body">
                    <div class="stat-card-value">9</div>
                    <div class="stat-card-label">Total Categories</div>
                </div>
                <div class="stat-card-footer">
                    Active categories
                </div>
            </div>

            <!-- Total Medicines -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon blue">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                </div>
                <div class="stat-card-body">
                    <div class="stat-card-value">10</div>
                    <div class="stat-card-label">Total Medicines</div>
                </div>
                <div class="stat-card-footer">
                    Across all categories
                </div>
            </div>

            <!-- Most Used -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon green">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                            <circle cx="8.5" cy="7" r="4"/>
                            <path d="M20 8v6M23 11h-6"/>
                        </svg>
                    </div>
                </div>
                <div class="stat-card-body">
                    <div class="stat-card-value">Medications</div>
                    <div class="stat-card-label">Most Used</div>
                </div>
                <div class="stat-card-footer">
                    3 medicines
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class="table-card">
            <!-- Table Card Header -->
            <div class="table-card-header">
                <div class="table-card-title-section">
                    <h2 class="table-card-title">All Categories</h2>
                    <span class="table-card-count">9 categories</span>
                </div>
                <div class="table-card-actions">
                    <!-- Search -->
                    <div class="table-search">
                        <svg class="table-search-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="M21 21l-4.35-4.35"/>
                        </svg>
                        <input type="text" class="table-search-input" placeholder="Search categories...">
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="table-wrapper">
                <table class="data-table">
                    <thead class="data-table-head">
                        <tr>
                            <th class="data-table-th checkbox-col">
                                <input type="checkbox" class="table-checkbox">
                            </th>
                            <th class="data-table-th">Category</th>
                            <th class="data-table-th">Slug</th>
                            <th class="data-table-th">Medicines Count</th>
                            <th class="data-table-th">Created Date</th>
                            <th class="data-table-th actions-col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="data-table-body">
                        <!-- Category Row 1 -->
                        <tr class="data-table-row">
                            <td class="data-table-td checkbox-col">
                                <input type="checkbox" class="table-checkbox">
                            </td>
                            <td class="data-table-td">
                                <div class="category-info">
                                    <div class="category-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                            <path d="M2 17l10 5 10-5"/>
                                            <path d="M2 12l10 5 10-5"/>
                                        </svg>
                                    </div>
                                    <div class="category-name">Medications</div>
                                </div>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">medications</span>
                            </td>
                            <td class="data-table-td">
                                <span class="medicine-count">3 medicines</span>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Nov 29, 2024</span>
                            </td>
                            <td class="data-table-td actions-col">
                                <div class="table-actions">
                                    <button class="action-btn action-btn-edit" title="Edit">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg>
                                    </button>
                                    <button class="action-btn action-btn-delete" title="Delete">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Category Row 2 -->
                        <tr class="data-table-row">
                            <td class="data-table-td checkbox-col">
                                <input type="checkbox" class="table-checkbox">
                            </td>
                            <td class="data-table-td">
                                <div class="category-info">
                                    <div class="category-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                            <path d="M2 17l10 5 10-5"/>
                                            <path d="M2 12l10 5 10-5"/>
                                        </svg>
                                    </div>
                                    <div class="category-name">Diseases</div>
                                </div>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">diseases</span>
                            </td>
                            <td class="data-table-td">
                                <span class="medicine-count">2 medicines</span>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Nov 29, 2024</span>
                            </td>
                            <td class="data-table-td actions-col">
                                <div class="table-actions">
                                    <button class="action-btn action-btn-edit" title="Edit">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg>
                                    </button>
                                    <button class="action-btn action-btn-delete" title="Delete">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Category Row 3 -->
                        <tr class="data-table-row">
                            <td class="data-table-td checkbox-col">
                                <input type="checkbox" class="table-checkbox">
                            </td>
                            <td class="data-table-td">
                                <div class="category-info">
                                    <div class="category-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                            <path d="M2 17l10 5 10-5"/>
                                            <path d="M2 12l10 5 10-5"/>
                                        </svg>
                                    </div>
                                    <div class="category-name">Women Health</div>
                                </div>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">women-health</span>
                            </td>
                            <td class="data-table-td">
                                <span class="medicine-count">1 medicine</span>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Nov 29, 2024</span>
                            </td>
                            <td class="data-table-td actions-col">
                                <div class="table-actions">
                                    <button class="action-btn action-btn-edit" title="Edit">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg>
                                    </button>
                                    <button class="action-btn action-btn-delete" title="Delete">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Category Row 4 -->
                        <tr class="data-table-row">
                            <td class="data-table-td checkbox-col">
                                <input type="checkbox" class="table-checkbox">
                            </td>
                            <td class="data-table-td">
                                <div class="category-info">
                                    <div class="category-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                            <path d="M2 17l10 5 10-5"/>
                                            <path d="M2 12l10 5 10-5"/>
                                        </svg>
                                    </div>
                                    <div class="category-name">Men Health</div>
                                </div>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">men-health</span>
                            </td>
                            <td class="data-table-td">
                                <span class="medicine-count">1 medicine</span>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Nov 29, 2024</span>
                            </td>
                            <td class="data-table-td actions-col">
                                <div class="table-actions">
                                    <button class="action-btn action-btn-edit" title="Edit">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg>
                                    </button>
                                    <button class="action-btn action-btn-delete" title="Delete">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Category Row 5 -->
                        <tr class="data-table-row">
                            <td class="data-table-td checkbox-col">
                                <input type="checkbox" class="table-checkbox">
                            </td>
                            <td class="data-table-td">
                                <div class="category-info">
                                    <div class="category-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                            <path d="M2 17l10 5 10-5"/>
                                            <path d="M2 12l10 5 10-5"/>
                                        </svg>
                                    </div>
                                    <div class="category-name">Mental Health</div>
                                </div>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">mental-health</span>
                            </td>
                            <td class="data-table-td">
                                <span class="medicine-count">1 medicine</span>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Nov 29, 2024</span>
                            </td>
                            <td class="data-table-td actions-col">
                                <div class="table-actions">
                                    <button class="action-btn action-btn-edit" title="Edit">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg>
                                    </button>
                                    <button class="action-btn action-btn-delete" title="Delete">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Table Footer / Pagination -->
            <div class="table-footer">
                <div class="table-footer-info">
                    Showing <strong>1-5</strong> of <strong>9</strong> categories
                </div>
                <div class="table-pagination">
                    <button class="pagination-btn" disabled>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M15 18l-6-6 6-6"/>
                        </svg>
                    </button>
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn">2</button>
                    <button class="pagination-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 18l6-6-6-6"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Stats Grid 3 Columns */
        .stats-grid-3 {
            grid-template-columns: repeat(3, 1fr);
        }

        /* Category Info Cell */
        .category-info {
            display: flex;
            align-items: center;
            gap: 0.875rem;
        }

        .category-icon {
            width: 44px;
            height: 44px;
            background: var(--admin-accent-light);
            color: var(--admin-accent);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .category-name {
            font-weight: 600;
            color: var(--admin-text-primary);
        }

        .medicine-count {
            color: var(--admin-text-secondary);
            font-size: 0.875rem;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .stats-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .stats-grid-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</x-layouts.dashboard-layout>