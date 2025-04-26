if(window.location.pathname.endsWith("products.php")){
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
}


document.addEventListener("DOMContentLoaded", function () {
	const rem_btns = document.querySelectorAll(".remove-btn");

	rem_btns.forEach(button => {
        button.addEventListener("click", function (){
            const itemName = button.dataset.itemName;
            fetch("removeItem.php", {
                method: "POST",
				headers: {
					"Content-Type": "application/json"
				},
				body: JSON.stringify({ itemName })
            })
            .then(res => res.text())
				.then(data => {
					// Optional: remove the movie from the page
					button.parentElement.remove();
                    location.reload();
				})
				.catch(err => {
					console.error("Error removing item:", err);
				});
        });
    });

    const checkOut = document.getElementById("checkOut");
    checkOut.addEventListener("click", function (){
        const user = checkOut.dataset.user;
        fetch("checkOut.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ user })
        })
        const rem_btns = document.querySelectorAll(".remove-btn");

	    rem_btns.forEach(button => {
            button.parentElement.remove();
        });
        location.reload();
    });
});


