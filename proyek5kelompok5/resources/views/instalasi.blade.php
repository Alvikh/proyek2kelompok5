<!-- Inside the modal body -->
<div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
    <h4 id="blogTitle">{{ $blog->title }}</h4>
    <p>Capacity: {{ optional($blog->capacity)->capacity }}</p>
    <p>Storage: {{ optional($blog->storage)->storage }}</p>

    <!-- Installation Form -->
    <form id="installationForm" method="POST">
        @csrf
        <!-- Add more form fields as needed -->
        <div class="form-group">
            <label for="installationDate">Installation Date:</label>
            <input type="date" class="form-control" id="installationDate" name="installationDate" required>
        </div>

        <div class="form-group">
            <label for="installerName">Installer Name:</label>
            <input type="text" class="form-control" id="installerName" name="installerName" required>
        </div>

        <!-- Add more fields as needed -->

        <button type="submit" class="btn btn-primary">Submit Installation</button>
    </form>
</div>

<script>
    $(document).ready(function () {
        // Event handler for form submission
        $('#installationForm').submit(function (event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get the form data
            var formData = $(this).serialize();

            // You can now send an AJAX request to your server with the form data
            // Example using jQuery AJAX
            $.ajax({
                url: '/submitted', // Replace with your actual endpoint
                method: 'POST', 
                data: formData,
                success: function (response) {
                    // Handle the success response
                    console.log('Installation submitted successfully');
                    // You might want to close the modal or show a success message
                },
                error: function (error) {
                    // Handle the error response
                    console.error('Error submitting installation', error);
                    // You might want to show an error message
                }
            });
        });
    });
</script>
