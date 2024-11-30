<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Employee</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF Token -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="register-form">
        <h2>Register Employee</h2>
        <form id="employee-register-form">
            <div>
                <label for="em_first_name">First Name:</label>
                <input type="text" id="em_first_name" name="em_first_name" required>
            </div>
            <div>
                <label for="em_last_name">Last Name:</label>
                <input type="text" id="em_last_name" name="em_last_name" required>
            </div>
            <div>
                <label for="em_email_1">Email:</label>
                <input type="email" id="em_email_1" name="em_email_1" required>
            </div>
            <div>
                <label for="em_password">Password:</label>
                <input type="password" id="em_password" name="em_password" required>
            </div>
            <div>
                <label for="em_phone_1">Phone Number:</label>
                <input type="text" id="em_phone_1" name="em_phone_1">
            </div>
            <button type="submit">Register</button>
        </form>

        <div id="response-message" style="display:none;">
            <p id="response-text"></p>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Add CSRF token to AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#employee-register-form').on('submit', function(e) {
                e.preventDefault(); // Prevent form submission

                // Get form data
                var formData = {
                    em_first_name: $('#em_first_name').val(),
                    em_last_name: $('#em_last_name').val(),
                    em_email_1: $('#em_email_1').val(),
                    em_password: $('#em_password').val(),
                    em_phone_1: $('#em_phone_1').val(),
                };

                $.ajax({
                    url: 'register_employee',  // Endpoint register
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // If registration is successful
                        $('#response-message').show();
                        $('#response-text').html('<span style="color: green;">' + response.message + '</span>');
                    },
                    error: function(xhr) {
                        // If there are validation errors
                        var errors = xhr.responseJSON.errors;
                        var errorMessages = '';
                        $.each(errors, function(key, value) {
                            errorMessages += '<p>' + value[0] + '</p>';
                        });
                        $('#response-message').show();
                        $('#response-text').html('<span style="color: red;">' + errorMessages + '</span>');
                    }
                });
            });
        });
    </script>
</body>
</html>
