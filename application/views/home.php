<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
function check_if_exists() {

  var username = $("#username").val();
  $.ajax(
      {
          type:"post",
          url: "http://localhost/Doofenshmirtz/index.php/MainController/check_username",
          data:{'username':username},
          success:function(response)
          {
              //$('#log').html(response);
              if (response == true)
              {
                  $('#msg').html('<span style="color: green;">Username available!</span>');
              }
              else
              {
                  $('#msg').html('<span style="color:red;">Username is Taken!</span>');
              }
          }
      });
}
</script>

<h1><center>Reveal It!</center></h1>
<hr>
<br><br>
<form method="post" action="http://localhost/Doofenshmirtz/index.php/MainController/create_user">
  <div>
    <table cellspacing="10">
      <tr>
          <th>Name</th>
          <td><input type="text" name="name"></td>
      </tr>
      <tr>
          <th>Username</th>
          <td><input type="text" id="username" name="username" onblur="check_if_exists()"></td>
          <td id="msg"></td>
      </tr>
      <tr>
          <th>Password</th>
          <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td><input type="submit" value="Register"></td>
        <td><button>Already registered? Login!</button></td>
      </tr>
    </table>
  </div>
</form>

    <div>
      <form>
        <table cellspacing="10" align="center">
          <tr>
            <th>Username</th>
            <td><input type="text"></td>
          </tr>
          <tr>
              <th>Password</th>
              <td><input type="password"></td>
          </tr>
          <tr>
            <td><input type="submit" value="Login"></td>
            <td><button>New User? Register!</button></td>
          </tr>
        </table>
      </form>
    </div>
  </table>
</form>
