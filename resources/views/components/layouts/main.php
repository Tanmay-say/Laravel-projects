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
    <table>
      <thead>
        <tr>
          <th>Serial No</th>
          <th>Song Title</th>
          <th>Artist Name</th>
          <th>Album Name</th>
          <th>Duration</th>
        </tr>
      </thead>
      <tbody>
        <!-- Song rows go here -->
        <tr>
          <td>1</td>
          <td>Song 1</td>
          <td>Artist 1</td>
          <td>Album 1</td>
          <td>3:45</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Song 2</td>
          <td>Artist 2</td>
          <td>Album 2</td>
          <td>4:20</td>
        </tr>
        <!-- Add more songs as needed -->
      </tbody>
    </table>

    <form>
      <label for="playlistName">Playlist Name:</label>
      <input type="text" id="playlistName" name="playlistName" required>

      <label for="songList">Select Song:</label>
      <select id="songList" name="songList">
        <option value="">None</option>
        <option value="song1">Song 1</option>
        <option value="song2">Song 2</option>
        <!-- Add more songs as needed -->
      </select>

      <button type="submit">Save Playlist</button>
    </form>
  </div>
</main>

<footer>
  <p>&copy; 2023 Your Company | <a href="#">About</a> | <a href="#">Contact</a></p>
</footer>

</body>
</html>