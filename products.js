
const driver = document.getElementById("driver");
const wood = document.getElementById("wood");
const iron = document.getElementById("iron");
const putter = document.getElementById("putter");

driver.addEventListener("click", function(){
    document.location = "drivers.php"
});
wood.addEventListener("click", function(){
    document.location = "woods.php"
});

iron.addEventListener("click", function(){
    document.location = "irons.php"
});

putter.addEventListener("click", function(){
    document.location = "putters.php"
});

