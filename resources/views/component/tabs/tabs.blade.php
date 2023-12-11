<div class="tabs">
    <a href="{{ route('login.show') }}" class="{{ request()->is('login') ? 'active' : '' }}">Login</a>
    <a href="{{ route('register.show') }}" class="{{ request()->is('register') ? 'active' : '' }}">Register</a>
</div>
