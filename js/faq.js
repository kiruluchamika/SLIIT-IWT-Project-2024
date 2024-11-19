// BY DIYANA

//document.write("success");

// Get all buttons with the class "according"
document.addEventListener("DOMContentLoaded", function() {
    const acc = document.querySelectorAll(".according");
    
    acc.forEach(button => {
      button.addEventListener("click", function () {
        // Toggle active class
        this.classList.toggle("active");
    
        // Toggle the answer visibility
        const answer = this.nextElementSibling;
        if (answer.style.maxHeight) {
          answer.style.maxHeight = null;
        } else {
          answer.style.maxHeight = answer.scrollHeight + "px";
        }
      });
    });
    });