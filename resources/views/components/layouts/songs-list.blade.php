

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
        @foreach ($songs as $songs)
        <tr>
          <td>1</td>
          <td>{{$songs -> title}}</td>
          <td>{{$songs -> artist}}</td>
          <td>Album 1</td>
          <td>4:20</td>
        </tr>
        @endforeach
        <!-- Add more songs as needed -->
      </tbody>
    </table>