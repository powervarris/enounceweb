<!DOCTYPE html>
<html>

<head>
  <title>Announcements</title>
  <link rel="stylesheet" href="{{ asset('css/announcements.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script src="https://kit.fontawesome.com/3f2806d400.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>

<body>
  <div class="main-container">
    <div class="sub-container">
      <div class="header">
        <div class="logo">E-NOUNCE</div>
        <div class="user">AmadoQT</div>
      </div>
      <div class="nav">
        <div class="nav-item"><a href="{{ route('home') }}">User Analytics</a></div>
        <div class="nav-item active"><a href="{{ route('announcements') }}">Announcements</a></div>
        <div class="nav-item"><a href="{{ route('notifications') }}">Notifications</a></div>
        <div class="nav-item"><a href="{{ route('privacy') }}">Privacy Policy</a></div>
        <div class="nav-item"><a href="{{ route('logs') }}">History Logs</a></div>
      </div>
      <div class="content">
        <div class="buttons">
          <button class="icon-button" onclick="location.href='{{ route('createann') }}'">
            <i class="fa-solid fa-circle-plus"></i>
          </button>
          <button class="icon-button">
            <i class="fa-solid fa-arrows-rotate"></i>
          </button>
        </div>
        <div class="filter">
            <button id="dropdownButton" class="dropdown-toggle">
              <span id="filterText">Latest</span>
              <i class="fa-solid fa-arrow-down-wide-short"></i>
            </button>
          </div>
        </div>
      </div>  
    </div>
  </div>
</body>

</html>