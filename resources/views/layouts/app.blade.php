@include('layouts.head')
<body>
    <div id="app">
        <!-- Navbar -->
        <div>
            @include('layouts.partials.navbar')
        </div>
        <!-- Main -->
        <main class="py-4">
            @yield('content')
        </main>
        <!-- Footer -->
        <footer>
            @include('layouts.partials.navbar')
        </footer>
    </div>
</body>
</html>
