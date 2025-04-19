@include('user.layouts.head')
@include('user.layouts.Preloader')
@include('user.layouts.header_2')

<style>
    .password-wrapper {
        position: relative;
        display: flex;
        align-items: center;
    }
    .toggle-password {
        position: absolute;
        right: 10px;
        cursor: pointer;
    }
    .dashboard {
        max-width: 400px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        text-align: center;
    }
    .dashboard h2 {
        margin-bottom: 20px;
    }
    .cs_btn {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 10px;
        border: none;
        background: #007BFF;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        text-decoration: none;
    }
    .cs_btn:hover {
        background: #0056b3;
    }
</style>


<div class="dashboard">
    <h2>Welcome, <?= htmlspecialchars($user['username']); ?></h2>
    <p>Email: <?= htmlspecialchars($user['email']); ?></p>

    <form method="POST" onsubmit="return validatePassword()">
        <label>New Password</label>
        <div class="password-wrapper">
            <input type="password" name="new_password" id="new_password" required>
            <span class="toggle-password" onclick="togglePassword('new_password')">👁️</span>
        </div>

        <label>Confirm Password</label>
        <div class="password-wrapper">
            <input type="password" id="confirm_password" required>
            <span class="toggle-password" onclick="togglePassword('confirm_password')">👁️</span>
        </div>
        <small id="passwordError" style="color: red;"></small>

        <button type="submit" name="update_password" class="cs_btn">Update Password</button>
    </form>

    <a href="logout.php" class="cs_btn">Logout</a>
</div>

<script>
function validatePassword() {
    var newPassword = document.getElementById("new_password").value;
    var confirmPassword = document.getElementById("confirm_password").value;

    if (newPassword !== confirmPassword) {
        document.getElementById("passwordError").innerText = "Passwords do not match!";
        return false;
    } else {
        document.getElementById("passwordError").innerText = "";
    }

    return true;
}

function togglePassword(fieldId) {
    var field = document.getElementById(fieldId);
    field.type = field.type === "password" ? "text" : "password";
}
</script>


@include('user.layouts.footer')
@include('user.layouts.script')