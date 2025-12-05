<x-layouts.main>

    {{-- @dd($medicines) --}}
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Medicine Directory</h1>
            <p>Explore our comprehensive database of medicines, their uses, and potential side effects.</p>
            <div class="search-container">
                <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="M21 21l-4.35-4.35"></path>
                </svg>
                <input type="text" class="search-input"
                    placeholder="Search medicines by name, category, or condition..." id="searchInput">
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main">
        <!-- Stats Bar -->
        <div class="stats-bar">
            <div class="stat-item">
                <div class="stat-value">248</div>
                <div class="stat-label">Total Medicines</div>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <div class="stat-value">12</div>
                <div class="stat-label">Categories</div>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <div class="stat-value">1,024</div>
                <div class="stat-label">Side Effects Documented</div>
            </div>
            <div class="stat-divider"></div>
            <div class="stat-item">
                <div class="stat-value">15K+</div>
                <div class="stat-label">Monthly Users</div>
            </div>
        </div>

        <!-- Filters -->
        <div class="filters">
            <span class="filter-label">Filter by:</span>
            <div class="filter-tags">
                <button class="filter-tag active" data-category="all">All</button>
                <button class="filter-tag" data-category="analgesics">Analgesics</button>
                <button class="filter-tag" data-category="antibiotics">Antibiotics</button>
                <button class="filter-tag" data-category="antivirals">Antivirals</button>
                <button class="filter-tag" data-category="cardiovascular">Cardiovascular</button>
                <button class="filter-tag" data-category="vitamins">Vitamins</button>
                <button class="filter-tag" data-category="hormones">Hormones</button>
            </div>
        </div>

        <!-- Medicine Grid -->
        <div class="medicine-grid" id="medicineGrid">
            <!-- Medicine Card 1 -->

            @if ($medicines->isNotEmpty())

                @foreach ($medicines as $item)
                    <article class="medicine-card" data-category="analgesics">
                        <div class="card-header">
                            <span class="card-category">{{ $item->category->name }}</span>
                            <span class="card-status">
                                <span class="status-dot"></span>
                                Published
                            </span>
                        </div>
                        <div class="card-body">
                            <h2 class="medicine-name">{{ $item->name }} </h2>
                            <p class="generic-name">{{ $item->generic_name }}</p>
                            <p class="medicine-summary">
                                {{ $item->summary }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="side-effects-preview">
                                <span class="effect-badge mild">Mild: 3</span>
                                <span class="effect-badge moderate">Moderate: 2</span>
                            </div>
                            <a href="{{ route("medicines.show", $item->slug) }}" class="view-details">
                                View Details
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            @else
                <p>No medicines found.</p>
            @endif

            {{-- <!-- Medicine Card 2 -->
            <article class="medicine-card" data-category="antibiotics">
                <div class="card-header">
                    <span class="card-category">Antibiotics</span>
                    <span class="card-status">
                        <span class="status-dot"></span>
                        Published
                    </span>
                </div>
                <div class="card-body">
                    <h2 class="medicine-name">Amoxicillin</h2>
                    <p class="generic-name">Amoxicillin Trihydrate</p>
                    <p class="medicine-summary">A penicillin-type antibiotic used to treat a wide variety of bacterial
                        infections. Effective against respiratory tract infections, urinary tract infections, and skin
                        infections.</p>
                </div>
                <div class="card-footer">
                    <div class="side-effects-preview">
                        <span class="effect-badge mild">Mild: 4</span>
                        <span class="effect-badge severe">Severe: 1</span>
                    </div>
                    <a href="#" class="view-details">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Medicine Card 3 -->
            <article class="medicine-card" data-category="cardiovascular">
                <div class="card-header">
                    <span class="card-category">Cardiovascular</span>
                    <span class="card-status">
                        <span class="status-dot"></span>
                        Published
                    </span>
                </div>
                <div class="card-body">
                    <h2 class="medicine-name">Lisinopril</h2>
                    <p class="generic-name">Lisinopril Dihydrate</p>
                    <p class="medicine-summary">An ACE inhibitor used to treat high blood pressure and heart failure.
                        It helps prevent strokes, heart attacks, and kidney problems by relaxing blood vessels.</p>
                </div>
                <div class="card-footer">
                    <div class="side-effects-preview">
                        <span class="effect-badge mild">Mild: 5</span>
                        <span class="effect-badge moderate">Moderate: 3</span>
                    </div>
                    <a href="#" class="view-details">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Medicine Card 4 -->
            <article class="medicine-card" data-category="antivirals">
                <div class="card-header">
                    <span class="card-category">Antivirals</span>
                    <span class="card-status">
                        <span class="status-dot"></span>
                        Published
                    </span>
                </div>
                <div class="card-body">
                    <h2 class="medicine-name">Oseltamivir</h2>
                    <p class="generic-name">Oseltamivir Phosphate (Tamiflu)</p>
                    <p class="medicine-summary">An antiviral medication used to treat and prevent influenza A and B.
                        Most effective when started within 48 hours of flu symptoms appearing.</p>
                </div>
                <div class="card-footer">
                    <div class="side-effects-preview">
                        <span class="effect-badge mild">Mild: 2</span>
                        <span class="effect-badge positive">Positive: 1</span>
                    </div>
                    <a href="#" class="view-details">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Medicine Card 5 -->
            <article class="medicine-card" data-category="vitamins">
                <div class="card-header">
                    <span class="card-category">Vitamins</span>
                    <span class="card-status">
                        <span class="status-dot"></span>
                        Published
                    </span>
                </div>
                <div class="card-body">
                    <h2 class="medicine-name">Vitamin D3</h2>
                    <p class="generic-name">Cholecalciferol</p>
                    <p class="medicine-summary">Essential vitamin for bone health, immune function, and calcium
                        absorption. Commonly used to treat and prevent vitamin D deficiency and related conditions.</p>
                </div>
                <div class="card-footer">
                    <div class="side-effects-preview">
                        <span class="effect-badge positive">Positive: 4</span>
                        <span class="effect-badge mild">Mild: 1</span>
                    </div>
                    <a href="#" class="view-details">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Medicine Card 6 -->
            <article class="medicine-card" data-category="hormones">
                <div class="card-header">
                    <span class="card-category">Hormones</span>
                    <span class="card-status">
                        <span class="status-dot"></span>
                        Published
                    </span>
                </div>
                <div class="card-body">
                    <h2 class="medicine-name">Levothyroxine</h2>
                    <p class="generic-name">Levothyroxine Sodium</p>
                    <p class="medicine-summary">A synthetic thyroid hormone used to treat hypothyroidism. It replaces
                        the hormone normally produced by the thyroid gland to regulate the body's energy and metabolism.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="side-effects-preview">
                        <span class="effect-badge mild">Mild: 3</span>
                        <span class="effect-badge moderate">Moderate: 2</span>
                    </div>
                    <a href="#" class="view-details">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Medicine Card 7 -->
            <article class="medicine-card" data-category="analgesics">
                <div class="card-header">
                    <span class="card-category">Analgesics</span>
                    <span class="card-status">
                        <span class="status-dot"></span>
                        Published
                    </span>
                </div>
                <div class="card-body">
                    <h2 class="medicine-name">Acetaminophen</h2>
                    <p class="generic-name">Paracetamol</p>
                    <p class="medicine-summary">A pain reliever and fever reducer. It's used to treat mild to moderate
                        pain from headaches, muscle aches, toothaches, colds, and fevers.</p>
                </div>
                <div class="card-footer">
                    <div class="side-effects-preview">
                        <span class="effect-badge mild">Mild: 2</span>
                        <span class="effect-badge severe">Severe: 1</span>
                    </div>
                    <a href="#" class="view-details">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Medicine Card 8 -->
            <article class="medicine-card" data-category="antibiotics">
                <div class="card-header">
                    <span class="card-category">Antibiotics</span>
                    <span class="card-status">
                        <span class="status-dot"></span>
                        Published
                    </span>
                </div>
                <div class="card-body">
                    <h2 class="medicine-name">Azithromycin</h2>
                    <p class="generic-name">Azithromycin Dihydrate</p>
                    <p class="medicine-summary">A macrolide antibiotic that fights bacteria in the body. Used to treat
                        many types of infections, including respiratory, skin, ear, and sexually transmitted infections.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="side-effects-preview">
                        <span class="effect-badge mild">Mild: 4</span>
                        <span class="effect-badge moderate">Moderate: 1</span>
                    </div>
                    <a href="#" class="view-details">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Medicine Card 9 -->
            <article class="medicine-card" data-category="cardiovascular">
                <div class="card-header">
                    <span class="card-category">Cardiovascular</span>
                    <span class="card-status">
                        <span class="status-dot"></span>
                        Published
                    </span>
                </div>
                <div class="card-body">
                    <h2 class="medicine-name">Atorvastatin</h2>
                    <p class="generic-name">Atorvastatin Calcium</p>
                    <p class="medicine-summary">A statin medication used to lower cholesterol and triglycerides. It
                        helps reduce the risk of heart attack and stroke by preventing the buildup of plaque in
                        arteries.</p>
                </div>
                <div class="card-footer">
                    <div class="side-effects-preview">
                        <span class="effect-badge mild">Mild: 3</span>
                        <span class="effect-badge moderate">Moderate: 2</span>
                    </div>
                    <a href="#" class="view-details">
                        View Details
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article> --}}
        </div>
    </main>


</x-layouts.main>
