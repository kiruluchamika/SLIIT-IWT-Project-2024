<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarePro Insurance</title>
	<link rel="icon" type="image/png" href="./images/Logo3t.png">
	
	<!-- ADD CSS FILES -->
    <link rel="stylesheet" href="./styles/generalstyle.css">
	<link rel="stylesheet" href="./styles/faqstyle.css">

  <!-- ADD JS -->
    <script src="./js/faq.js"></script>
</head>
    
	
</head>

<?php 
    
    session_start();
    include('./header/header.php')?>	

     
    <div class="faq-image">
    
    <img src="./images/faq.png" class="faq-image" width="100%" height="600px">

    </div>

  
  <header>
      <h1>Frequently Asked Questions (FAQ)</h1>
    </header>

    <main>
      <section>
        <div class="faq">
          <h2>General Information</h2>
            <button class= "according">
              1. What is a Health Insurance Management System?
            </button>
            <div class="answers">
              <p>
              A Health Insurance Management System (HIMS) is an online platform designed to help users manage their health insurance policies, claims, payments, and personal information in one centralized place. It also provides healthcare providers with tools to manage patient data and insurance claims efficiently.
              </p>
            </div>

            <button class= "according">
              2. How do I access the Health Insurance Management System?
            </button>
            <div class="answers">
              <p>
              You can access the system by visiting our website and logging in with your account credentials. If you’re a new user, you can register using your policy information or sign up button.
              </p>

        </div>
        
        <div class="faq">
        <h2>Account and Profile Management</h2>
            <button class= "according">
              3. How do I create an account?
            </button>
            <div class="answers">
              <p>
              Click the "Sign Up" button on the homepage. You’ll be prompted to signup form, personal information, and create a password. After verification, you’ll receive an email confirming your account creation.
              </p>
            </div>

            <button class= "according">
             4. I forgot my password. How can I reset it?
            </button>
            <div class="answers">
              <p>
              If you’ve forgotten your password, click the "Forgot Password" link on the login page. Enter your registered email, and you’ll receive a link to reset your password.
              </p>
            </div>

            <button class= "according">
              5. How do I update my personal information?
            </button>
            <div class="answers">
              <p>
              After logging into your account, go to the "Profile" section to update your contact information, address, or any other personal details. Be sure to save your changes.
              </p>
            </div>

        </div>

        <div class="faq">
        <h2>Policy and Coverage</h2>
            <button class= "according">
              6. How can I check my policy details?
            </button>
            <div class="answers">
              <p>
              Once logged in, go to the "My Policies" section to view details about your current insurance coverage, including policy expiration dates, premiums, and what’s covered under your plan.
              </p>
            </div>

            <button class= "according">
              7. How do I renew my policy?
            </button>
            <div class="answers">
              <p>
              You can renew your policy through the system by navigating to the "Renew Policy" tab. Follow the steps, review your coverage options, and complete the payment process to renew your policy.
              </p>
            </div>

            <button class= "according">
              8. Can I add a dependent to my policy?
            </button>
            <div class="answers">
              <p>
              Yes, you can add dependents to your policy through the "Manage Dependents" section. Make sure to provide the necessary details like their name, relationship, and date of birth.
              </p>
            </div>

        </div>

        <div class="faq">
        <h2>Claims Management</h2>
            <button class= "according">
              9. How do I file a claim?
            </button>
            <div class="answers">
              <p>
               To file a claim, log in and go to the "File a Claim" section. Follow the prompts to upload required documents and submit your claim for processing. You’ll receive a confirmation once your claim has been submitted.
              </p>
            </div>

            <button class= "according">
              10. How can I track my claim status?
            </button>
            <div class="answers">
              <p>
              You can check the status of your submitted claims in the "Claims History" section. There, you’ll see real-time updates on your claim, including approval, pending, or rejection status.
              </p>

            </div>

            <button class= "according">
              11. What documents are needed for filing a claim?
            </button>
            <div class="answers">
              <p>
              Typically, you’ll need to provide medical reports, receipts, and other relevant documentation to support your claim. The system will guide you on the specific documents required based on your claim type.
              </p>
            </div>

        </div>

        <div class="faq">
        <h2>Payments</h2>
            <button class= "according">
              12. How do I make premium payments?
            </button>
            <div class="answers">
              <p>
              You can make payments through the "Make a Payment" section. The system supports credit/debit cards, bank transfers, and online wallets. Be sure to review your payment details before confirming.
              </p>
            </div>
   
            <button class= "according">
              13. Can I set up automatic payments?
            </button>
            <div class="answers">
              <p>
              Yes, you can enable automatic payments through the "Payment Settings" section. This allows your premiums to be automatically debited from your account on the due date.
              </p>
            </div>

            <button class= "according">
            14. How do I view my payment history?
            </button>
            <div class="answers">
              <p>
              Go to the "Payment History" section to see all past transactions, including payments made for premiums, renewals, and any claims reimbursements.
              </p>
            </div>

        </div>

        <div class="faq">
        <h2>Technical Support</h2>
            <button class= "according">
            15. I’m having trouble accessing my account. What should I do?
            </button>
            <div class="answers">
              <p>
              If you're having difficulty accessing your account, try resetting your password first. If the issue persists, contact our technical support team via the "Help" or "Contact Us" page.
              </p>
            </div>

            <button class= "according">
            16. What browsers are supported by the system?
            </button>
            <div class="answers">
              <p>
              Our platform is optimized for use with modern browsers like Google Chrome, Mozilla Firefox, Safari, and Microsoft Edge. Ensure that your browser is up-to-date for the best experience.
              </p>

            </div>

        </div>

      </section>

    </main>



<?php include('./footer/footer_home.php')?>