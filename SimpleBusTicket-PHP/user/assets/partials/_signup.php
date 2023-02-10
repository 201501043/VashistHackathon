<!-- Show these admin pages only when the admin is logged in -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login As Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../assets/partials/_handleSignup.php" method="POST">
                            <div>
                                <input type="text" name="firstName" placeholder="First Name*">
                                <input type="text" name="lastName" placeholder="Last Name*" required>
                            </div>
                            <div>
                                <input type="text" name="username" placeholder="Username*" required>
                            </div>
                            <div>
                                <input id="password" type="password" name="password" placeholder="Password*" required>
                                <span id="passwordErr" class="error"></span>
                            </div>
                            <div>
                                <input id="confPassword" type="password" name="confPassword" placeholder="Confirm Password*" required>
                                <span id="confPassErr" class="error"></span>
                            </div>
                            <button id="signup-btn" type="submit" name="signup">PROCEED</button>
                        </form>
      </div>
      <div class="modal-footer">
        <!-- Add anything here in the future -->
      </div>
    </div>
  </div>
</div>
