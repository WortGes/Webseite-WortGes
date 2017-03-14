<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css\signup.css">
</head>

<body>

  <div id="id01" class="modal">
    <span oneclick="document.getElementByID('id01').style.display='none'" class="close"
    title="Close Modal">x</span>
      <form class="modal-content animate" action="/action_page.php">
        <div class="container">
          <label><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <label><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
          <input type="checkbox" checked="checked"> Remember me
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

          <div class="clearfix">
            <button type="button"
            oneclick="document.getElementByID('id01').style.display='none'"
            class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </div>

<script>
  // Get the Modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.oneclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>

</body>
</html>
