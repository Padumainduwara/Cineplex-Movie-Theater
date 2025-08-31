document.addEventListener("DOMContentLoaded", function() {
    // Simulate loading time
    setTimeout(function() {
        document.getElementById("loading-screen").style.display = "none";
        document.getElementById("content").style.display = "block";
    }, 2000); // Adjust the timeout duration as needed
});

// Add JavaScript code here to handle seat selection
const seats = document.querySelectorAll('.seat');

seats.forEach(seat => {
    seat.addEventListener('click', () => {
        seat.classList.toggle('selected');
    });
});

function showPopup(popupId) {
    document.getElementById(popupId).style.display = 'block';
}

function hidePopup(popupId) {
    document.getElementById(popupId).style.display = 'none';
}

function openPopup() {
    document.getElementById('popup').style.display = 'flex';
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
}

// Close the popup when the close button is clicked
document.querySelector('.close-btn').addEventListener('click', closePopup);