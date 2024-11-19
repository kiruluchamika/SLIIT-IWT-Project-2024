
// BY DIANI
   
    document.getElementById("c-form").addEventListener("submit", function(event){

    const cname = document.getElementById("name").value;
    const email = document.getElementById("mail").value;
    const number = document.getElementById("contact").value; 
    const msg = document.getElementById("massage").value;

    var inquiry;

    if (document.getElementById("info").checked) {

        inquiry = document.getElementById("info").value; 

    } else if (document.getElementById("comp").checked) {

        inquiry = document.getElementById("comp").value; 
        
    } else if (document.getElementById("oth").checked) {

        inquiry = document.getElementById("oth").value; 
    }

    if(cname=== "" || email === "" || number === "" || inquiry === "" || msg === "")
    {
        alert("Please fill in all fields");
        event.preventDefault();
        return false;
    }
   else 
   {
        const result= confirm('Are you sure you want to submit the Inquiry?');
        
        if(!result)
        {
            event.preventDefault();
            return false;
        }
    }
    });
     
    document.addEventListener('DOMContentLoaded', function() {
        
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success')) {
            alert('Thank you for your inquiry! We will get back to you soon.');
        }
    });
    

   