<x-layouts.dashboard-layout>
    <div class="admin-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-content">
                <div>
                    <div class="breadcrumb">
                        <a href="/admin/dashboard" class="breadcrumb-link">Dashboard</a>
                        <span class="breadcrumb-separator">/</span>
                        <a href="/admin/categories" class="breadcrumb-link">Categories</a>
                        <span class="breadcrumb-separator">/</span>
                        <span class="breadcrumb-current">Create</span>
                    </div>
                    <h1 class="page-title">Create New Category</h1>
                    <p class="page-subtitle">Add a new category to organize medicines</p>
                </div>
            </div>
        </div>

        <!-- Form Card -->
        <div class="form-card">
            <form action="/admin/categories" method="POST">
                @csrf
                
                <!-- Basic Information Section -->
                <div class="form-section">
                    <div class="form-section-header">
                        <h3 class="form-section-title">Category Information</h3>
                        <p class="form-section-subtitle">Basic details about the category</p>
                    </div>
                    
                    <div class="form-grid">
                        <!-- Category Name -->
                        <div class="form-group full-width">
                            <label for="name" class="form-label">
                                Category Name
                                <span class="required">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                class="form-input"
                                placeholder="e.g., Medications"
                                value="{{ old('name') }}"
                                required
                            >
                            @error('name')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                            <span class="form-help">A clear, descriptive name for the category</span>
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
                                placeholder="e.g., medications"
                                value="{{ old('slug') }}"
                                readonly
                            >
                            @error('slug')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                            <span class="form-help">Auto-generated from category name (URL-friendly version)</span>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <a href="/admin/categories" class="btn-secondary">
                        Cancel
                    </a>
                    <div class="form-actions-right">
                        <button type="submit" class="btn-primary">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                                <path d="M22 4L12 14.01l-3-3"/>
                            </svg>
                            Create Category
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

        .form-input {
            padding: 0.75rem 1rem;
            border: 1px solid var(--admin-border);
            border-radius: 10px;
            font-size: 0.925rem;
            font-family: inherit;
            color: var(--admin-text-primary);
            background: var(--admin-background);
            transition: all 0.2s;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 3px var(--admin-accent-light);
        }

        .form-input[readonly] {
            background: var(--admin-background);
            color: var(--admin-text-muted);
            cursor: not-allowed;
        }

        .form-help {
            font-size: 0.8125rem;
            color: var(--admin-text-muted);
        }

        .form-error {
            font-size: 0.8125rem;
            color: var(--admin-danger);
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
        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border: none;
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

        /* Responsive */
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-section {
                padding: 1.5rem;
            }

            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .form-actions-right {
                width: 100%;
            }

            .btn-primary,
            .btn-secondary {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

    <script>
        // Auto-generate slug from name
        document.getElementById('name').addEventListener('input', function(e) {
            const slug = e.target.value
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
            document.getElementById('slug').value = slug;
        });
    </script>
</x-layouts.dashboard-layout>