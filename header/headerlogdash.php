<!-- BY KIRULU -->

<?php require_once('./inc/config.php'); ?>
<body>

    <header>
        <div class="container">
            <div class="logo">
                <img src="./images/Logo3t.png" alt="CarePro Logo">
            </div>
            
			<div class="headertitle">
				<h1>Care Pro</h1>
				<h2>Best Life Insurance Service</h2>
			</div>


            <div class="notification">
                <i class="fas fa-bell" id="notification-icon"></i>
                <span id="notification-count"><?php 
                $sql = "SELECT COUNT(*) AS total_notifications FROM notification";
                $result = $conn->query($sql);
                
                // Fetch the result and display it using echo
                if ($result->num_rows > 0) {
                    // Fetch associative array
                    $row = $result->fetch_assoc();
                    
                    // Display the total number of notifications
                    echo $row['total_notifications'];
                } else {
                    echo "No notifications found.";
                }
                ?></span>
                <div class="dropdown" id="notification-dropdown">
                    <?php
                        $sql = "SELECT notificationID, adminID, notification, date, time FROM notification ORDER BY date DESC, time DESC";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            // Generate HTML for each notification
                            while($row = $result->fetch_assoc()) {
                                echo "<p>";
                                echo "<strong>" . htmlspecialchars($row["notification"]) . "</strong><br>";
                                echo "<small>Date: " . htmlspecialchars($row["date"]) . " Time: " . htmlspecialchars($row["time"]) . "</small>";
                                echo "</p>";
                                echo "<hr>"; // Add horizontal line between notifications
                            }
                        } else {
                            echo "<p>No new notifications</p>";
                        }
                    ?>
                </div>
                    </div>
            
            <div class="auth-buttons">
            <a href="#">
                <button onclick="window.location.href='./inc/logout.php';" class="log-out">Log Out</button>
            </a>

        </div>

        
    </header>
	
	
	<div class="navigation">
		<nav>
                <ul class="menu">
                    <li class="nav1"><a href="./home.php">Home</a></li>
                    <li class="nav1"><a href="./aboutus.php">About Us</a></li>
                    <li class="nav1"><a href="./contact.php">Contact</a></li>
                    <li class="nav1"><a href="./plans.php">Plans</a></li>
                    <li class="nav1"><a href="./employeedetails.php">Employees</a></li>
                    <li class="nav1"><a href="./faq.php">FAQ</a></li>
                </ul>

                
            </nav>
	</div>




