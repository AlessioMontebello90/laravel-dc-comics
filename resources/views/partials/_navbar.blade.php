<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{ route('home') }}" aria-current="page">Home<span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}"
                        href="{{ route('comics.index') }}" aria-current="page">Comics List <span
                            class="visually-hidden">(current)</span>
                    </a>

                </li>


                {{-- nav section for create root --}}

                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'comics.create' ? 'active' : '' }}"
                        href="{{ route('comics.create') }}" aria-current="page">Add new comics<span
                            class="visually-hidden">(current)</span></a>
                </li>
            </ul>
            <form class="d-flex my-5 my-lg-3">
                <input class="form-control me-sm-2" type="text" placeholder="Search...">
                <button class="btn btn-outline-secondary my-5 my-sm-1" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
