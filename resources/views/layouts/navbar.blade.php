 <div class="top-navbar">

            <div>
                <h3>Dashboard</h3>
            </div>

<div class="ms-auto">
    <div class="dropdown">
        <button class="btn btn-light dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown">
            <i class="bi bi-translate"></i> 
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ route('language.switch', 'en') }}">English</a></li>
            <li><a class="dropdown-item" href="{{ route('language.switch', 'fa') }}">Dari</a></li>
            <li><a class="dropdown-item" href="{{ route('language.switch', 'ps') }}">Pashto</a></li>
        </ul>
    </div>
</div>

            <div class="user-area">
                <i class="bi bi-bell"></i>
                <img src="https://i.pravatar.cc/40" alt="">
            </div>
        </div>