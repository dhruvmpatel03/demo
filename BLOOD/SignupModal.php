<style>
.btn-primary {
 background-color: #dc3545;
 border-color: #dc3545;
}
.btn-primary:hover {
 background-color: #c82333;
 border-color: #c82333;
}
.btn-primary:focus,
.btn-primary.focus {
 box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}
</style>
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" arialabelledby="signupModalLabel"
aria-hidden="true" data-backdrop="static">
 <div class="modal-dialog modal-dialog-centered" role="document">
 <div class="modal-content">
 <div class="modal-header bg-danger text-white">
 <h5 class="modal-title" id="signupModalLabel">Sign up
 </h5>
 <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <form action="/donatetheblood/include/_handleSignup.php" method="post" 
autocomplete="new-password">
 <div class="modal-body">
 <div class="form-group">
 <label for="signupName" class="text-dark">User Name</label>
 <input type="text" class="form-control" id="signupName" name="signupName"
 placeholder="Enter Name" required pattern="[A-Za-z/\s]+"
 title="Only lower and upper case and space" autocomplete="new-password">
 </div>
 <div class="form-group">
 <label for="signupEmail" class="text-dark">User Email</label>
 <input type="text" class="form-control" id="signupEmail" name="signupEmail"
 placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
 title="Please write correct email" autofill="off">
 </div>
 <div class="form-group">
 <label for="signupPhone" class="text-dark">User phone</label>
 <input type="text" class="form-control" id="signupPhone" name="signupPhone"
 aria-describedby="emailHelp" placeholder="Enter Phone No" required 
pattern="^\d{10}$"
 title="10 numeric characters only" maxlength="10">
 </div>
 <div class="form-group">
 <label for="signuppassword" class="text-dark">Password</label>
 <input type="password" class="form-control" id="signuppassword" 
name="signuppassword"
 placeholder="Password" required pattern=".{6,}" title="6 characters minimum">
 </div>
 <div class="form-group">
 <label for="signupcpassword" class="text-dark">Confirm Password</label>
 <input type="password" class="form-control" id="signupcpassword" 
name="signupcpassword"
 placeholder="Confirm Password" required pattern=".{6,}" title="6 characters 
minimum">
 </div>
 <button type="submit" name="Sign_up" class="btn btn-primary btn-block mt-4">Sign 
Up</button>
 </div>
 </form>
 <div class="modal-footer">
 <p class="text-dark">have an account? <a href="#" class="text-danger" 
id="loginLink">Login here</a></p>
 </div>
 </div>
 </div>
</div>
<script>
$(document).ready(function() {
 $('#loginLink').click(function() {
 $('#signupModal').modal('hide');
 $('#loginModal').modal('show');
 });
});
</script>
