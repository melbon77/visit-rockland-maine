<?php
    $page = "Register for Book Group: Catching Up With the Classics | Visit Rockland";
    $path = "../";
    include($path . "assets/inc/header.php");
    include($path . "assets/inc/nav.php");
?>

    <div class="event_sub_wrapper">
        <h1>Register</h1>
        <div class="event_img" id="book_event"></div>
        <div class="events_holder">
            <div class="details">
                <h2>Book Group: Catching Up With the Classics</h2>
                <p>Join us for this event!
                </p>
                <div class="date">
                    <h3>Date</h3>
                    <p>October 16, 2023</p>
                </div>
                <div class="time">
                    <h3>Time</h3>
                    <p>6:00pm</p>
                </div>
                <div class="location">
                    <h3>Location</h3>
                    <p>Reading Room, Rockland Public Library</p>
                </div>
            </div>
            <div class="registration">
                <label for="attendee_num">Number of Attendees:</label>
                <input type="number" name="attendee_num" id="attendee_num" value="1" min="1" max="20">
                <button>Register</button>
            </div>
        </div>
    </div>

<?php
    include($path . "assets/inc/footer.php");
?>
