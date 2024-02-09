document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('gameForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Fetch form data
        const formData = new FormData(event.target);

        // Send form data to server using Fetch API
        fetch('process_collection.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Display response message
            alert(data);
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while processing the form.');
        });
    });
});
