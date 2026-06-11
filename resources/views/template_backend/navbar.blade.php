<!-- Custom Style Navbar Emerald Theme -->
<style>
    /* Custom Navbar Modern Theme */
    .main-header.navbar {
        background-color: #ffffff !important;
        border-bottom: none !important;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03) !important;
        transition: all 0.3s ease;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    
    /* Toggle Icon (Hamburger) */
    .main-header .nav-link[data-widget="pushmenu"] {
        color: #059669 !important; /* Emerald Green */
        font-size: 1.1rem;
        transition: transform 0.2s ease, background-color 0.2s ease;
        border-radius: 8px;
        margin-left: 10px;
    }
    .main-header .nav-link[data-widget="pushmenu"]:hover {
        background-color: rgba(5, 150, 105, 0.1) !important;
        transform: scale(1.05);
    }

    /* User Profile Menu Button */
    #btnGroupDrop1 {
        color: #374151 !important; /* Dark Gray for text */
        font-weight: 600;
        padding: 8px 16px;
        border-radius: 20px;
        transition: all 0.2s ease;
        background-color: #F9FAFB;
        border: 1px solid #E5E7EB;
        margin-right: 20px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    #btnGroupDrop1:hover, #btnGroupDrop1[aria-expanded="true"] {
        background-color: rgba(5, 150, 105, 0.05);
        color: #059669 !important;
        border-color: #059669;
        box-shadow: 0 2px 4px rgba(5, 150, 105, 0.1);
    }
    #btnGroupDrop1 i {
        color: #059669; /* Emerald Green Icon */
        font-size: 1.2rem;
    }

    /* Dropdown Menu Modernization */
    .navbar .dropdown-menu {
        border: none;
        border-radius: 12px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.15), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        padding: 10px;
        min-width: 200px;
        margin-top: 10px;
    }
    .navbar .dropdown-item {
        border-radius: 8px;
        padding: 10px 16px;
        color: #4B5563;
        font-weight: 500;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        margin-bottom: 2px;
    }
    .navbar .dropdown-item i {
        color: #10B981;
        width: 24px;
        text-align: left;
        font-size: 1.1rem;
    }
    .navbar .dropdown-item:hover {
        background-color: rgba(5, 150, 105, 0.1);
        color: #059669;
        transform: translateX(4px);
    }
    .navbar .dropdown-divider {
        border-top-color: #E5E7EB;
        margin: 8px 0;
    }
</style>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <div class="btn-group" role="group">
                <a id="btnGroupDrop1" type="button" class="dropdown-toggle text-capitalize" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle"></i> <span>{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="{{ route('profile') }}">
                        <i class="fas fa-user"></i> My Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Log Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
