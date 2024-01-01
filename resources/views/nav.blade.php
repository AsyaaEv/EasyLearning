<nav class="navbar navbar-expand-lg bg-body-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('post') }}">{{ __('Home') }}</a>
                </li>
            </ul>
        </div>
        <img src="https://etnis.id/content/images/2019/09/2449058442_4d96999fb1_k.jpg" style="width: 3rem; height:3rem; border-radius:50%;" alt="">
    </div>
</nav>
