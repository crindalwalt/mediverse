<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediverse - Medicine Directory</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #0f172a;
            --secondary: #64748b;
            --accent: #3b82f6;
            --accent-light: #dbeafe;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --background: #f8fafc;
            --surface: #ffffff;
            --border: #e2e8f0;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --text-muted: #94a3b8;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--background);
            color: var(--text-primary);
            line-height: 1.6;
            min-height: 100vh;
        }

        /* Header */
        .header {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(12px);
            background: rgba(255, 255, 255, 0.9);
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--accent), #1d4ed8);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-icon svg {
            width: 24px;
            height: 24px;
            color: white;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: -0.025em;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-secondary);
            font-weight: 500;
            font-size: 0.925rem;
            transition: color 0.2s;
            position: relative;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link.active {
            color: var(--accent);
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -1.25rem;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--accent);
            border-radius: 2px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #f0fdf4 100%);
            padding: 4rem 2rem;
            border-bottom: 1px solid var(--border);
        }

        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: -0.025em;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.25rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        /* Search Bar */
        .search-container {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1.5rem 1rem 3.5rem;
            font-size: 1rem;
            border: 2px solid var(--border);
            border-radius: 16px;
            background: var(--surface);
            transition: all 0.2s;
            outline: none;
            font-family: inherit;
        }

        .search-input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 4px var(--accent-light);
        }

        .search-icon {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
        }

        /* Main Content */
        .main {
            max-width: 1400px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        /* Filters */
        .filters {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .filter-label {
            font-size: 0.875rem;
            color: var(--text-secondary);
            font-weight: 500;
        }

        .filter-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .filter-tag {
            padding: 0.5rem 1rem;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 100px;
            font-size: 0.875rem;
            color: var(--text-secondary);
            cursor: pointer;
            transition: all 0.2s;
            font-family: inherit;
        }

        .filter-tag:hover {
            border-color: var(--accent);
            color: var(--accent);
        }

        .filter-tag.active {
            background: var(--accent);
            border-color: var(--accent);
            color: white;
        }

        /* Medicine Grid */
        .medicine-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
            gap: 1.5rem;
        }

        /* Medicine Card */
        .medicine-card {
            background: var(--surface);
            border-radius: 20px;
            border: 1px solid var(--border);
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }

        .medicine-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.1);
            border-color: transparent;
        }

        .card-header {
            padding: 1.75rem 1.75rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .card-category {
            display: inline-flex;
            align-items: center;
            padding: 0.375rem 0.875rem;
            background: var(--accent-light);
            color: var(--accent);
            font-size: 0.75rem;
            font-weight: 600;
            border-radius: 100px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .card-status {
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            padding: 0.375rem 0.75rem;
            background: #f0fdf4;
            color: var(--success);
            font-size: 0.75rem;
            font-weight: 500;
            border-radius: 100px;
        }

        .status-dot {
            width: 6px;
            height: 6px;
            background: currentColor;
            border-radius: 50%;
        }

        .card-body {
            padding: 0 1.75rem 1.5rem;
        }

        .medicine-name {
            font-size: 1.375rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 0.375rem;
            letter-spacing: -0.015em;
        }

        .generic-name {
            font-size: 0.875rem;
            color: var(--text-muted);
            margin-bottom: 1rem;
            font-style: italic;
        }

        .medicine-summary {
            font-size: 0.925rem;
            color: var(--text-secondary);
            line-height: 1.7;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-footer {
            padding: 1.25rem 1.75rem;
            background: var(--background);
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .side-effects-preview {
            display: flex;
            gap: 0.5rem;
        }

        .effect-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            padding: 0.25rem 0.625rem;
            font-size: 0.75rem;
            font-weight: 500;
            border-radius: 6px;
        }

        .effect-badge.mild {
            background: #fef3c7;
            color: #d97706;
        }

        .effect-badge.moderate {
            background: #ffedd5;
            color: #ea580c;
        }

        .effect-badge.severe {
            background: #fee2e2;
            color: #dc2626;
        }

        .effect-badge.positive {
            background: #dcfce7;
            color: #16a34a;
        }

        .view-details {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--accent);
            font-weight: 500;
            font-size: 0.875rem;
            text-decoration: none;
            transition: gap 0.2s;
        }

        .view-details:hover {
            gap: 0.75rem;
        }

        .view-details svg {
            width: 16px;
            height: 16px;
        }

        /* Stats Bar */
        .stats-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 3rem;
            padding: 2rem;
            background: var(--surface);
            border-radius: 16px;
            border: 1px solid var(--border);
            margin-bottom: 2rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: -0.025em;
        }

        .stat-label {
            font-size: 0.875rem;
            color: var(--text-muted);
            margin-top: 0.25rem;
        }

        .stat-divider {
            width: 1px;
            height: 48px;
            background: var(--border);
        }

        /* Footer */
        .footer {
            background: var(--surface);
            border-top: 1px solid var(--border);
            padding: 3rem 2rem;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-text {
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        .footer-links {
            display: flex;
            gap: 2rem;
        }

        .footer-link {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.875rem;
            transition: color 0.2s;
        }

        .footer-link:hover {
            color: var(--primary);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                padding: 1rem;
            }

            .nav {
                display: none;
            }

            .hero {
                padding: 2.5rem 1rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .main {
                padding: 2rem 1rem;
            }

            .medicine-grid {
                grid-template-columns: 1fr;
            }

            .stats-bar {
                flex-direction: column;
                gap: 1.5rem;
            }

            .stat-divider {
                width: 48px;
                height: 1px;
            }

            .footer-content {
                flex-direction: column;
                gap: 1.5rem;
                text-align: center;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .medicine-card {
            animation: fadeInUp 0.5s ease-out forwards;
            opacity: 0;
        }

        .medicine-card:nth-child(1) { animation-delay: 0.1s; }
        .medicine-card:nth-child(2) { animation-delay: 0.2s; }
        .medicine-card:nth-child(3) { animation-delay: 0.3s; }
        .medicine-card:nth-child(4) { animation-delay: 0.4s; }
        .medicine-card:nth-child(5) { animation-delay: 0.5s; }
        .medicine-card:nth-child(6) { animation-delay: 0.6s; }
    </style>
</head>
<body>
    <!-- Header -->
    <x-utils.header />

   {{ $slot }}

    <!-- Footer -->
    <x-utils.footer />

    <script>
        // Filter functionality
        const filterTags = document.querySelectorAll('.filter-tag');
        const medicineCards = document.querySelectorAll('.medicine-card');

        filterTags.forEach(tag => {
            tag.addEventListener('click', () => {
                // Update active state
                filterTags.forEach(t => t.classList.remove('active'));
                tag.classList.add('active');

                const category = tag.dataset.category;

                // Filter cards
                medicineCards.forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'block';
                        // Reset animation
                        card.style.animation = 'none';
                        card.offsetHeight; // Trigger reflow
                        card.style.animation = 'fadeInUp 0.5s ease-out forwards';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Search functionality
        const searchInput = document.getElementById('searchInput');

        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();

            medicineCards.forEach(card => {
                const name = card.querySelector('.medicine-name').textContent.toLowerCase();
                const genericName = card.querySelector('.generic-name').textContent.toLowerCase();
                const summary = card.querySelector('.medicine-summary').textContent.toLowerCase();
                const category = card.querySelector('.card-category').textContent.toLowerCase();

                if (name.includes(searchTerm) ||
                    genericName.includes(searchTerm) ||
                    summary.includes(searchTerm) ||
                    category.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });

            // Reset filter active state when searching
            if (searchTerm) {
                filterTags.forEach(t => t.classList.remove('active'));
            } else {
                filterTags[0].classList.add('active');
            }
        });

        // Card click animation
        medicineCards.forEach(card => {
            card.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });
    </script>
</body>
</html>
