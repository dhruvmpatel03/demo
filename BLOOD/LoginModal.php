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
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" arialabelledby="loginModalLabel"
 aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
 <div class="modal-content">
 <div class="modal-header bg-danger text-white">
 <h5 class="modal-title" id="loginModalLabel">Login </h5>
 <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <div id="alertContainer"></div>
 <form action="/donatetheblood/include/_handleLogin.php" method="post">
 <div class="modal-body">
 <div class="form-group">
 <label for="loginEmail" class="text-dark">User Email</label>
 <input type="text" class="form-control" id="loginEmail" name="loginEmail"
 placeholder="Enter your username" required pattern="[a-z0-9._%+-]+@[a-z0-9.-
]+\.[a-z]{2,4}$"
 title="Please write correct email">
 </div>
 <div class="form-group">
 <label for="loginpassword" class="text-dark">Password</label>
 <input type="password" class="form-control" id="loginpassword" 
name="loginpassword"
 placeholder="Enter your password" required pattern=".{6,}">
 </div>
 <div class="form-check">
 <input type="checkbox" class="form-check-input" id="exampleCheck1">
 <label class="form-check-label text-dark" for="exampleCheck1">Remember 
 me</label>
 </div>
 <button type="submit" class="btn btn-primary btn-block mt-4" 
name="login">Login</button>
 </div>
 </form>
 <div class="modal-footer">
 <p class="text-dark">Don't have an account? <a href="#" class="text-danger" 
id="signupLink">signup
 here</a></p>
 </div>
 </div>
 </div>
</div>
<script>
$(document).ready(function() {
 $('#signupLink').click(function() {
 // $('#signupModal').modal('hide');
 $('#loginModal').modal('hide');
 $('#signupModal').modal('show');
 });
});
</script>