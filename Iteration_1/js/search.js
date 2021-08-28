window.onload = function() {
    var searchBox = document.getElementById('searchBox');
    // var searchIcon = document.getElementById('searchIcon');
    
    // searchIcon.onclick = function() {
    //     searchBox.classList.add("active");
    // }

    inputFocus = function() {
        document.getElementById("searchbox").focus();
    }

    function checkFocus() {
        const check = document.querySelector("#searchbox");
        // console.log(check === document.activeElement);
        
        if(check === document.activeElement) {  // If it is focused!
            searchBox.classList.add("active");
        } else {
            // $('#searchbox').val('');
            searchBox.classList.remove("active");
        }
    }

    // Check Focus every 300 millisecond
    setInterval(checkFocus, 300);
}