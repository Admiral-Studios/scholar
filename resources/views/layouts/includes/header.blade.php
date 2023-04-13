<header class="d-flex align-items-center pb-3 mb-5 border-bottom justify-content-between">
    <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Starter template</span>
    </a>

    @guest()
    <a href="/" class="btn btn-primary">
        Login via Google Scholar
    </a>
    @endguest
</header>
