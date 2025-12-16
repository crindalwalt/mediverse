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
                        <span class="breadcrumb-current">Create</span>
                    </div>
                    <h1 class="page-title">Create New Medicine</h1>
                    <p class="page-subtitle">Add a new medicine to your directory</p>
                </div>
            </div>
        </div>

        <!-- Form Card -->
        <div class="form-card">
            <form action="{{ route("dashboard.medicines.store") }}" method="POST">
                @csrf

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
                                value="{{ old('name') }}"
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
                                value="{{ old('generic_name') }}"
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
                                {{-- TODO: implement real categories --}}
                                <option value="">Select a category</option>
                                <option value="1">Medications</option>
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
                            >{{ old('summary') }}</textarea>
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
                            >{{ old('long_description') }}</textarea>
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
                                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
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
                                value="{{ old('published_at') }}"
                            >
                            @error('published_at')
                                <span class="form-error">{{ $message }}</span>
                            @enderror
                            <span class="form-help">Leave empty to publish immediately</span>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <a href="/admin/medicines" class="btn-secondary">
                        Cancel
                    </a>
                    <div class="form-actions-right">
                        <button type="submit" name="status" value="draft" class="btn-secondary">
                            Save as Draft
                        </button>
                        <button type="submit" name="status" value="published" class="btn-primary">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                                <path d="M22 4L12 14.01l-3-3"/>
                            </svg>
                            Publish Medicine
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
                flex-direction: column;
            }

            .btn-primary,
            .btn-secondary {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</x-layouts.dashboard-layout>
