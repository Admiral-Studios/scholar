<header class="d-flex align-items-center pb-3 mb-5 border-bottom justify-content-between">
    <a href="{{ route('home') }}" class="d-flex align-items-center text-body-emphasis text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="currentColor" class="bi bi-emoji-smile me-2" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
        </svg>
        <span class="fs-4">Lorem Ipsum</span>
    </a>

    @guest
    <a href="{{ route('login.google') }}" class="btn btn-primary">
        Login via Google
    </a>
    @else
        <div>
            <img src="{{ auth()->user()->avatar }}" class="rounded float-start rounded-circle" width="28">
            <span class="mx-2">{{ auth()->user()->name }}</span>
            <form class="d-inline-block" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                        <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                    </svg>
                </button>
            </form>
        </div>
    @endguest
</header>
