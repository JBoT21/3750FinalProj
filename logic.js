$(document).ready(function() {
    console.log("This is our prototype! In case anyone finds this, we are working on a final project for our class.");
   
});


$("#searchButton").click(function() {
    var searchTerm = $("#searchInput").val();
    alert(searchTerm);
});

$("#homeButton").click(function() {
    alert("Home button clicked!");
});

$("#productButton").click(function() {
    alert("Product button clicked!");
});

$("#contactButton").click(function() {
    alert("Contact button clicked!");
});
$("#aboutButton").click(function() {
    alert("About button clicked!");
});



$(document).ready(function() { //Work on mysql to input into db
    $("#login").submit(function(event) {
        event.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();
        alert("Username: " + username + "\nPassword: " + password);
    });
});

async function submitUser(action) {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (!username || !password) {
        document.getElementById("loginMessage").textContent = "Please fill in both fields.";
        return;
    }
    const formData = new FormData();
    formData.append("username", username);
    formData.append("password", password);
    formData.append("action", action); // "register" or "login"

    const response = await fetch("login.php", {
        method: "POST",
        body: formData
    });
    const result = await response.text();
    document.getElementById("loginMessage").textContent = result;
    document.getElementById("login-status").innerText = "Welcome, " + document.getElementById("username").value + "!";

}