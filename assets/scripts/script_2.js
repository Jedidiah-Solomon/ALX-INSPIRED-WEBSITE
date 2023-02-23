// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// Hide and Show the password
function showMe() {
            var myPassword= document.getElementById('pass1');
            if (myPassword.type==="password") {
                myPassword.type="text";
            }
            else {
                myPassword.type = "password";
            }

        }
