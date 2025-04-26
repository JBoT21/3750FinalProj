$(document).ready(function() {
    console.log("This is our prototype! In case anyone finds this, we are working on a final project for our class.");
   
});


$("#searchButton").click(function() {
    var searchTerm = $("#searchInput").val();
    alert(searchTerm);
});

$("#homeButton").click(function() {
    document.location = "baseApp.php";
});

$("#productButton").click(function() {
    document.location = "products.php";
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
        document.location = "products.html";
    });
});

