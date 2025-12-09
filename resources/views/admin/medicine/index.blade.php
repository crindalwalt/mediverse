<x-layouts.dashboard-layout>
    <!-- ===== CONTENT AREA ===== -->
    <div class="admin-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-content">
                <div>
                    <h1 class="page-title">Medicines Management</h1>
                    <p class="page-subtitle">Manage and organize all medicines in your directory</p>
                </div>
                <a href="{{ route("dashboard.medicines.create") }}" class="btn-primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                    Add New Medicine
                </a>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid stats-grid-4">
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
                </div>
                <div class="stat-card-body">
                    <div class="stat-card-value">10</div>
                    <div class="stat-card-label">Total Medicines</div>
                </div>
                <div class="stat-card-footer">
                    All medicines in database
                </div>
            </div>
            @php
                $percentage = ($published_medicines/$medicines->count()) * 100;

            @endphp
            <!-- Published -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon green">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
                            <path d="M22 4L12 14.01l-3-3" />
                        </svg>
                    </div>
                </div>
                <div class="stat-card-body">
                    <div class="stat-card-value">{{ $published_medicines }}</div>
                    <div class="stat-card-label">Published</div>
                </div>
                <div class="stat-card-footer">
                    {{ $percentage }}% of total
                </div>
            </div>

            <!-- Draft -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon orange">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                            <path d="M14 2v6h6" />
                        </svg>
                    </div>
                </div>
                <div class="stat-card-body">
                    <div class="stat-card-value">{{ $draft_medicines }}</div>
                    <div class="stat-card-label">Draft</div>
                </div>
                <div class="stat-card-footer">
                    Pending publication
                </div>
            </div>

            <!-- Categories -->
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-icon purple">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z" />
                            <path d="M2 17l10 5 10-5" />
                            <path d="M2 12l10 5 10-5" />
                        </svg>
                    </div>
                </div>
                <div class="stat-card-body">
                    <div class="stat-card-value">{{ $categories }}</div>
                    <div class="stat-card-label">Categories</div>
                </div>
                <div class="stat-card-footer">
                    Active categories
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class="table-card">
            <!-- Table Card Header -->
            <div class="table-card-header">
                <div class="table-card-title-section">
                    <h2 class="table-card-title">All Medicines</h2>
                    <span class="table-card-count">{{  $medicines->count() }} medicines</span>
                </div>
                <div class="table-card-actions">
                    <!-- Filter Dropdown -->
                    <div class="table-filter-dropdown">
                        <button class="filter-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z" />
                            </svg>
                            Filter
                        </button>
                    </div>

                    <!-- Sort Dropdown -->
                    <div class="table-filter-dropdown">
                        <button class="filter-btn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M3 6h18M7 12h10M11 18h2" />
                            </svg>
                            Sort
                        </button>
                    </div>

                    <!-- Search -->
                    <div class="table-search">
                        <svg class="table-search-icon" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8" />
                            <path d="M21 21l-4.35-4.35" />
                        </svg>
                        <input type="text" class="table-search-input" placeholder="Search medicines...">
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
                            <th class="data-table-th">Medicine</th>
                            <th class="data-table-th">Generic Name</th>
                            <th class="data-table-th">Category</th>
                            <th class="data-table-th">Status</th>
                            <th class="data-table-th">Side Effects</th>
                            <th class="data-table-th">Published Date</th>
                            <th class="data-table-th actions-col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="data-table-body">

                        @if ($medicines->isEmpty())
                            <tr>
                                <td colspan="8" class="no-data-cell">
                                    No medicines found. Please add new medicines to display them here.
                                </td>
                            </tr>
                        @else
                            @foreach ($medicines as $item)
                                <!-- Medicine Row 1 -->
                                <tr class="data-table-row">
                                    <td class="data-table-td checkbox-col">
                                        <input type="checkbox" class="table-checkbox">
                                    </td>
                                    <td class="data-table-td">
                                        <div class="medicine-info">
                                            <div class="medicine-icon">
                                                <svg width="20" height="20" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2">
                                                    <path
                                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                                </svg>
                                            </div>
                                            <div class="medicine-details">
                                                <div class="medicine-name">{{ $item->name }}</div>
                                                <div class="medicine-slug">{{ $item->slug }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="data-table-td">
                                        <span class="text-secondary">{{ $item->generic_name }}</span>
                                    </td>
                                    <td class="data-table-td">
                                        <span class="category-badge">{{ $item->category->name }}</span>
                                    </td>
                                    <td class="data-table-td">
                                        <span class="status-badge @if($item->status == 'draft') status-draft @else status-published @endif ">{{ $item->status }}</span>
                                    </td>
                                    <td class="data-table-td">
                                        <span class="side-effects-count">{{ $item->sideEffects->count() }} effects</span>
                                    </td>
                                    <td class="data-table-td">
                                        <span class="text-secondary">{{ $item->created_at->format("M d, Y") }}</span>
                                    </td>
                                    <td class="data-table-td actions-col">
                                        <div class="table-actions">
                                            <a href="{{ route('dashboard.medicines.show', $item->id) }}" class="action-btn action-btn-view" title="View">
                                                <svg width="16" height="16" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                                    <circle cx="12" cy="12" r="3" />
                                                </svg>
                                            </a>
                                            <button class="action-btn action-btn-edit" title="Edit">
                                                <svg width="16" height="16" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2">
                                                    <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7" />
                                                    <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                                                </svg>
                                            </button>
                                            <button class="action-btn action-btn-delete" title="Delete">
                                                <svg width="16" height="16" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2">
                                                    <path
                                                        d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        @endif

                        {{-- <!-- Medicine Row 2 -->
                        <tr class="data-table-row">
                            <td class="data-table-td checkbox-col">
                                <input type="checkbox" class="table-checkbox">
                            </td>
                            <td class="data-table-td">
                                <div class="medicine-info">
                                    <div class="medicine-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                        </svg>
                                    </div>
                                    <div class="medicine-details">
                                        <div class="medicine-name">Amoxicillin</div>
                                        <div class="medicine-slug">amoxicillin</div>
                                    </div>
                                </div>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Amoxicillin trihydrate</span>
                            </td>
                            <td class="data-table-td">
                                <span class="category-badge">Diseases</span>
                            </td>
                            <td class="data-table-td">
                                <span class="status-badge status-published">Published</span>
                            </td>
                            <td class="data-table-td">
                                <span class="side-effects-count">3 effects</span>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Dec 4, 2024</span>
                            </td>
                            <td class="data-table-td actions-col">
                                <div class="table-actions">
                                    <button class="action-btn action-btn-view" title="View">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                            <circle cx="12" cy="12" r="3"/>
                                        </svg>
                                    </button>
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

                        <!-- Medicine Row 3 -->
                        <tr class="data-table-row">
                            <td class="data-table-td checkbox-col">
                                <input type="checkbox" class="table-checkbox">
                            </td>
                            <td class="data-table-td">
                                <div class="medicine-info">
                                    <div class="medicine-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                        </svg>
                                    </div>
                                    <div class="medicine-details">
                                        <div class="medicine-name">Metformin</div>
                                        <div class="medicine-slug">metformin</div>
                                    </div>
                                </div>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Metformin hydrochloride</span>
                            </td>
                            <td class="data-table-td">
                                <span class="category-badge">Diseases</span>
                            </td>
                            <td class="data-table-td">
                                <span class="status-badge status-draft">Draft</span>
                            </td>
                            <td class="data-table-td">
                                <span class="side-effects-count">3 effects</span>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">—</span>
                            </td>
                            <td class="data-table-td actions-col">
                                <div class="table-actions">
                                    <button class="action-btn action-btn-view" title="View">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                            <circle cx="12" cy="12" r="3"/>
                                        </svg>
                                    </button>
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

                        <!-- Medicine Row 4 -->
                        <tr class="data-table-row">
                            <td class="data-table-td checkbox-col">
                                <input type="checkbox" class="table-checkbox">
                            </td>
                            <td class="data-table-td">
                                <div class="medicine-info">
                                    <div class="medicine-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                        </svg>
                                    </div>
                                    <div class="medicine-details">
                                        <div class="medicine-name">Lisinopril</div>
                                        <div class="medicine-slug">lisinopril</div>
                                    </div>
                                </div>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Lisinopril</span>
                            </td>
                            <td class="data-table-td">
                                <span class="category-badge">Men Health</span>
                            </td>
                            <td class="data-table-td">
                                <span class="status-badge status-published">Published</span>
                            </td>
                            <td class="data-table-td">
                                <span class="side-effects-count">3 effects</span>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Dec 3, 2024</span>
                            </td>
                            <td class="data-table-td actions-col">
                                <div class="table-actions">
                                    <button class="action-btn action-btn-view" title="View">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                            <circle cx="12" cy="12" r="3"/>
                                        </svg>
                                    </button>
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

                        <!-- Medicine Row 5 -->
                        <tr class="data-table-row">
                            <td class="data-table-td checkbox-col">
                                <input type="checkbox" class="table-checkbox">
                            </td>
                            <td class="data-table-td">
                                <div class="medicine-info">
                                    <div class="medicine-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                        </svg>
                                    </div>
                                    <div class="medicine-details">
                                        <div class="medicine-name">Sertraline</div>
                                        <div class="medicine-slug">sertraline</div>
                                    </div>
                                </div>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Sertraline hydrochloride</span>
                            </td>
                            <td class="data-table-td">
                                <span class="category-badge">Mental Health</span>
                            </td>
                            <td class="data-table-td">
                                <span class="status-badge status-published">Published</span>
                            </td>
                            <td class="data-table-td">
                                <span class="side-effects-count">4 effects</span>
                            </td>
                            <td class="data-table-td">
                                <span class="text-secondary">Dec 2, 2024</span>
                            </td>
                            <td class="data-table-td actions-col">
                                <div class="table-actions">
                                    <button class="action-btn action-btn-view" title="View">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                            <circle cx="12" cy="12" r="3"/>
                                        </svg>
                                    </button>
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
                        </tr> --}}
                    </tbody>
                </table>
            </div>

            <!-- Table Footer / Pagination -->
            <div class="table-footer">
                <div class="table-footer-info">
                    Showing <strong>1-5</strong> of <strong>10</strong> medicines
                </div>
                <div class="table-pagination">
                    <button class="pagination-btn" disabled>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M15 18l-6-6 6-6" />
                        </svg>
                    </button>
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn">2</button>
                    <button class="pagination-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M9 18l6-6-6-6" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* ===== PAGE HEADER ENHANCEMENTS ===== */
        .page-header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: var(--admin-accent);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 0.925rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            font-family: inherit;
        }

        .btn-primary:hover {
            background: var(--admin-accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 16px -8px rgba(59, 130, 246, 0.5);
        }

        /* ===== STATS GRID 4 COLUMNS ===== */
        .stats-grid-4 {
            grid-template-columns: repeat(4, 1fr);
        }

        /* ===== TABLE CARD ===== */
        .table-card {
            background: var(--admin-surface);
            border: 1px solid var(--admin-border);
            border-radius: 16px;
            overflow: hidden;
            margin-top: 2rem;
        }

        .table-card-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--admin-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
        }

        .table-card-title-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .table-card-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--admin-text-primary);
        }

        .table-card-count {
            padding: 0.25rem 0.75rem;
            background: var(--admin-background);
            color: var(--admin-text-muted);
            font-size: 0.8125rem;
            font-weight: 500;
            border-radius: 100px;
        }

        .table-card-actions {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .filter-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.625rem 1rem;
            background: var(--admin-background);
            border: 1px solid var(--admin-border);
            border-radius: 10px;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--admin-text-secondary);
            cursor: pointer;
            transition: all 0.2s;
            font-family: inherit;
        }

        .filter-btn:hover {
            border-color: var(--admin-accent);
            color: var(--admin-accent);
        }

        .table-search {
            position: relative;
        }

        .table-search-input {
            padding: 0.625rem 1rem 0.625rem 2.5rem;
            border: 1px solid var(--admin-border);
            border-radius: 10px;
            font-size: 0.875rem;
            font-family: inherit;
            width: 250px;
            transition: all 0.2s;
        }

        .table-search-input:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 3px var(--admin-accent-light);
        }

        .table-search-icon {
            position: absolute;
            left: 0.875rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--admin-text-muted);
        }

        /* ===== DATA TABLE ===== */
        .table-wrapper {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table-head {
            background: var(--admin-background);
        }

        .data-table-th {
            padding: 0.875rem 1.5rem;
            text-align: left;
            font-size: 0.8125rem;
            font-weight: 600;
            color: var(--admin-text-secondary);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid var(--admin-border);
        }

        .data-table-th.checkbox-col {
            width: 48px;
            padding-left: 1.5rem;
            padding-right: 0;
        }

        .data-table-th.actions-col {
            width: 140px;
            text-align: right;
        }

        .data-table-row {
            transition: background 0.2s;
        }

        .data-table-row:hover {
            background: var(--admin-background);
        }

        .data-table-td {
            padding: 1rem 1.5rem;
            font-size: 0.925rem;
            color: var(--admin-text-primary);
            border-bottom: 1px solid var(--admin-border);
        }

        .data-table-td.checkbox-col {
            padding-left: 1.5rem;
            padding-right: 0;
        }

        .data-table-td.actions-col {
            text-align: right;
        }

        .table-checkbox {
            width: 18px;
            height: 18px;
            border: 1.5px solid var(--admin-border);
            border-radius: 6px;
            cursor: pointer;
            accent-color: var(--admin-accent);
        }

        /* Medicine Info Cell */
        .medicine-info {
            display: flex;
            align-items: center;
            gap: 0.875rem;
        }

        .medicine-icon {
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

        .medicine-details {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .medicine-name {
            font-weight: 600;
            color: var(--admin-text-primary);
        }

        .medicine-slug {
            font-size: 0.8125rem;
            color: var(--admin-text-muted);
        }

        .text-secondary {
            color: var(--admin-text-secondary);
        }

        /* Category Badge */
        .category-badge {
            display: inline-flex;
            padding: 0.375rem 0.875rem;
            background: var(--admin-info-light);
            color: var(--admin-info);
            font-size: 0.8125rem;
            font-weight: 600;
            border-radius: 8px;
        }

        /* Status Badges */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            padding: 0.375rem 0.875rem;
            font-size: 0.8125rem;
            font-weight: 600;
            border-radius: 8px;
        }

        .status-badge::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }

        .status-badge.status-published {
            background: var(--admin-success-light);
            color: var(--admin-success);
        }

        .status-badge.status-published::before {
            background: var(--admin-success);
        }

        .status-badge.status-draft {
            background: var(--admin-warning-light);
            color: var(--admin-warning);
        }

        .status-badge.status-draft::before {
            background: var(--admin-warning);
        }

        /* Side Effects Count */
        .side-effects-count {
            color: var(--admin-text-secondary);
            font-size: 0.875rem;
        }

        /* Table Actions */
        .table-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 0.5rem;
        }

        .action-btn {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            border: none;
            background: var(--admin-background);
            color: var(--admin-text-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .action-btn:hover {
            transform: translateY(-2px);
        }

        .action-btn-view:hover {
            background: var(--admin-accent-light);
            color: var(--admin-accent);
        }

        .action-btn-edit:hover {
            background: var(--admin-success-light);
            color: var(--admin-success);
        }

        .action-btn-delete:hover {
            background: var(--admin-danger-light);
            color: var(--admin-danger);
        }

        /* ===== TABLE FOOTER / PAGINATION ===== */
        .table-footer {
            padding: 1.25rem 1.5rem;
            border-top: 1px solid var(--admin-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .table-footer-info {
            font-size: 0.875rem;
            color: var(--admin-text-secondary);
        }

        .table-footer-info strong {
            color: var(--admin-text-primary);
            font-weight: 600;
        }

        .table-pagination {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .pagination-btn {
            min-width: 36px;
            height: 36px;
            padding: 0 0.75rem;
            border-radius: 8px;
            border: 1px solid var(--admin-border);
            background: var(--admin-surface);
            color: var(--admin-text-secondary);
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: inherit;
        }

        .pagination-btn:hover:not(:disabled) {
            border-color: var(--admin-accent);
            color: var(--admin-accent);
        }

        .pagination-btn.active {
            background: var(--admin-accent);
            border-color: var(--admin-accent);
            color: white;
        }

        .pagination-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .stats-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .page-header-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .stats-grid-4 {
                grid-template-columns: 1fr;
            }

            .table-card-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .table-card-actions {
                width: 100%;
                flex-wrap: wrap;
            }

            .table-search-input {
                width: 100%;
            }

            .table-footer {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</x-layouts.dashboard-layout>
