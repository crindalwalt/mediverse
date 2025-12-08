<x-auth-layout>
    <div class="auth-header">
        <h2>Forgot Password?</h2>
        <p>No worries! Enter your email and we'll send you a reset link</p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div style="padding: 0.875rem 1rem; background: #dcfce7; color: #166534; border-radius: 12px; font-size: 0.875rem; margin-bottom: 1.5rem;">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="auth-form">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input
                id="email"
                class="form-input @error('email') error @enderror"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                placeholder="you@example.com"
            />
            @error('email')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn-primary">
            Send Reset Link
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>
            </svg>
        </button>
    </form>

    <!-- Footer -->
    <div class="auth-footer">
        Remember your password? <a href="{{ route('login') }}">Sign in</a>
    </div>
</x-auth-layout>
