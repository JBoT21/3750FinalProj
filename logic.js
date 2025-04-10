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