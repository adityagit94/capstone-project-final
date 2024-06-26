<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="container">
        <div class="image">
            <img src="background5.jpg" alt="">
        </div>
        <div class="entry">
            <div class="details">
                <h1>Welcome to <span class="name">Worker</span></h1>
                <p>We provide workers and household services at your doorstep.</p>
                <form action="includes/formhandler.inc.php" method="POST" id="signup-form">
                    <div class="game">
                        <label for="name">Full Name</label>
                        <div class="enter">
                            <i class="fas fa-user" ></i>
                            <input type="text" id="name" name="name" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="game">
                        <label for="email">Email</label>
                        <div class="enter">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
                        </div>
                    </div>
                    <div class="game">
                        <label for="password">Password</label>
                        <div class="enter">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="game">
                        <label for="confirm-password">Confirm Password</label>
                        <div class="enter">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="choose">
                        <label for="role">Preffered Role</label>
                        <div class="type">
                            <select id="role" name="role" required>
                                <option value="Worker">Worker</option>
                                <option value="Hire">Hire</option>
                            </select>
                        </div>
                    </div>
                    <div class="game">
                    <label for="pincode">Pincode:</label>
                    <input type="text" id="pincode" name="pincode" placeholder="Enter your pincode" maxlength="6" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                        </div>
                    </div>
                    <button type="submit" class="register">Register</button>
                    <a href="login.php">
                        <button type="button" class="login">Login</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
    <?php  ?>
    <script>
       const pincodeInput = document.getElementById('pincode');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm-password');
const form = document.getElementById('signup-form');
const errorMessages = {
  pincode: 'Please enter a valid 6-digit pincode',
  passwordMismatch: 'Password and Confirm Password do not match',
  passwordLength: 'Password must be between 8 and 16 characters',
};

pincodeInput.addEventListener('input', () => {
  const pincode = pincodeInput.value;
  if (pincode.length < 6 || pincode.length > 6) {
    pincodeInput.setCustomValidity(errorMessages.pincode);
    pincodeInput.reportValidity();
  } else {
    pincodeInput.setCustomValidity('');
  }
});

passwordInput.addEventListener('input', () => {
  const password = passwordInput.value;
  if (password.length < 8 || password.length > 16) {
    passwordInput.setCustomValidity(errorMessages.passwordLength);
    passwordInput.reportValidity();
  } else {
    passwordInput.setCustomValidity('');
  }
});

form.addEventListener('submit', (e) => {
  if (passwordInput.value!== confirmPasswordInput.value) {
    e.preventDefault();
    alert(errorMessages.passwordMismatch);
  }
  if (pincodeInput.value.length!== 6) {
    e.preventDefault();
    alert(errorMessages.pincode);
  }
  if (passwordInput.value.length < 8 || passwordInput.value.length > 16) {
    e.preventDefault();
    alert(errorMessages.passwordLength);
  }
});
    </script>
</body>
</html>