$(document).ready(function() {
    $('#first-password').click(function() {
        $(this).toggleClass('open');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if ($(this).hasClass('open')) {
            $('#password .input-field').attr('type', 'text');
        } else {
            $('#password .input-field').attr('type', 'password');
        }
    });
    $('#second-password').click(function() {
        $(this).toggleClass('open');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if ($(this).hasClass('open')) {
            $('#check-password .input-field').attr('type', 'text');
        } else {
            $('#check-password .input-field').attr('type', 'password');
        }
    });
});