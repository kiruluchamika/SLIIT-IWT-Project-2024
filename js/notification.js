
// BY KIRULU

document.addEventListener("DOMContentLoaded", function () {
    const notificationIcon = document.getElementById("notification-icon");
    const notificationDropdown = document.getElementById("notification-dropdown");
    const notificationCount = document.getElementById("notification-count");

    // Toggle dropdown on click
    notificationIcon.addEventListener("click", function () {
        notificationDropdown.style.display = notificationDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Fetch notifications using AJAX
    function fetchNotifications() {
        fetch('get-notifications.php')
            .then(response => response.json())
            .then(data => {
                if (data.notifications.length > 0) {
                    notificationCount.textContent = data.notifications.length;
                    notificationDropdown.innerHTML = '';
                    data.notifications.forEach(notification => {
                        const p = document.createElement('p');
                        p.textContent = notification.message;
                        notificationDropdown.appendChild(p);
                    });
                }
            });
    }

    // Call fetch notifications every 30 seconds
    setInterval(fetchNotifications, 30000);
    fetchNotifications();   // Initial call
});
