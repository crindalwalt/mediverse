<x-layouts.main>
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="contact-hero-content">
            <span class="section-tag">Contact Us</span>
            <h1>Get in Touch</h1>
            <p>Have questions or feedback? We'd love to hear from you. Our team is here to help.</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="contact-section">
        <div class="contact-container">
            <!-- Contact Form -->
            <div class="contact-form-wrapper">
                <div class="form-header">
                    <h2>Send us a Message</h2>
                    <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                </div>
                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" name="firstName" placeholder="John" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="feedback">Feedback</option>
                            <option value="medicine-info">Medicine Information</option>
                            <option value="technical">Technical Support</option>
                            <option value="partnership">Partnership</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="How can we help you?" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">
                        Send Message
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info-wrapper">
                <div class="contact-info-card">
                    <h3>Contact Information</h3>
                    <p>Reach out to us through any of these channels.</p>

                    <div class="contact-info-items">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </div>
                            <div class="contact-info-content">
                                <span class="contact-info-label">Email</span>
                                <a href="mailto:contact@mediverse.com">contact@mediverse.com</a>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                                </svg>
                            </div>
                            <div class="contact-info-content">
                                <span class="contact-info-label">Phone</span>
                                <a href="tel:+1234567890">+1 (234) 567-890</a>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div class="contact-info-content">
                                <span class="contact-info-label">Address</span>
                                <span>123 Health Street, Medical District<br>New York, NY 10001</span>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                            </div>
                            <div class="contact-info-content">
                                <span class="contact-info-label">Business Hours</span>
                                <span>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat - Sun: Closed</span>
                            </div>
                        </div>
                    </div>

                    <div class="contact-social">
                        <h4>Follow Us</h4>
                        <div class="social-links">
                            <a href="#" class="social-link-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-link-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                                </svg>
                            </a>
                            <a href="#" class="social-link-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zM17.5 6.5h.01"/>
                                </svg>
                            </a>
                            <a href="#" class="social-link-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                                    <circle cx="4" cy="4" r="2"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="section-header">
            <span class="section-tag">FAQ</span>
            <h2>Frequently Asked Questions</h2>
            <p>Find answers to common questions about Mediverse.</p>
        </div>
        <div class="faq-grid">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How accurate is the medicine information?</h3>
                    <div class="faq-toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>All medicine information on Mediverse is verified by healthcare professionals and sourced from reliable medical databases. We regularly update our content to ensure accuracy.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Is Mediverse free to use?</h3>
                    <div class="faq-toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Yes, Mediverse is completely free to use. We believe everyone should have access to reliable medicine information.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can I suggest a medicine to be added?</h3>
                    <div class="faq-toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Absolutely! We welcome suggestions for new medicines to add to our database. Use the contact form above with the subject "Medicine Information" to submit your request.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Should I use Mediverse instead of consulting a doctor?</h3>
                    <div class="faq-toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>No. Mediverse is intended for informational purposes only and should not replace professional medical advice. Always consult with a healthcare provider for medical decisions.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How often is the database updated?</h3>
                    <div class="faq-toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Our database is updated weekly with new medicines and information. Our medical team reviews and updates existing entries monthly to ensure accuracy.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How can I report an error?</h3>
                    <div class="faq-toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>If you notice any errors in our medicine information, please contact us immediately using the form above. Select "Feedback" as the subject and provide details about the error.</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Contact Hero */
        .contact-hero {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #f0fdf4 100%);
            padding: 5rem 2rem;
            text-align: center;
        }

        .contact-hero-content {
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-hero h1 {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: -0.025em;
            margin-bottom: 1rem;
        }

        .contact-hero p {
            font-size: 1.25rem;
            color: var(--text-secondary);
        }

        .section-tag {
            display: inline-block;
            padding: 0.375rem 1rem;
            background: var(--accent-light);
            color: var(--accent);
            font-size: 0.875rem;
            font-weight: 600;
            border-radius: 100px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1rem;
        }

        /* Contact Section */
        .contact-section {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 3rem;
        }

        /* Contact Form */
        .contact-form-wrapper {
            background: var(--surface);
            padding: 3rem;
            border-radius: 24px;
            border: 1px solid var(--border);
        }

        .form-header {
            margin-bottom: 2rem;
        }

        .form-header h2 {
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: var(--text-secondary);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group label {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-primary);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 0.875rem 1rem;
            font-size: 1rem;
            border: 2px solid var(--border);
            border-radius: 12px;
            background: var(--background);
            transition: all 0.2s;
            outline: none;
            font-family: inherit;
            color: var(--text-primary);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 4px var(--accent-light);
            background: var(--surface);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: var(--text-muted);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.875rem 1.5rem;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 12px;
            text-decoration: none;
            transition: all 0.2s;
            cursor: pointer;
            border: none;
            font-family: inherit;
        }

        .btn-primary {
            background: var(--accent);
            color: white;
        }

        .btn-primary:hover {
            background: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -10px rgba(59, 130, 246, 0.5);
        }

        .btn-full {
            width: 100%;
        }

        /* Contact Info */
        .contact-info-card {
            background: linear-gradient(135deg, var(--primary), #1e3a5f);
            padding: 2.5rem;
            border-radius: 24px;
            color: white;
            height: 100%;
        }

        .contact-info-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .contact-info-card > p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2rem;
        }

        .contact-info-items {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .contact-info-icon {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-info-content {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .contact-info-label {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .contact-info-content a,
        .contact-info-content span {
            color: white;
            text-decoration: none;
            font-size: 0.925rem;
            line-height: 1.5;
        }

        .contact-info-content a:hover {
            text-decoration: underline;
        }

        .contact-social {
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .contact-social h4 {
            font-size: 0.875rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 1rem;
        }

        .social-links {
            display: flex;
            gap: 0.75rem;
        }

        .social-link-btn {
            width: 44px;
            height: 44px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .social-link-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* FAQ Section */
        .faq-section {
            padding: 5rem 2rem;
            background: var(--background);
        }

        .section-header {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 3rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: -0.025em;
            margin-bottom: 1rem;
        }

        .section-header p {
            font-size: 1.125rem;
            color: var(--text-secondary);
        }

        .faq-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .faq-item {
            background: var(--surface);
            border-radius: 16px;
            border: 1px solid var(--border);
            overflow: hidden;
            transition: all 0.2s;
        }

        .faq-item:hover {
            border-color: var(--accent);
        }

        .faq-question {
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            gap: 1rem;
        }

        .faq-question h3 {
            font-size: 1rem;
            font-weight: 500;
            color: var(--primary);
            margin: 0;
        }

        .faq-toggle {
            width: 32px;
            height: 32px;
            background: var(--background);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-secondary);
            flex-shrink: 0;
            transition: all 0.2s;
        }

        .faq-item.active .faq-toggle {
            background: var(--accent);
            color: white;
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 1.5rem 1.5rem;
            display: none;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-answer p {
            font-size: 0.925rem;
            color: var(--text-secondary);
            line-height: 1.7;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .contact-container {
                grid-template-columns: 1fr;
            }

            .faq-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .contact-hero h1 {
                font-size: 2.25rem;
            }

            .contact-form-wrapper {
                padding: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .section-header h2 {
                font-size: 2rem;
            }
        }
    </style>

    <script>
        // FAQ Toggle
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });

        // Form Submit
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            contactForm.reset();
        });
    </script>
</x-layouts.main>
