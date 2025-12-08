<x-auth-layout>
    <div class="auth-header">
        <h2>Verify Email</h2>
        <p>Please verify your email address to continue</p>
    </div>

    <div style="padding: 1rem; background: var(--accent-light); color: var(--text-secondary); border-radius: 12px; font-size: 0.925rem; line-height: 1.6; margin-bottom: 1.5rem;">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div style="padding: 0.875rem 1rem; background: #dcfce7; color: #166534; border-radius: 12px; font-size: 0.875rem; margin-bottom: 1.5rem;">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}" class="auth-form">
        @csrf

        <button type="submit" class="btn-primary">
            Resend Verification Email
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>
            </svg>
        </button>
    </form>

    <!-- Footer -->
    <div class="auth-footer">
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" style="background: none; border: none; color: var(--accent); font-weight: 500; cursor: pointer; text-decoration: none; font-size: 0.875rem;">
                Log Out
            </button>
        </form>
    </div>
</x-auth-layout>
