// Initial error checking to see if the user entered in non-empty strings.
function checkFormInputs() {
    if ($("#location").val() == "" ||
        $("#day").val() == "" ||
        $("#run-count").val() == "") {
            event.preventDefault();
            swal({
                title: "Invalid Inputs",
                text: "Please provide valid inputs",
                button: "Okay"
            });
        };
}

// Loads more runs when requested by the user
var runCount = 3;
function loadMoreRuns() {
    runCount += 3;
    // A little strange, but this path is relative from the .php file. I guess it's because we
    // are calling the function from the .php file, so we must be relative to it.
    $('#run-container').load("phpScripts/loadMoreRuns.php", {
        newRunCount: runCount
    });
}

// This is a bit unfortunate since I'm a broke college student who can't afford to give money
// to Google for their APIs :(
// function visualizeData(loc) {
//     var geoLoc;
//     var geocoder = require('geocoder');
//     geocoder.geocode(loc, function (err, data) {
//         geoLoc = data;
//         console.log(data);
//     })
//     console.log(geoLoc);
// }

// visualizeData("Atlanta, GA");