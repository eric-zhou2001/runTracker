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
    var oldRunCount = runCount;
    runCount += 3;
    // A little strange, but this path is relative from the .php file. I guess it's because we
    // are calling the function from the .php file, so we must be relative to it.
    $('#run-container').load("phpScripts/loadRuns.php", {
        newRunCount: runCount
    }, function() {
        var newRunCount = $("#run-container > .run").length;
        if (oldRunCount >= newRunCount) {
            event.preventDefault();
            swal({
                title: "No more runs to be displayed!",
                button: "Okay"
            });
            runCount -= 3;
        }
    });
}

// Same as above, but loading less runs.
function loadLessRuns() {
    var newRunCount = runCount - 3;

    if (newRunCount < 0) {
        event.preventDefault();
            swal({
                title: "No more runs to be displayed!",
                button: "Okay"
            });
            return;
    }

    runCount -= 3;
    $('#run-container').load("phpScripts/loadRuns.php", {
        newRunCount: runCount
    });
}

