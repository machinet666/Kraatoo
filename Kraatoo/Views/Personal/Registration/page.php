<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Registration</title>
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <header>
        <h1> Kraatoo </h1>
        <div class="sign">
            <p>already have an account? <br> <a href="../../Log In/login.php">Sign in </a></p>
        </div>
    </header>
    <br><br>
    <main>
        <article>
            Personal Profile Registration
        </article><br><br>
        <fieldset>
            <form method="POST" action="../../../Controller/Personal/register.php">
                <table>
                    <tr>
                        <td>First Name</td>
                        <td>
                            <input type="text" name="firstname" value="<?php echo $_SESSION['fillUpValue']['firstname']; ?>"><br>
                            <label for="firstname"> <?php echo $_SESSION['fillUpError']['firstname'] ?> </label>
                        </td>
                        <td>Last Name</td>
                        <td>
                            <input type="text" name="lastname" value="<?php echo $_SESSION['fillUpValue']['lastname']; ?>"><br>
                            <label for="lastname"> <?php echo $_SESSION['fillUpError']['lastname'] ?> </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>
                            <input type="date" name="dateofbirth" value="<?php echo $_SESSION['fillUpValue']['dateofbirth']; ?>"><br>
                            <label for="dateofbirth"> <?php echo $_SESSION['fillUpError']['dateofbirth'] ?> </label>
                        </td>
                        <td>Email</td>
                        <td>
                            <input type="text" name="email" placeholder="ex. abcd@gmail.com" value="<?php echo $_SESSION['fillUpValue']['email']; ?>"><br>
                            <label for="email"> <?php echo $_SESSION['fillUpError']['email'].$_SESSION['fillUpError']['emailAvailibility'] ?> </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>
                            <textarea name="address" class="address" placeholder="Block , Road number,  House number "><?php echo $_SESSION['fillUpValue']['address']; ?></textarea><br>
                            <label for="address"> <?php echo $_SESSION['fillUpError']['address'] ?> </label>
                        </td>
                        <td>Phone Number</td>
                        <td>
                            <input type="text" name="phonenumber" value="<?php echo $_SESSION['fillUpValue']['phonenumber']; ?>"><br>
                            <label for="phonenumber"> <?php echo $_SESSION['fillUpError']['phonenumber'] ?> </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Bachelor Degree</td>
                        <td>
                            <select name="bachelorDegree">
                                <option value="" disabled selected>Select one</option>
                                <option value="Computer Science and Engineering (CSE)" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == 'Computer Science and Engineering (CSE)') {
                                                                                            echo 'selected';
                                                                                        } ?>>Computer Science and Engineering (CSE)</option>
                                <option value="Bachelor of Business Administration (BBA)" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == 'Bachelor of Business Administration (BBA)') {
                                                                                                echo 'selected';
                                                                                            } ?>>Bachelor of Business Administration (BBA)</option>
                                <option value="Electrical and Electronic Engineering (EEE)" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == "Electrical and Electronic Engineering (EEE)") {
                                                                                                echo 'selected';
                                                                                            } ?>>Electrical and Electronic Engineering (EEE)</option>
                                <option value="Law" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == "Law") {
                                                        echo 'selected';
                                                    } ?>>Law</option>
                                <option value="Mechanical Engineering (ME)" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == "Mechanical Engineering (ME)") {
                                                                                echo 'selected';
                                                                            } ?>>Mechanical Engineering (ME)</option>
                                <option value="Civil Engineering (CE)" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == "Civil Engineering (CE)") {
                                                                            echo 'selected';
                                                                        } ?>>Civil Engineering (CE)</option>
                                <option value="Architecture" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == "Architecture") {
                                                                    echo 'selected';
                                                                } ?>>Architecture</option>
                                <option value="Psychology" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == "Psychology") {
                                                                echo 'selected';
                                                            } ?>>Psychology</option>
                                <option value="Biology" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == "Biology") {
                                                            echo 'selected';
                                                        } ?>>Biology</option>
                                <option value="Mathematics" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == "Mathematics") {
                                                                echo 'selected';
                                                            } ?>>Mathematics</option>
                                <option value="Chemistry" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == "Chemistry") {
                                                                echo 'selected';
                                                            } ?>>Chemistry</option>
                                <option value="Physics" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == "Physics") {
                                                            echo 'selected';
                                                        } ?>>Physics</option>
                                <option value="Nursing" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == 'Nursing') {
                                                            echo 'selected';
                                                        } ?>>Nursing</option>
                                <option value="Economics" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == 'Economics') {
                                                                echo 'selected';
                                                            } ?>>Economics</option>
                                <option value="Sociology" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == 'Sociology') {
                                                                echo 'selected';
                                                            } ?>>Sociology</option>
                                <option value="English Literature" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == "English Literature") {
                                                                        echo 'selected';
                                                                    } ?>>English Literature</option>
                                <option value="History" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == 'History') {
                                                            echo 'selected';
                                                        } ?>>History</option>
                            </select>
                            <br>
                            <label for="bachelorDegree"> <?php echo $_SESSION['fillUpError']['bachelorDegree'] ?> </label>
                        </td>
                        <td>Masters Degree (if any)</td>
                        <td><input type="text" name="mastersDegree" placeholder="(Optional)" value="<?php echo $_SESSION['fillUpValue']['mastersDegree']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Preferred Work Position</td>
                        <td>
                            <input type="text" name="preferredworkposition" value="<?php echo $_SESSION['fillUpValue']['preferredworkposition']; ?>"><br>
                            <label for="preferredworkposition"> <?php echo $_SESSION['fillUpError']['preferredworkposition'] ?> </label>
                        </td>
                        <td>Specialized Field</td>
                        <td>
                            <select name="specializedfield">
                                <option value="" disabled selected>...Select one...</option>
                                <option value="Web Development" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Web Development") {
                                                                    echo 'selected';
                                                                } ?>>Web Development</option>
                                <option value="App Development" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "App Development") {
                                                                    echo 'selected';
                                                                } ?>>App Development</option>
                                <option value="Cybersecurity" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Cybersecurity") {
                                                                    echo 'selected';
                                                                } ?>>Cybersecurity</option>
                                <option value="Artificial Intelligence and Machine Learning" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Artificial Intelligence and Machine Learning") {
                                                                                                    echo 'selected';
                                                                                                } ?>>Artificial Intelligence and Machine Learning</option>
                                <option value="Game Development" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Game Development") {
                                                                        echo 'selected';
                                                                    } ?>>Game Development</option>
                                <option value="Blockchain" <?php if ($_SESSION['fillUpValue']['specializedfield'] ==  "Blockchain") {
                                                                echo 'selected';
                                                            } ?>>Blockchain</option>
                                <option value="Database Specialist" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Database Specialist") {
                                                                        echo 'selected';
                                                                    } ?>>Database Specialist</option>
                                <option value="Cloud Computing" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Cloud Computing") {
                                                                    echo 'selected';
                                                                } ?>>Cloud Computing</option>
                                <option value="Graphics Designer" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Graphics Designer") {
                                                                        echo 'selected';
                                                                    } ?>>Graphics Designer</option>
                                <option value="UI/UX Designer" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "UI/UX Designer") {
                                                                    echo 'selected';
                                                                } ?>>UI/UX Designer</option>
                                <option value="VLSI Design and Microelectronics" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "VLSI Design and Microelectronics") {
                                                                                        echo 'selected';
                                                                                    } ?>>VLSI Design and Microelectronics</option>
                                <option value="Robotics and Automation" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Robotics and Automation") {
                                                                            echo 'selected';
                                                                        } ?>>Robotics and Automation</option>
                                <option value="Criminal Law" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Criminal Law") {
                                                                    echo 'selected';
                                                                } ?>>Criminal Law</option>
                                <option value="Tax Law" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Tax Law") {
                                                            echo 'selected';
                                                        } ?>>Tax Law</option>
                                <option value="Human Rights Law" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Human Rights Law") {
                                                                        echo 'selected';
                                                                    } ?>>Human Rights Law</option>
                                <option value="Marketing" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Marketing") {
                                                                echo 'selected';
                                                            } ?>>Marketing</option>
                                <option value="Financial Analyst" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Financial Analyst") {
                                                                        echo 'selected';
                                                                    } ?>>Financial Analyst</option>
                                <option value="Accounting" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Accounting") {
                                                                echo 'selected';
                                                            } ?>>Accounting</option>
                                <option value="Content Writing" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Content Writing") {
                                                                    echo 'selected';
                                                                } ?>>Content Writing</option>
                                <option value="Media and Communication Studies" <?php if ($_SESSION['fillUpValue']['specializedfield'] == "Media and Communication Studies") {
                                                                                    echo 'selected';
                                                                                } ?>>Media and Communication Studies</option>
                            </select>
                            <br>
                            <label for="specializedfield"> <?php echo $_SESSION['fillUpError']['specializedfield'] ?> </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td class="gender-field">
                            <input type="radio" name="gender" value="male" <?php if ($_SESSION['fillUpValue']['gender'] == 'male') {
                                                                                echo "checked";
                                                                            } ?>>
                            <label for="male">Male</label>
                            <input type="radio" name="gender" value="female" <?php if ($_SESSION['fillUpValue']['gender'] == 'female') {
                                                                                    echo "checked";
                                                                                } ?>>
                            <label for="female">Female</label>
                            <input type="radio" name="gender" value="Others" <?php if ($_SESSION['fillUpValue']['gender'] == 'Others') {
                                                                                    echo "checked";
                                                                                } ?>>
                            <label for="others">Others</label><br>
                            <label for="gender"> <?php echo $_SESSION['fillUpError']['gender'] ?> </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="text" name="password" value="<?php echo $_SESSION['fillUpValue']['password']; ?>"><br>
                            <label for="password"> <?php echo $_SESSION['fillUpError']['password'] ?> </label>
                        </td>
                        <td>Retype Password</td>
                        <td>
                            <input type="text" name="retypepassword" value="<?php echo $_SESSION['fillUpValue']['retypepassword']; ?>"><br>
                            <label for="retypepassword"> <?php echo $_SESSION['passwordmatch']; ?> </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <button type="submit" name="register">REGISTER</button>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </main>

</body>

</html>
<?php
foreach ($_SESSION['fillUpValue'] as $key => $value) 
{
    $_SESSION['fillUpValue'][$key] = '';
}
foreach ($_SESSION['fillUpError'] as $key => $value) 
{
    $_SESSION['fillUpError'][$key] = '';
}


$_SESSION['fillUpError']['emailAvailibility'] = '';
$_SESSION['passwordmatch']= '';
?>