<!-- master.blade.php -->
<html>
    <head>
        <title>My Portfolio</title>
    </head>
    <body>
        @include('partials.header') <!-- Include the header -->
        
        <div class="main-content">
            @yield('content') <!-- Placeholder for page-specific content -->
        </div>
        
        @include('partials.footer') <!-- Include the footer -->
        
        <!-- Common scripts, etc. -->
    </body>
</html>