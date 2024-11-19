<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="./images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="./styles/generalstyle.css">
	<link rel="stylesheet" href="./styles/contactstyle.css">
    
	
</head>

<?php 
    
    session_start();
    include('./header/header.php')?>	


<section class= "header1">
     <div class="overly"></div>

        <h1>Just a call, click, or chat away.</h1> 
        <p>Our support staff would love to hear from you!</p>

</section>

<section class="contact-info1">
            <div class="containt">
                
                <div class="header-containt">
                    <img src="./images/location.png" class="icon">Address:</div>
                <div class="inside-containt">Care Pro,<br/>Insurance company,<br/>No220,<br/>
                vaxhell street,<br/>Colombo 02,<br/>Sri Lanka.<br></div>
            </div>
            
            <div class="containt">
                <div class="header-containt">
                <img src="./images/hotline.png" class="icon">Hotlines:</div>
                <div class="inside-containt">+94 11 2357589<br>+94 11 2357590<br>+94 11 2357567<br></div>
            </div>
 </section> 
 <section class=" contact-info2">          
            <div class="containt">
                <div class="header-containt">
                <img src="./images/fax-machine.png" class="icon">Fax Number:</div>
                <div class="inside-containt">+94 123 447763</div>
            </div>
             
            <div class="containt">
                <div class="header-containt">
                <img src="./images/whatsapp.png" class="icon">WhatsApp Chat Number</div>
                <div class="inside-containt">076 1920079</div>
            </div>

            <div class="containt">
                <div class="header-containt">
                <img src="./images/mail-inbox.png" class="icon">Email:</div>
                <div class="inside-containt">carepromail@Insurance.com</div>
            </div>

</section>

<section class="contact-form">
    <h2>Any Questions?</h2>
    <p>We Are Always Ready To Help You.</p>

    <form action='./contact/contact-add.php' method="post" id= 'c-form'>
               
                <input type="text" name="name" placeholder=" Name" id="name" ><br/>

                <input type="tel" name="contact" minlength="10" maxlength="10" placeholder=" Telephone Number" id="contact"><br/>
    
                <input type="email" name="mail"pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" placeholder="Email" title="Please enter valid email(e.g.,user@example.com)" id="mail"><br/>
    
                <label for="enquiry">Type Of Enquiry</label><br/>
    
                <input type="radio" name="enquiry" id="info" value="Information" >
                <label for="info">Information</label><br/>
    
                <input type="radio" name="enquiry" id="comp" value="Complaint">
                <label for="comp">Complaint</label><br/>
                
                <input type="radio" name="enquiry" id="oth" value="Other">
                <label for="oth">Other</label><br/>
    
                <textarea name="massage" id="massage" row="5" cols="40" placeholder="Write your message here" ></textarea><br/><br/>
                
                <div class="btn">
                    <input type="submit" value="SEND" name="submit-btn" onclick="tnqmsg()" >
                </div>  
    </form>
     
</section>

<section>
<div class="containt6" >
        <div class="header-containt">Follow Us On</div>
        <div class="inside-containt">
            
                <a href="#" ><img src="./images/fb.png"></a>
                <a href="#"><img src="./images/insta.png"></a>
                <a href="#"><img src="./images/link.png"></a>
                <a href="#"><img src="./images/tw.png"></a>
                <a href="#"><img src="./images/youtube.png"></a>
        </div>
    </div>
<script src="./js/contactjs.js"></script>
</section>



<?php include('./footer/footer_home.php')?>