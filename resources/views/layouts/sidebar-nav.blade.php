<nav x-data="{ open: false }">
   <aside class = "sidebar">
    <div class="sidebar-header">
        <div class="row">
            <div class="column">
                <img src="{{ asset('assets/images/nocs-logo.png') }}" alt="logo" class="logo-icon">
            </div>
            <div class="column logotext">
                <img src="{{ asset('assets/images/logo-text.png') }}" alt="logo" class="logo-text">
            </div>
        </div>
       
        
    </div>
    <ul class = "sidebar-links">
        <li>
            <a href="{{ route('dashboard') }}"
                class="{{ Route::is('dashboard') ? 'active' : '' }}">
            <span class="material-symbols-outlined">
                dashboard
            </span>Dashboard</a>
        </li>
        <li>
            <a href="{{ route('history') }}"
                class="{{ Route::is('history') ? 'active' : '' }}">
            <span class="material-symbols-outlined">
                history
            </span>History</a>
        </li>
        <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="route('logout')"
                onclick="event.preventDefault();
                    this.closest('form').submit();">
              

            <span class="material-symbols-outlined">
                logout
            </span>  {{ __('Log Out') }}</a>
                    
                </form>

          
        </li>
    </ul>
    <div class="user-account">
        <div class="user-profile">
            <img src="{{ asset('assets/images/user-pic.png') }}" alt="profile-img">
            <div class="user-detail">
                <h3>
                    {{ Auth::user()->name }}
                </h3>
                <span>
                {{ Auth::user()->email }}
                </span>
            </div>
        </div>
    </div>
</nav>

