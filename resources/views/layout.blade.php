<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Eco Bazinga</title>
    <style>
        :root {
            --sidebar-width: 280px;
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        body {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        /* Sidebar Moderna */
        .sidebar {
            width: var(--sidebar-width);
            min-height: 100vh;
            background: rgba(20, 20, 30, 0.95);
            backdrop-filter: blur(10px);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            position: fixed;
            left: 0;
            top: 0;
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 2rem 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            background: var(--primary-gradient);
        }

        .sidebar-header h4 {
            margin: 0;
            font-weight: 700;
            color: white;
            font-size: 1.3rem;
        }

        .nav-pills .nav-link {
            border-radius: 12px;
            margin: 0.3rem 0;
            padding: 0.9rem 1.2rem;
            color: rgba(255, 255, 255, 0.7);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 500;
        }

        .nav-pills .nav-link i {
            font-size: 1.2rem;
            width: 24px;
        }

        .nav-pills .nav-link:hover {
            background: rgba(102, 126, 234, 0.2);
            color: white;
            transform: translateX(5px);
        }

        .nav-pills .nav-link.active {
            background: var(--primary-gradient);
            color: white;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: margin-left 0.3s ease;
        }

        .content-wrapper {
            padding: 2rem;
            min-height: calc(100vh - 100px);
        }

        /* Mobile Toggle */
        .sidebar-toggle {
            display: none;
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 1001;
            background: var(--primary-gradient);
            border: none;
            padding: 0.6rem 1rem;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            box-shadow: var(--card-shadow);
        }

        /* Footer Moderno */
        footer {
            background: rgba(20, 20, 30, 0.95);
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem 0;
            margin-left: var(--sidebar-width);
            transition: margin-left 0.3s ease;
            padding-left: 2em;
        }

        footer a {
            color: rgba(255, 255, 255, 0.6);
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #667eea;
        }

        /* Responsivo */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            footer {
                margin-left: 0;
            }

            .sidebar-toggle {
                display: block;
            }
        }

        /* Animações */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .content-wrapper > * {
            animation: fadeInUp 0.6s ease-out;
        }
    </style>
</head>

<body>
    <!-- Toggle Button Mobile -->
    <button class="sidebar-toggle" onclick="toggleSidebar()">
        <i class="bi bi-list"></i>
    </button>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h4><i class="bi bi-tree me-2"></i>Eco Bazinga</h4>
        </div>
        
        <div class="p-3">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="bi bi-house-door-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('category.index')}}" class="nav-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Categorias</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('action.index')}}" class="nav-link">
                        <i class="bi bi-lightning-charge-fill"></i>
                        <span>Ações</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('useraction.index')}}" class="nav-link">
                        <i class="bi bi-people-fill"></i>
                        <span>Ações de Usuários</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('reward.index')}}" class="nav-link">
                        <i class="bi bi-trophy-fill"></i>
                        <span>Recompensas</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 text-white-50">
                        <i class="bi bi-c-circle me-1"></i>Eco Bazinga - Todos os direitos reservados.
                    </p>
                </div>
                <!-- <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <a href="#" class="me-3" aria-label="Instagram">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="#" aria-label="Facebook">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                </div> -->
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('show');
        }

        // Marca o link ativo baseado na URL atual
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.sidebar .nav-link');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });

        // Fecha sidebar ao clicar fora (mobile)
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggle = document.querySelector('.sidebar-toggle');
            
            if (window.innerWidth <= 992) {
                if (!sidebar.contains(event.target) && !toggle.contains(event.target)) {
                    sidebar.classList.remove('show');
                }
            }
        });
    </script>
</body>

</html>