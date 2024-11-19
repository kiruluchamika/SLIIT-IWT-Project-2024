
<body class="fade">

    <header>
        <div class="container">
            <div class="logo">
                <img src="./images/Logo3t.png" alt="CarePro Logo">
            </div>
            
			<div class="headertitle">
				<h1>Care Pro</h1>
				<h2>Best Life Insurance Service</h2>
			</div>
			
            <?php
                    if(isset($_SESSION['user_id'])) {
                        ?>
                        <div class="auth-buttons">
            <a href="./user.php">
                <button class="Dashboard-up">Dashboard</button>
            </a>
            <a href="./inc/logout.php">
                <button class="Log Out">Log Out</button>
            </a>
            </div>
                        <?php
                    }
                    else {
                        ?>
                        <div class="auth-buttons">
            <a href="./signup.php">
                <button class="sign-up">Sign up</button>
            </a>
            <a href="./signin.php">
                <button class="sign-in">Sign in</button>
            </a>
            </div>
                        <?php
                    }
                    ?>
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




