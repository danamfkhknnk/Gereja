<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>GITJ PUNCEL</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <style>
        #menu-toggle:checked + #menu {
          display: block;
        }
        
    </style>
</head>
<body class="bg-secondary">
    <div>
        @include('Home.Navbar')
    </div>
    <div id="Galeri" >
        @include('Home.Galeri')      
    </div>
    <div id="sejarah">
        @include('Home.Sejarah')
    </div>
    <div id="ibadah" >
        @include('Home.Ibadah')      
    </div>
    <div id="struktur" >
        @include('Home.Struktur')
    </div>
    <div id="Kegiatan" >
        @include('Home.Kegiatan')      
    </div>
    <div id="kontak">
        @include('Home.Kontak')
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>