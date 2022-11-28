<div class="navigation-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top px-8 py-9">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Giant Book Supplier</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navBarContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#"
                            class="nav-link {{ Route::is('category.view') ? 'active' : '' }} 
                           dropdown-toggle"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Category
                        </a>

                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.view', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('publisher.view') }}" class="nav-link {{ Route::is('publisher.*') ? 'active' : '' }}">Publisher</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
