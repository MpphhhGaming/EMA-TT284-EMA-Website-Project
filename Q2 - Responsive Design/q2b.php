<!-- Images Used -->
<!-- Bacgkorund image - src = https://unsplash.com/photos/QVD3Xht9txA -->

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="q2b.css">
    <title>OU Walking Club</title>
  </head>
  <body>
    <!-- Navigation Bar -->
    <header>
    <ul>
      <li><a href="q2bPlaceHolder.html">Home</a></li>
      <li><a class="active" href="q2b.php">Walk Events</a></li>
      <li><a href="q2bPlaceHolder.html">Other Events</a></li>
      <li><a href="q2bPlaceHolder.html">Membership</a></li>
      <li style="float: right;">

        <!-- Login System -->
        <div class="login-form">
          <form action="login.php" method="post" class="form-container">

            <label for="email"><b>Username:</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password:</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" class="button">Login</button>
          </form>
        </div>
      </li>
    </ul>
    </header>

    <!-- Title -->
    <div class="paralax"><a class="title">OU Walking Club</a></div>
    <!-- Walk events -->
    <div><h1 style="padding: 1vw;">Walk Events</h1></div>
    
    <div class="ev1">
        <div class="ev2">
            <table class="events">
                <tr class="head">
                    <th>Name of Walk</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Meeting Point</th>
                    <th>Distance</th>
                    <th>Name Of Leader</th>
                    <th>Comments</th>
                    <th>Status</th>
                </tr>
                <?php
                include "connect.php";
        
                $sql = "SELECT * FROM events";
                $result = $conn->query($sql);
        
                if ($result-> num_rows > 0) 
                {
                    while ($row = $result->fetch_assoc())
                    {
                        echo "<tr><td>"
                        . $row["name"] ."</td><td><br>"
                        . $row["date"] ."</td><td>"
                        . $row["start"] ."</td><td>"
                        . $row["end"] ."</td><td>"
                        . $row["meet"] ."</td><td>"
                        . $row["distance"] ."</td><td>"
                        . $row["leader"] ."</td><td>"
                        . $row["comments"] ."</td><td>"
                        . $row["status"] ."</td></tr>";
                    }
                    echo "</table>";
                }
                $conn->close();
                ?>
            </table>
        </div>
    </div>
    
    <div class="paralax" style="min-height: 20vh"></div>
    <!-- Submit your own -->
    <div class="walk-form">
      <form action="submit-form.php" method="post" class="submit-container" id="walkForm">
        <h1>Create Your Own</h1>
        <!-- Walk Name -->
        <label for="walk-name"><b>Name of Walk:</b></label>
        <input type="text" placeholder="Enter walk name" name="walk-name" required>
        <!-- Walk Date -->
        <label for="walk-date"><b>Date:</b></label>
        <input type="text" placeholder="Enter date of walk" name="walk-date" required>
        <!-- Walk Start Time -->
        <label for="start-time"><b>Start Time:</b></label>
        <input type="text" placeholder="Enter start time" name="start-time" required>
        <!-- Walk Finish Time -->
        <label for="end-time"><b>End Time:</b></label>
        <input type="text" placeholder="Enter finish time" name="end-time">
        <!-- Walk Meeting Point -->
        <label for="meet-point"><b>Meeting Point:</b></label>
        <input type="text" placeholder="Enter meeting point" name="meet-point" required>
        <!-- Walk Distance -->
        <label for="distance"><b>Distance:</b></label>
        <input type="text" placeholder="Enter walk length" name="distance" required>
        <!-- Walk Leader -->
        <label for="leader"><b>Name Of Leader:</b></label>
        <input type="text" placeholder="Enter leaders name" name="leader" required>
        <!-- Walk comments -->
        <label for="comments"><b>Extra Comments:</b></label>
        <input type="text" placeholder="Enter extra information" name="comments">
        <!-- Status -->
        <label for"status"><b>Status:</b></label>
        <select class="status" name="status">
            <option value="pending">Pending</option>
            <option value="Approved">Approved</option>
            <option value="Denied">Denied</option>
        </select>
        <!-- Buttons -->
        <button type="button" class="clear" onclick="clearForm()">Clear</button>
        <button type="submit" class="button">Submit</button>

        <script>
        const form = document.getElementById("walkForm");
        /* Clear Form */
        function clearForm() { form.reset() }
        </script>
      </form>  
    </div>
    <div class="paralax" style="min-height: 20vh"></div>
    <div>
        <!-- Delete form -->
        <div class="delete-form">
            <form action="delete-form.php" method="post" class="delete-container" id="deleteForm">
                <h1>Remove an item</h1>
                <!-- Delete By ID -->
                <label for="event-id"><b>Enter ID Number:</b></label>
                <input type="text" placeholder="Enter ID number" name="event-id">
                <button type="submit" class="button">Submit</button>
            </form>
        </div>
    </div>
    <!-- End of Page -->
    <footer class="footer-distributed">
      <div class="footer-left">
        <p class="footer-links">
          <a class="link-1" href="q2bPlaceHolder.html">Home</a>
          <a href="q2b.php">Walk Events</a>
          <a href="q2bPlaceHolder.html">Other Events</a>
          <a href="q2bPlaceHolder.html">Membership</a>
        </p>
        <p>Company Name &copy; 2020</p>
      </div>
    </footer>
  </body>
</html>