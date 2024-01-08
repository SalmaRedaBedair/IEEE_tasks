<?php
define('REQUIRED_FIELD', 'This field is required.');
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST;
    post_data($data, 'username');
    post_data($data, 'email');
    post_data($data, 'password');
    post_data($data, 'confirm_password');
    post_data($data, 'cv_link');

    required_field($errors, $data, 'username');
    required_field($errors, $data, 'email');
    required_field($errors, $data, 'password');
    required_field($errors, $data, 'confirm_password');
    required_field($errors, $data, 'cv_link');

    if (!empty($data['username'])) {
        validate_name($errors, $data, 'username');
    }

    if (!empty($data['email'])) {
        validate_email($errors, $data, 'email');
    }

    if (!empty($data['password']) && !empty($data['confirm_password'])) {
        validate_password($errors, $data, 'password', 'confirm_password');
    }

    if (!empty($data['cv_link'])) {
        validate_cv_link($errors, $data, 'cv_link');
    }
}

function post_data(&$data, $field)
{
    $data[$field] = !empty($data[$field]) ? trim(htmlspecialchars(stripcslashes($data[$field]))) : false;
}

function required_field(&$errors, $data, $field)
{
    if (!$data[$field]) {
        $errors[$field] = REQUIRED_FIELD;
    }
}

function validate_name(&$errors, $data, $field)
{
    $name = $data[$field];
    if (strlen($name) < 6 || strlen($name) > 16) {
        $errors[$field] = 'Username must be between 6 to 16 characters';
    }
}

function validate_email(&$errors, $data, $field)
{
    $email = $data[$field];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[$field] = 'Invalid email format.';
    }
}

function validate_password(&$errors, $data, $passwordField, $confirmField)
{
    $password = $data[$passwordField];
    $confirmPassword = $data[$confirmField];

    if ($password !== $confirmPassword) {
        $errors[$confirmField] = 'Passwords do not match.';
    }

    if (strlen($password) < 6) {
        $errors[$passwordField] = 'Password must be at least 6 characters long.';
    }
}

function validate_cv_link(&$errors, $data, $field)
{
    $cvLink = $data[$field];
    if (!filter_var($cvLink, FILTER_VALIDATE_URL)) {
        $errors[$field] = 'Invalid CV link format.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="username">Username</label>
                    <input type="text" class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>">
                    <?php if (isset($errors['username'])) : ?>
                        <div class="invalid-feedback">
                            <?php echo $errors['username']; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
                    <?php if (isset($errors['email'])) : ?>
                        <div class="invalid-feedback">
                            <?php echo $errors['email']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : ''; ?>" id="password" name="password">
                    <?php if (isset($errors['password'])) : ?>
                        <div class="invalid-feedback">
                            <?php echo $errors['password']; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group col-md-6">
                    <label for="confirm-password">Repeat Password</label>
                    <input type="password" class="form-control <?php echo isset($errors['confirm_password']) ? 'is-invalid' : ''; ?>" id="confirm-password" name="confirm_password">
                    <?php if (isset($errors['confirm_password'])) : ?>
                        <div class="invalid-feedback">
                            <?php echo $errors['confirm_password']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <label for="cv-link">Your CV Link</label>
                <input type="text" class="form-control <?php echo isset($errors['cv_link']) ? 'is-invalid' : ''; ?>" id="cv-link" name="cv_link" value="<?php echo isset($data['cv_link']) ? $data['cv_link'] : ''; ?>">
                <?php if (isset($errors['cv_link'])) : ?>
                    <div class="invalid-feedback">
                        <?php echo $errors['cv_link']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>