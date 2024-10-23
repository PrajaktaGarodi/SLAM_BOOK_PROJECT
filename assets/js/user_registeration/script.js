$(document).ready(function() {
    $('#register').validate({
        rules: {
            username: {
                required: true,
                minlength: 2,
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6,
            },
            confirmpassword: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            },
            contact: {
                required: true,
                minlength: 10,
                maxlength: 10,
                number: true
            },
            address: {
                required: true,
                minlength: 10
            },
            gender: { // Updated name from 'gender' to match the HTML
                required: true,
            }
        },
        messages: {
            username: {
                required: "Please enter your name",
                minlength: "Your name must consist of at least 2 characters",
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            password: {
                required: "Please enter your password",
                minlength: "Your password must consist of at least 6 characters"
            },
            confirmpassword: {
                required: "Please confirm your password",
                minlength: "Your password confirmation must consist of at least 6 characters",
                equalTo: "Passwords do not match"
            },
            contact: {
                required: "Please enter your phone number",
                minlength: "Your phone number must consist of at least 10 digits",
                maxlength: "Your phone number must consist of at most 10 digits",
                number: "Your phone number must consist of digits only"
            },
            address: {
                required: "Please enter your address",
                minlength: "Your address must consist of at least 10 characters"
            },
            gender: {
                required: "Please select your gender"
            }
        }
    });
});
