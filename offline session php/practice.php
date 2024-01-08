<?php
// $name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_REQUEST['name'])&&!empty($_REQUEST['name'])) {
        $name = validate_data($_REQUEST['name']);

        if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            $name = "";
            $nameErr = "Name must only contain letters and spaces.";
        }
    } else {
        $name = "";
        $nameErr = "Please enter the name.";
    }
    if (isset($_REQUEST['email'])&&!empty($_REQUEST['email'])) {
        $email = validate_data($_REQUEST['email']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = "";
            $emailErr = "Invalid email format.";
        }
    } else {
        $email = "";
        $emailErr = "Please enter the email.";
    }
    if (isset($_REQUEST['website'])&&!empty($_REQUEST['website'])) {
        $website = validate_data($_REQUEST['website']);

        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $website = "";
            $websiteErr = "Invalid website URL.";
        }
    } else {
        $website = "";
    }
    if (isset($_REQUEST['comment'])&&!empty($_REQUEST['comment'])) {
        $comment = validate_data($_REQUEST['comment']);
    } else {
        $comment = "";
    }
    if (isset($_REQUEST['gender'])&&!empty($_REQUEST['gender'])) {
        $gender = validate_data($_REQUEST['gender']);
    } else {
        $gender = "";
        $genderErr = "please enter the gender";
    }
} else {
    $name = $email = $website = $comment = $gender = "";
}
function validate_data($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
?>

<head>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">*
        <?php echo $nameErr; ?>
    </span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">*
        <?php echo $emailErr; ?>
    </span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website; ?>">
    <span class="error">
        <?php echo $websiteErr; ?>
    </span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female")
        echo "checked"; ?>
        value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male")
        echo "checked"; ?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other")
        echo "checked"; ?>
        value="other">Other
    <span class="error">*
        <?php echo $genderErr; ?>
    </span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_REQUEST['name']))
    echo $_REQUEST['name'] . "<br>";
if (isset($_REQUEST['email']))
    echo $_REQUEST['email'] . "<br>";
if (isset($_REQUEST['website']))
    echo $_REQUEST['website'] . "<br>";
if (isset($_REQUEST['comment']))
    echo $_REQUEST['comment'] . "<br>";
if (isset($_REQUEST['gender']))
    echo $_REQUEST['gender'] . "<br>";
unset($_REQUEST);
?>