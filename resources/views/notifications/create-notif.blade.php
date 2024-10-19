<!DOCTYPE html>
<html>

<head>
    <title>Create Push Notifications</title>
    <link rel="stylesheet" href="{{ asset('css/createann.css') }}">
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
                <div class="nav-item"><a href="{{ route('announcements') }}">Announcements</a></div>
                <div class="nav-item active"><a href="{{ route('notifications') }}">Notifications</a></div>
                <div class="nav-item"><a href="{{ route('privacy') }}">Privacy Policy</a></div>
                <div class="nav-item"><a href="{{ route('logs') }}">History Logs</a></div>
            </div>

            <div class="create-title">
                <h2 class="create-text">New Push Notification</h2>
            </div>
            {{-- NOTE: Might require different IDs or CLASSES for CSS --}}
            <div class="new-announcement">
                <form method="POST" action="{{ route('store-notif') }}">
                    @csrf
                    <div class="announcement-input">
                        <input type="text" class="title-input" placeholder="TITLE" />
                        <textarea class="message-input" placeholder="Message..."></textarea>
                    </div>
                    <div class="datetime">
                        <div class="date-time-picker">
                            <div class="date-picker">
                                <p>DATE</p>
                                <select class="month-select">
                                    <option>Month</option>
                                    <!-- Add month options here -->
                                </select>
                                <select class="day-select">
                                    <option>Day</option>
                                    <!-- Add day options here -->
                                </select>
                                <select class="year-select">
                                    <option>Year</option>
                                    <!-- Add year options here -->
                                </select>
                            </div>

                            <div class="time-picker">
                                <p>TIME</p>
                                <select class="hour-select">
                                    <option>00</option>
                                    <!-- Add hour options here -->
                                </select>
                                :
                                <select class="minute-select">
                                    <option>00</option>
                                    <!-- Add minute options here -->
                                </select>
                                <select class="ampm-select">
                                    <option>AM</option>
                                    <option>PM</option>
                                </select>
                            </div>
                        </div>

                        <div class="action-buttons">
                            <button class="cancel-btn">Cancel<i class="fa-solid fa-circle-xmark"></i></button>
                            <button class="publish-btn">Publish<i class="fa-solid fa-circle-chevron-up"></i></button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
