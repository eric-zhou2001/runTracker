document.addEventListener("DOMContentLoaded", () => {
    var target = document.getElementById("v-container");
    var xhr = new XMLHttpRequest();
    xhr.open("GET", 'phpScripts/loadRunsJSON.php', true);
    xhr.onreadystatechange = function () {
        console.log("readyState: " + xhr.readyState);
        if (xhr.readyState == 2) {
            target.innerHTML = "Loading...";
        }
        if (xhr.readyState == 4) {
            target.innerHTML = "";
            var json = JSON.parse(xhr.responseText);
            console.log(json);
            runs = listOfRuns(json);
            visualizeRuns(runs, target);
        }
    }
    xhr.send();
});

function listOfRuns(json) {
    var data = [];
    for (var key in json) {
        if (json.hasOwnProperty(key)) {
            var val = json[key];
            data.push(val);
        }
    }
    console.log(data);
    return data;
}

function visualizeRuns(data, elem) {
    json = 
}