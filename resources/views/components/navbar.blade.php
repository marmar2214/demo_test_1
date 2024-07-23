<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ isset($active) && $active == 'home' ? '' : 'collapsed' }}" href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ isset($active) && $active == 'news' ? '' : 'collapsed' }}" href="{{ route('news.index') }}">
                <i class="bi bi-grid"></i>
                <span>News</span>
            </a>
        </li>
    </ul>
</aside>
