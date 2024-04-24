document.querySelector('form').addEventListener('reset', function(event) { // have reset button in html so instructions begin
    if (!confirm('Are you sure you want to reset?')) {  // pop up to confirm with an input by user
      event.preventDefault(); // stops button from doing what it does (clear the inputs of user) if the statement is met
    }
});