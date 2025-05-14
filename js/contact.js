$(document).ready(function () {
    $('#contactForm').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'contact_process.php',
            data: $(this).serialize(),
            success: function (response) {
                if (response.trim() === 'success') {
                    $('#success').modal('show');
                    $('#contactForm')[0].reset();
                } else {
                    $('#error').modal('show');
                }
            },
            error: function () {
                $('#error').modal('show');
            }
        });
    });
});