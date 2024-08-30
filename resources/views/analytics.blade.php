<!DOCTYPE html>
<html>
<head>
  <title>Admin Analytics</title>
  <link rel="stylesheet" href="{{ asset('css/analytics.css') }}">
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
        <div class="nav-item active"><a href="{{ route('home') }}">User Analytics</a></div>
        <div class="nav-item"><a href="{{ route('announcements') }}">Announcements</a></div>
        <div class="nav-item"><a href="{{ route('notifications') }}">Notifications</a></div>
        <div class="nav-item"><a href="{{ route('privacy') }}">Privacy Policy</a></div>
        <div class="nav-item"><a href="{{ route('logs') }}">History Logs</a></div>
      </div>
      <div class="content">
        <div class="left">
          <div class="pie-chart"></div>
          <div class="buttons">
            <button class="button daily">Daily</button>
            <button class="button monthly">Monthly</button>
            <button class="button yearly">Yearly</button>
          </div>
        </div>
        <div class="right">
          <h3>User - Pronunciation Performance Relationship</h3>
          <p>Determines the number of users (%) within a certain range of pronunciation performance</p>
          <table class="table">
            <thead>
              <tr>
                <th>Performance</th>
                <th>Users (%)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>0-10</td>
                <td>16.2%</td>
              </tr>
              <tr>
                <td>11-20</td>
                <td>14.3%</td>
              </tr>
              <tr>
                <td>21-30</td>
                <td>12.6%</td>
              </tr>
              <tr>
                <td>31-40</td>
                <td>12.5%</td>
              </tr>
              <tr>
                <td>41-50</td>
                <td>10.5%</td>
              </tr>
              <tr>
                <td>51-60</td>
                <td>7.7%</td>
              </tr>
              <tr>
                <td>61-70</td>
                <td>7.3%</td>
              </tr>
              <tr>
                <td>71-80</td>
                <td>6.7%</td>
              </tr>
              <tr>
                <td>81-90</td>
                <td>6.1%</td>
              </tr>
              <tr>
                <td>91-100</td>
                <td>3.3%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>