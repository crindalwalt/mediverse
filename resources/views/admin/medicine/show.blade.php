<x-layouts.dashboard-layout>
    <div class="admin-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-content">
                <div>
                    <div class="breadcrumb">
                        <a href="/admin/dashboard" class="breadcrumb-link">Dashboard</a>
                        <span class="breadcrumb-separator">/</span>
                        <a href="/admin/medicines" class="breadcrumb-link">Medicines</a>
                        <span class="breadcrumb-separator">/</span>
                        <span class="breadcrumb-current">{{ $medicine->name }}</span>
                    </div>
                    <h1 class="page-title">Medicine Details</h1>
                </div>
                <div class="page-header-actions">
                    <a href="/admin/medicines/1/edit" class="btn-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                            <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                        </svg>
                        Edit Medicine
                    </a>
                    <button class="btn-danger">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                        </svg>
                        Delete
                    </button>
                </div>
            </div>
        </div>

        <div class="view-grid">
            <!-- Main Content Column -->
            <div class="view-main">
                <!-- Medicine Info Card -->
                <div class="view-card">
                    <div class="view-card-header">
                        <div class="medicine-header">
                            <div class="medicine-icon-large">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                </svg>
                            </div>
                            <div>
                                <h2 class="medicine-title">{{ $medicine->name }}</h2>
                                <p class="medicine-meta">Generic: {{ $medicine->generic_name }} • Category: {{ $medicine->category->name }}</p>
                            </div>
                        </div>
                        <span class="status-badge @if($medicine->status == 'draft') status-draft @else status-published @endif">{{ ucfirst($medicine->status) }}</span>
                    </div>

                    <div class="view-card-body">
                        <div class="info-section">
                            <h3 class="info-section-title">Summary</h3>
                            <p class="info-text">
                                {{ $medicine->summary }}
                            </p>
                        </div>

                        <div class="info-section">
                            <h3 class="info-section-title">Detailed Description</h3>
                            <div class="info-text">
                                {{ $medicine->long_description }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Effects Card -->
                <div class="view-card">
                    <div class="view-card-header">
                        <h3 class="view-card-title">Side Effects</h3>
                        <span class="badge-count">3 effects</span>
                    </div>

                    <div class="view-card-body">
                        <div class="side-effects-list">
                            <!-- Positive Effect -->
                            <div class="side-effect-item positive">
                                <div class="side-effect-header">
                                    <div class="side-effect-icon positive">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                                            <path d="M22 4L12 14.01l-3-3"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="side-effect-title">Effective Pain Relief</h4>
                                        <span class="side-effect-badge positive">Positive Effect</span>
                                    </div>
                                </div>
                                <p class="side-effect-description">
                                    Provides fast and effective relief from various types of pain including headaches, muscle aches, and inflammation.
                                </p>
                            </div>

                            <!-- Negative Effect - Mild -->
                            <div class="side-effect-item negative">
                                <div class="side-effect-header">
                                    <div class="side-effect-icon negative">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"/>
                                            <path d="M12 8v4M12 16h.01"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="side-effect-title">Stomach Upset</h4>
                                        <div class="side-effect-badges">
                                            <span class="side-effect-badge negative">Negative Effect</span>
                                            <span class="severity-badge mild">Mild</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="side-effect-description">
                                    May cause mild stomach discomfort, nausea, or heartburn. Can be minimized by taking with food.
                                </p>
                            </div>

                            <!-- Negative Effect - Moderate -->
                            <div class="side-effect-item negative">
                                <div class="side-effect-header">
                                    <div class="side-effect-icon negative">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
                                            <path d="M12 9v4M12 17h.01"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="side-effect-title">Cardiovascular Risk</h4>
                                        <div class="side-effect-badges">
                                            <span class="side-effect-badge negative">Negative Effect</span>
                                            <span class="severity-badge moderate">Moderate</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="side-effect-description">
                                    Long-term use may increase risk of heart attack or stroke, especially in people with existing heart conditions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="view-sidebar">
                <!-- Quick Info Card -->
                <div class="view-card">
                    <div class="view-card-header">
                        <h3 class="view-card-title">Quick Information</h3>
                    </div>
                    <div class="view-card-body">
                        <div class="info-list">
                            <div class="info-list-item">
                                <span class="info-list-label">Status</span>
                                                        <span class="status-badge @if($medicine->status == 'draft') status-draft @else status-published @endif">{{ ucfirst($medicine->status) }}</span>

                            </div>
                            <div class="info-list-item">
                                <span class="info-list-label">Category</span>
                                <span class="info-list-value">Medications</span>
                            </div>
                            <div class="info-list-item">
                                <span class="info-list-label">Generic Name</span>
                                <span class="info-list-value">Ibuprofen</span>
                            </div>
                            <div class="info-list-item">
                                <span class="info-list-label">Slug</span>
                                <span class="info-list-value">ibuprofen</span>
                            </div>
                            <div class="info-list-item">
                                <span class="info-list-label">Side Effects</span>
                                <span class="info-list-value">3 effects</span>
                            </div>
                            <div class="info-list-item">
                                <span class="info-list-label">Published</span>
                                <span class="info-list-value">Dec 5, 2024</span>
                            </div>
                            <div class="info-list-item">
                                <span class="info-list-label">Last Updated</span>
                                <span class="info-list-value">Dec 9, 2024</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions Card -->
                <div class="view-card">
                    <div class="view-card-header">
                        <h3 class="view-card-title">Actions</h3>
                    </div>
                    <div class="view-card-body">
                        <div class="action-list">
                            <a href="/admin/medicines/1/edit" class="action-list-item">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/>
                                    <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                </svg>
                                Edit Medicine
                            </a>
                            <a href="#" class="action-list-item">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4M10 17l5-5-5-5M13.8 12H3"/>
                                </svg>
                                Duplicate
                            </a>
                            <a href="#" class="action-list-item">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                View on Site
                            </a>
                            <a href="#" class="action-list-item danger">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                                </svg>
                                Delete Medicine
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
            font-size: 0.875rem;
        }

        .breadcrumb-link {
            color: var(--admin-text-secondary);
            text-decoration: none;
            transition: color 0.2s;
        }

        .breadcrumb-link:hover {
            color: var(--admin-accent);
        }

        .breadcrumb-separator {
            color: var(--admin-text-muted);
        }

        .breadcrumb-current {
            color: var(--admin-text-primary);
            font-weight: 500;
        }

        /* Page Header Actions */
        .page-header-actions {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .btn-danger {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: var(--admin-danger);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 0.925rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            font-family: inherit;
        }

        .btn-danger:hover {
            background: #dc2626;
            transform: translateY(-2px);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: var(--admin-accent);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 0.925rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            font-family: inherit;
        }

        .btn-secondary:hover {
            background: var(--admin-accent);
            filter: brightness(0.9);
            transform: translateY(-2px);
        }

        /* View Grid Layout */
        .view-grid {
            display: grid;
            grid-template-columns: 1fr 360px;
            gap: 2rem;
        }

        .view-main {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .view-sidebar {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* View Card */
        .view-card {
            background: var(--admin-surface);
            border: 1px solid var(--admin-border);
            border-radius: 16px;
            overflow: hidden;
        }

        .view-card-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--admin-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .view-card-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--admin-text-primary);
        }

        .view-card-body {
            padding: 1.5rem;
        }

        /* Medicine Header */
        .medicine-header {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .medicine-icon-large {
            width: 64px;
            height: 64px;
            background: var(--admin-accent-light);
            color: var(--admin-accent);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .medicine-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--admin-text-primary);
            margin-bottom: 0.25rem;
        }

        .medicine-meta {
            font-size: 0.875rem;
            color: var(--admin-text-secondary);
        }

        /* Info Section */
        .info-section {
            margin-bottom: 2rem;
        }

        .info-section:last-child {
            margin-bottom: 0;
        }

        .info-section-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--admin-text-primary);
            margin-bottom: 0.75rem;
        }

        .info-text {
            font-size: 0.925rem;
            line-height: 1.7;
            color: var(--admin-text-secondary);
        }

        /* Badge Count */
        .badge-count {
            padding: 0.25rem 0.75rem;
            background: var(--admin-background);
            color: var(--admin-text-muted);
            font-size: 0.8125rem;
            font-weight: 600;
            border-radius: 100px;
        }

        /* Side Effects List */
        .side-effects-list {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .side-effect-item {
            padding: 1.25rem;
            border-radius: 12px;
            border: 1px solid var(--admin-border);
            background: var(--admin-background);
        }

        .side-effect-header {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 0.75rem;
        }

        .side-effect-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .side-effect-icon.positive {
            background: var(--admin-success-light);
            color: var(--admin-success);
        }

        .side-effect-icon.negative {
            background: var(--admin-danger-light);
            color: var(--admin-danger);
        }

        .side-effect-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--admin-text-primary);
            margin-bottom: 0.5rem;
        }

        .side-effect-badges {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .status-badge{
            display: inline-flex;
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 600;
            border-radius: 100px;
        }
        .status-published {
            background: var(--admin-success-light);
            color: var(--admin-success);
        }
        .status-draft {
            background: var(--admin-warning-light);
            color: var(--admin-warning);
        }

        .side-effect-badge {
            display: inline-flex;
            padding: 0.25rem 0.625rem;
            font-size: 0.75rem;
            font-weight: 600;
            border-radius: 6px;
        }

        .side-effect-badge.positive {
            background: var(--admin-success-light);
            color: var(--admin-success);
        }

        .side-effect-badge.negative {
            background: var(--admin-danger-light);
            color: var(--admin-danger);
        }

        .severity-badge {
            display: inline-flex;
            padding: 0.25rem 0.625rem;
            font-size: 0.75rem;
            font-weight: 600;
            border-radius: 6px;
        }

        .severity-badge.mild {
            background: var(--admin-warning-light);
            color: var(--admin-warning);
        }

        .severity-badge.moderate {
            background: #fef3c7;
            color: #d97706;
        }

        .severity-badge.severe {
            background: var(--admin-danger-light);
            color: var(--admin-danger);
        }

        .side-effect-description {
            font-size: 0.875rem;
            line-height: 1.6;
            color: var(--admin-text-secondary);
        }

        /* Info List */
        .info-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .info-list-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .info-list-label {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--admin-text-secondary);
        }

        .info-list-value {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--admin-text-primary);
            text-align: right;
        }

        /* Action List */
        .action-list {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .action-list-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.875rem 1rem;
            background: var(--admin-background);
            border: 1px solid var(--admin-border);
            border-radius: 10px;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--admin-text-primary);
            text-decoration: none;
            transition: all 0.2s;
        }

        .action-list-item:hover {
            border-color: var(--admin-accent);
            color: var(--admin-accent);
            background: var(--admin-surface);
        }

        .action-list-item.danger {
            color: var(--admin-danger);
        }

        .action-list-item.danger:hover {
            border-color: var(--admin-danger);
            background: var(--admin-danger-light);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .view-grid {
                grid-template-columns: 1fr;
            }

            .view-sidebar {
                order: -1;
            }
        }

        @media (max-width: 768px) {
            .page-header-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .page-header-actions {
                width: 100%;
            }

            .medicine-header {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</x-layouts.dashboard-layout>
