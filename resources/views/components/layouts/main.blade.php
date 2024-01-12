<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? "Cool Web App" }}</title>
  <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
</head>
<body>

<header>
  <div>
    <h1>Playlist Name</h1>
    <p>Basic information about the playlist</p>
  </div>
  <div>
    <a href="#">Edit Playlist</a>
    <a href="#">New Playlist</a>
  </div>
</header>

<main>
<nav>
    <h2>Saved Playlists</h2>
    <ul>
      <li><a href="#">Playlist 1</a></li>
      <li><a href="#">Playlist 2</a></li>
      <!-- Add more playlists as needed -->
    </ul>
  </nav>

  <div>
  
  @yield('content')
    
  </div>
</main>

<footer>
  <p>&copy; 2023 Your Company | <a href="#">About</a> | <a href="#">Contact</a></p>
</footer>

</body>
</html>