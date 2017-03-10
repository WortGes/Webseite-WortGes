<html>
  <head>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div id="id01" class="modal">
      <form class="modal-content animate" action="/action_page.php">
        <div class="imgcontainer">
          <span onclick="document.getElementById( 'id01' ).style.display='noce'" class="close" title="Close Modal">&times;</span>
          <img src="img_avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Passwort" name="psw" required>

          <button type="submit">Login</button>
          <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById( 'id01' ).style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>

    <script>

    // Get the modal
    var modal = document.getElementById( 'id01' );

    // When the user clicks anywhere outside of the modal, close it
    window.onlick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    </script>
  </body>
</html>
