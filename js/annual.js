// Function to handle button click
function approveconfirm() {
    // Hide the button and show the APPROVED text
    document.getElementById('btn').style.display = 'none';
    document.getElementById('approved-text').style.display = 'inline';
    
    // Save the state to local storage
    localStorage.setItem('isApproved', 'true');
}

// Function to check the state on page load
window.onload = function() {
    // Check if 'isApproved' is stored in local storage
    const isApproved = localStorage.getItem('isApproved');
    
    // If it is approved, show the text instead of the button
    if (isApproved === 'true') {
        document.getElementById('btn').style.display = 'none';
        document.getElementById('approved-text').style.display = 'inline';
    }
}