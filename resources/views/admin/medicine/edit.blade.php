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
                        <span class="breadcrumb-current">Edit Medicine</span>
                    </div>
                    <h1 class="page-title">Edit Medicine</h1>
                    <p class="page-subtitle">Update medicine information and details</p>
                </div>
            </div>
        </div>

        <!-- Form Card -->
        <div class="form-card">
            <form action="/admin/medicines/1" method="POST">
                @csrf
                @method('PUT')

                <!-- Basic Information Section -->
                <div class="form-section">
                    <div class="form-section-header">
                        <h3 class="form-section-title">Basic Information</h3>
                        <p class="form-section-subtitle">Essential details about the medicine</p>
                    </div>

                    <div class="form-grid">
                        <!-- Medicine Name -->
                        <div class="form-group full-width">
                            <label for="name" class="form-label">
                                Medicine Name
                                <span class="required">*</span>
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-input"
                                placeholder="e.g., Ibuprofen"
                                value="Ibuprofen"
                                required
                            >
                            @error('name')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Generic Name -->
                        <div class="form-group">
                            <label for="generic_name" class="form-label">
                                Generic Name
                            </label>
                            <input
                                type="text"
                                id="generic_name"
                                name="generic_name"
                                class="form-input"
                                placeholder="e.g., Ibuprofen"
                                value="Ibuprofen"
                            >
                            @error('generic_name')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="form-group">
                            <label for="category_id" class="form-label">
                                Category
                                <span class="required">*</span>
                            </label>
                            <select id="category_id" name="category_id" class="form-select" required>
                                <option value="">Select a category</option>
                                <option value="1" selected>Medications</option>
                                <option value="2">Diseases</option>
                                <option value="3">Women Health</option>
                                <option value="4">Men Health</option>
                                <option value="5">Children</option>
                                <option value="6">Mental Health</option>
                                <option value="7">Alternative Medicine</option>
                                <option value="8">Vitamins</option>
                                <option value="9">First Aid</option>
                            </select>
                            @error('category_id')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Slug -->
                        <div class="form-group full-width">
                            <label for="slug" class="form-label">
                                Slug
                            </label>
                            <input
                                type="text"
                                id="slug"
                                name="slug"
                                class="form-input"
                                placeholder="e.g., ibuprofen"
                                value="ibuprofen"
                                readonly
                            >
                            <span class="form-help">Auto-generated from medicine name</span>
                        </div>

                        <!-- Summary -->
                        <div class="form-group full-width">
                            <label for="summary" class="form-label">
                                Summary
                            </label>
                            <textarea
                                id="summary"
                                name="summary"
                                class="form-textarea"
                                rows="3"
                                placeholder="Brief description of the medicine..."
                            >A widely-used nonsteroidal anti-inflammatory drug (NSAID) that provides effective relief from pain, fever, and inflammation. Available over-the-counter in various strengths and formulations.</textarea>
                            @error('summary')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                            <span class="form-help">A short overview that will appear in listings</span>
                        </div>

                        <!-- Long Description -->
                        <div class="form-group full-width">
                            <label for="long_description" class="form-label">
                                Detailed Description
                            </label>
                            <textarea
                                id="long_description"
                                name="long_description"
                                class="form-textarea"
                                rows="8"
                                placeholder="Detailed information about the medicine, usage, precautions..."
                            >Ibuprofen works by reducing hormones that cause inflammation and pain in the body. It's commonly used to reduce fever and treat pain or inflammation caused by many conditions such as headache, toothache, back pain, arthritis, menstrual cramps, or minor injury.

This medication is available in tablets, capsules, and liquid suspension forms. For adults, the typical dosage is 200-400mg every 4-6 hours as needed. Always take with food or milk to reduce stomach upset.

Important: Do not exceed 1200mg in 24 hours without medical supervision. Long-term use may increase the risk of heart attack or stroke.</textarea>
                            @error('long_description')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                            <span class="form-help">Comprehensive information for the medicine detail page</span>
                        </div>
                    </div>
                </div>

                <!-- Publishing Options Section -->
                <div class="form-section">
                    <div class="form-section-header">
                        <h3 class="form-section-title">Publishing Options</h3>
                        <p class="form-section-subtitle">Control when and how this medicine is published</p>
                    </div>

                    <div class="form-grid">
                        <!-- Status -->
                        <div class="form-group">
                            <label for="status" class="form-label">
                                Status
                                <span class="required">*</span>
                            </label>
                            <select id="status" name="status" class="form-select" required>
                                <option value="draft">Draft</option>
                                <option value="published" selected>Published</option>
                            </select>
                            @error('status')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Published Date -->
                        <div class="form-group">
                            <label for="published_at" class="form-label">
                                Published Date
                            </label>
                            <input
                                type="datetime-local"
                                id="published_at"
                                name="published_at"
                                class="form-input"
                                value="2024-12-05T10:30"
                            >
                            @error('published_at')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                            <span class="form-help">Leave empty to publish immediately</span>
                        </div>
                    </div>
                </div>

                <!-- Side Effects Section -->
                <div class="form-section">
                    <div class="form-section-header">
                        <div>
                            <h3 class="form-section-title">Side Effects</h3>
                            <p class="form-section-subtitle">Manage side effects associated with this medicine</p>
                        </div>
                        <button type="button" class="btn-secondary btn-sm" onclick="alert('Add side effect functionality')">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 5v14M5 12h14"/>
                            </svg>
                            Add Side Effect
                        </button>
                    </div>

                    <div class="side-effects-grid">
                        <!-- Side Effect 1 -->
                        <div class="side-effect-card positive">
                            <div class="side-effect-card-header">
                                <div class="side-effect-type">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                                        <path d="M22 4L12 14.01l-3-3"/>
                                    </svg>
                                    <span>Positive Effect</span>
                                </div>
                                <button type="button" class="btn-icon-sm" onclick="alert('Delete side effect')">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M18 6L6 18M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="side-effect-card-body">
                                <h4 class="side-effect-card-title">Effective Pain Relief</h4>
                                <p class="side-effect-card-desc">Provides fast and effective relief from various types of pain including headaches, muscle aches, and inflammation.</p>
                            </div>
                        </div>

                        <!-- Side Effect 2 -->
                        <div class="side-effect-card negative">
                            <div class="side-effect-card-header">
                                <div class="side-effect-type">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 8v4M12 16h.01"/>
                                    </svg>
                                    <span>Negative • Mild</span>
                                </div>
                                <button type="button" class="btn-icon-sm" onclick="alert('Delete side effect')">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M18 6L6 18M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="side-effect-card-body">
                                <h4 class="side-effect-card-title">Stomach Upset</h4>
                                <p class="side-effect-card-desc">May cause mild stomach discomfort, nausea, or heartburn. Can be minimized by taking with food.</p>
                            </div>
                        </div>

                        <!-- Side Effect 3 -->
                        <div class="side-effect-card negative">
                            <div class="side-effect-card-header">
                                <div class="side-effect-type">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
                                        <path d="M12 9v4M12 17h.01"/>
                                    </svg>
                                    <span>Negative • Moderate</span>
                                </div>
                                <button type="button" class="btn-icon-sm" onclick="alert('Delete side effect')">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M18 6L6 18M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="side-effect-card-body">
                                <h4 class="side-effect-card-title">Cardiovascular Risk</h4>
                                <p class="side-effect-card-desc">Long-term use may increase risk of heart attack or stroke, especially in people with existing heart conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <a href="/admin/medicines" class="btn-secondary">
                        Cancel
                    </a>
                    <div class="form-actions-right">
                        <button type="button" class="btn-danger-outline">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"/>
                            </svg>
                            Delete
                        </button>
                        <button type="submit" class="btn-primary">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                                <path d="M22 4L12 14.01l-3-3"/>
                            </svg>
                            Update Medicine
                        </button>
                    </div>
                </div>
            </form>
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

        /* Form Card */
        .form-card {
            background: var(--admin-surface);
            border: 1px solid var(--admin-border);
            border-radius: 16px;
            overflow: hidden;
        }

        /* Form Section */
        .form-section {
            padding: 2rem;
            border-bottom: 1px solid var(--admin-border);
        }

        .form-section:last-of-type {
            border-bottom: none;
        }

        .form-section-header {
            margin-bottom: 2rem;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 2rem;
        }

        .form-section-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--admin-text-primary);
            margin-bottom: 0.5rem;
        }

        .form-section-subtitle {
            font-size: 0.875rem;
            color: var(--admin-text-secondary);
        }

        /* Form Grid */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        /* Form Group */
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--admin-text-primary);
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .required {
            color: var(--admin-danger);
        }

        .form-input,
        .form-select,
        .form-textarea {
            padding: 0.75rem 1rem;
            border: 1px solid var(--admin-border);
            border-radius: 10px;
            font-size: 0.925rem;
            font-family: inherit;
            color: var(--admin-text-primary);
            background: var(--admin-background);
            transition: all 0.2s;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 3px var(--admin-accent-light);
        }

        .form-input[readonly] {
            background: var(--admin-background);
            color: var(--admin-text-muted);
            cursor: not-allowed;
        }

        .form-textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-help {
            font-size: 0.8125rem;
            color: var(--admin-text-muted);
        }

        .form-error {
            font-size: 0.8125rem;
            color: var(--admin-danger);
        }

        /* Side Effects Grid */
        .side-effects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.25rem;
        }

        .side-effect-card {
            border-radius: 12px;
            border: 2px solid;
            overflow: hidden;
        }

        .side-effect-card.positive {
            border-color: var(--admin-success);
            background: var(--admin-success-light);
        }

        .side-effect-card.negative {
            border-color: var(--admin-danger);
            background: var(--admin-danger-light);
        }

        .side-effect-card-header {
            padding: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid;
        }

        .side-effect-card.positive .side-effect-card-header {
            background: var(--admin-success-light);
            border-color: var(--admin-success);
        }

        .side-effect-card.negative .side-effect-card-header {
            background: var(--admin-danger-light);
            border-color: var(--admin-danger);
        }

        .side-effect-type {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.8125rem;
            font-weight: 600;
        }

        .side-effect-card.positive .side-effect-type {
            color: var(--admin-success);
        }

        .side-effect-card.negative .side-effect-type {
            color: var(--admin-danger);
        }

        .side-effect-card-body {
            padding: 1rem;
            background: white;
        }

        .side-effect-card-title {
            font-size: 0.925rem;
            font-weight: 600;
            color: var(--admin-text-primary);
            margin-bottom: 0.5rem;
        }

        .side-effect-card-desc {
            font-size: 0.8125rem;
            line-height: 1.6;
            color: var(--admin-text-secondary);
        }

        .btn-icon-sm {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            border: none;
            background: white;
            color: var(--admin-text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-icon-sm:hover {
            color: var(--admin-danger);
            background: var(--admin-danger-light);
        }

        /* Form Actions */
        .form-actions {
            padding: 1.5rem 2rem;
            background: var(--admin-background);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .form-actions-right {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .btn-primary,
        .btn-secondary,
        .btn-danger-outline {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-size: 0.925rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            font-family: inherit;
        }

        .btn-primary {
            background: var(--admin-accent);
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background: var(--admin-accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 16px -8px rgba(59, 130, 246, 0.5);
        }

        .btn-secondary {
            background: var(--admin-surface);
            color: var(--admin-text-secondary);
            border: 1px solid var(--admin-border);
        }

        .btn-secondary:hover {
            border-color: var(--admin-accent);
            color: var(--admin-accent);
        }

        .btn-secondary.btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }

        .btn-danger-outline {
            background: transparent;
            color: var(--admin-danger);
            border: 1px solid var(--admin-danger);
        }

        .btn-danger-outline:hover {
            background: var(--admin-danger);
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .side-effects-grid {
                grid-template-columns: 1fr;
            }

            .form-section {
                padding: 1.5rem;
            }

            .form-section-header {
                flex-direction: column;
            }

            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .form-actions-right {
                width: 100%;
                flex-direction: column;
            }

            .btn-primary,
            .btn-secondary,
            .btn-danger-outline {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</x-layouts.dashboard-layout>
