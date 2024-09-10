document.addEventListener("DOMContentLoaded", function() {
    // Get form element
    var bookingForm = document.getElementById("bookingForm");

    // Handle form submission
    bookingForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        // Extract form data
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var address = document.getElementById("address").value;
        var appointmentDate = document.getElementById("appointmentDate").value;
        var appointmentTime = document.getElementById("appointmentTime").value;
        var notes = document.getElementById("notes").value;

        // Simple validation (could be expanded)
        if (!name || !email || !phone || !address || !appointmentDate || !appointmentTime) {
            alert("Please fill out all required fields.");
            return;
        }

        // Show a confirmation message
        alert("Your appointment request has been submitted. We will contact you soon!");

        // Optionally, clear the form
        bookingForm.reset();
    });
});
