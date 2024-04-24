yes.addEventListener('click', function(e) { // event listener that starts when clicked 

    function pleaseWork() { // mny function
        var title = document.getElementById("preventtitle"); // storing preventtitle data into title
        var textarea = document.getElementById("preventtextarea"); // same as above
        
        if (title.value === "") { // if my preventtitle is empty it will run
            e.preventDefault(); // does not continue the normal action the button should do
        } else if (textarea.value === "") {
            e.preventDefault();
        } else if (textarea.value === "" || title.value === "") {
            e.preventDefault();
        }
    }
    pleaseWork(); // calls the function when the button is clicked on
});