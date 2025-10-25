<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <title>Layout</title>
</head>


<!-- CARACTER INVISIVEL "  -->


<div class="d-flex">
<div class="flex-shrink-0 p-3" style="width: 280px;"> <a href="/"
        class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom"> <svg
            class="bi pe-none me-2" width="30" height="24" aria-hidden="true">
            <use xlink:href="#bootstrap"></use>
        </svg> <span class="fs-5 fw-semibold">Bazinga</span> </a>
    <ul class="list-unstyled ps-0">
        <li class="mb-1"> <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0"
                data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                Categorias
            </button>
            <div class="collapse show" id="home-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{route('category.create')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">→ Create</a>
                    </li>
                    <li><a href="{{route('category.index')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">→ Index</a>
                    </li>
                    <!-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">a</a>
                    </li> -->
                </ul>
            </div>
        </li>
        <li class="mb-1"> <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                Actions
            </button>
            <div class="collapse" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ route('action.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">→ Create</a>
                    </li>
                    <li><a href="{{ route('action.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">→ Index</a>
                    </li>
                    <!-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a>
                    </li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a>
                    </li> -->
                </ul>
            </div>
        </li>
        <li class="mb-1"> <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                Rewards
            </button>
            <div class="collapse" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">→ Index</a></li>
                    <!-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a>
                    </li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a>
                    </li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a>
                    </li> -->
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1"> <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                <!-- Account
            </button>
            <div class="collapse" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a>
                    </li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a>
                    </li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a>
                    </li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a>
                    </li>
                </ul>
            </div> -->
        </li>
    </ul>
</div>

<!-- <body>
    <div class="container">
        <div class="container">
            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="{{route('category.index')}}" class="nav-link">Categorias</a></li>
                    <li class="nav-item"><a href="{{ route('reward.index') }}" class="nav-link">Recompensas</a></li>
                    <li class="nav-item"><a href="{{ route('action.index') }}" class="nav-link">Actions</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                </ul>
            </header>
        </div> -->
        <div class="teste" style="padding: 40px;">
            @yield('content')
        </div>
</div>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center"> <a href="/"
                        class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap">
                        <svg class="bi" width="30" height="24" aria-hidden="true">
                            <use xlink:href="#bootstrap"></use>
                        </svg> </a> <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Bazinga</span> </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Instagram"><svg class="bi"
                                width="24" height="24" aria-hidden="true">
                                <use xlink:href="#instagram"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Facebook"><svg class="bi"
                                width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg></a></li>
                </ul>
            </footer>
        </div>
    </div>
</body>

</html>