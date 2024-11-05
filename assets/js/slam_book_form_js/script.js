$(document).ready(function(){
    $("#slambook").validate({
        rules:{
            fullname:{
                required: true, // corrected typo here
                minlength: 2
            },
            email:{
                required: true,
                email: true
            },
            phoneno: {
                required: true,
                minlength: 10,
                maxlength: 10,
                number: true
            },
            address:{
                required: true,
                minlength: 10
            },
            gender:{
                required: true
            },
            dateofbirth:{
                required: true
            },
            nickname:{
                required: true
            },
            profile:{
                required: true
            },
            country:{
                required: true
            },
            state:{
                required: true
            },
            city:{
                required: true
            },
            favcolor:{
                required: true
            },
            favmovie:{
                required: true
            },
            favsong:{
                required: true
            },
            favactor:{
                required: true
            },
            favfood:{
                required: true
            },
            favactress:{
                required: true
            },
            favsinger:{
                required: true
            },
            badhabbit:{
                required: true
            },
            personalitywords:{
                required: true
            },
            hobbies:{
                required: true
            },
            dreamgoal:{
                required: true
            },
            biggestfear:{
                required: true
            },
            proudestchaievement:{
                required: true
            },
            bestchildhoodmemory:{
                required: true
            },
            funniestincident:{
                required: true
            },
            mostembarrassingmoment:{
                required: true
            },
            favoritememorytogether:{
                required: true
            },
            adviceforme:{
                required: true
            },
            hiddentalent:{
                required: true
            },
            essentialitem:{
                required: true
            },
            dreamdestination:{
                required: true
            },
            specialmessage:{
                required: true
            }
        },
        messages:{
            fullname:{
                required: "Please enter your name",
                minlength: "Your name must be at least 2 characters long"
            },
            email:{
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            phoneno:{
                required: "Please enter your phone number",
                minlength: "Your phone number must be 10 digits long",
                maxlength: "Your phone number must be 10 digits long",
                number: "Please enter a valid phone number"
            },
            address:{
                required: "Please enter your address",
                minlength: "Your address must be at least 10 characters long"
            },
            gender:{
                required: "Please select your gender"
            },
            dateofbirth:{
                required: "Please enter your date of birth"
            },
            nickname:{
                required: "Please enter your nickname"
            },
            profile:{
                required: "Please enter your profile"
            },
            country:{
                required: "Please enter your country"
            },
            state:{
                required: "Please enter your state"
            },
            city:{
                required: "Please enter your city"
            },
            favcolor:{
                required: "Please enter your favorite color"
            },
            favmovie:{
                required: "Please enter your favorite movie"
            },
            favsong:{
                required: "Please enter your favorite song"
            },
            favactor:{
                required: "Please enter your favorite actor"
            },
            favfood:{
                required: "Please enter your favorite food"
            },
            favactress:{
                required: "Please enter your favorite actress"
            },
            favsinger:{
                required: "Please enter your favorite singer"
            },
            badhabbit:{
                required: "Please enter your bad habit"
            },
            personalitywords:{
                required: "Please enter your personality words"
            },
            hobbies:{
                required: "Please enter your hobbies"
            },
            dreamgoal:{
                required: "Please enter your dream goal"
            },
            biggestfear:{
                required: "Please enter your biggest fear"
            },
            proudestchaievement:{
                required: "Please enter your proudest achievement"
            },
            bestchildhoodmemory:{
                required: "Please enter your best childhood memory"
            },
            funniestincident:{
                required: "Please enter your funniest incident"
            },
            mostembarrassingmoment:{
                required: "Please enter your most embarrassing moment"
            },
            favoritememorytogether:{
                required: "Please enter your favorite memory together"
            },
            adviceforme:{
                required: "Please enter your advice for me"
            },
            hiddentalent:{
                required: "Please enter your hidden talent"
            },
            essentialitem:{
                required: "Please enter your essential item"
            },
            dreamdestination:{
                required: "Please enter your dream destination"
            },
            specialmessage:{
                required: "Please enter your special message"
            }
        }
    });
});
