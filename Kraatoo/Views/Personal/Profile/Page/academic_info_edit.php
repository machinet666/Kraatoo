<div>
    <h2>Academic Information</h2>
    <form method="post" action="../../../../Controller/Personal/Profile/update_academic_info.php">
        <label for="bachelorDegree">Bachelor Degree:</label>
        <select name="bachelorDegree">
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
            <option value="Others" <?php if ($_SESSION['fillUpValue']['bachelorDegree'] == 'Others') {
                                        echo 'selected';
                                    } ?>>Others</option>
        </select>

        <br><br>

        <label for="masterDegree">Masters Degree:</label>
        <input type="text" name="masterDegree" value="<?php echo $_SESSION['fillUpValue']['masterDegree']; ?>">

        <br><br>

        <label for="specilizedField">Specialized Field:</label>
        <select name="specilizedField">

            <option value="Web Development" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Web Development") {
                                                echo 'selected';
                                            } ?>>Web Development</option>
            <option value="App Development" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "App Development") {
                                                echo 'selected';
                                            } ?>>App Development</option>
            <option value="Cybersecurity" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Cybersecurity") {
                                                echo 'selected';
                                            } ?>>Cybersecurity</option>
            <option value="Artificial Intelligence and Machine Learning" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Artificial Intelligence and Machine Learning") {
                                                                                echo 'selected';
                                                                            } ?>>Artificial Intelligence and Machine Learning</option>
            <option value="Game Development" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Game Development") {
                                                    echo 'selected';
                                                } ?>>Game Development</option>
            <option value="Blockchain" <?php if ($_SESSION['fillUpValue']['specilizedField'] ==  "Blockchain") {
                                            echo 'selected';
                                        } ?>>Blockchain</option>
            <option value="Database Specialist" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Database Specialist") {
                                                    echo 'selected';
                                                } ?>>Database Specialist</option>
            <option value="Cloud Computing" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Cloud Computing") {
                                                echo 'selected';
                                            } ?>>Cloud Computing</option>
            <option value="Graphics Designer" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Graphics Designer") {
                                                    echo 'selected';
                                                } ?>>Graphics Designer</option>
            <option value="UI/UX Designer" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "UI/UX Designer") {
                                                echo 'selected';
                                            } ?>>UI/UX Designer</option>
            <option value="VLSI Design and Microelectronics" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "VLSI Design and Microelectronics") {
                                                                    echo 'selected';
                                                                } ?>>VLSI Design and Microelectronics</option>
            <option value="Robotics and Automation" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Robotics and Automation") {
                                                        echo 'selected';
                                                    } ?>>Robotics and Automation</option>
            <option value="Criminal Law" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Criminal Law") {
                                                echo 'selected';
                                            } ?>>Criminal Law</option>
            <option value="Tax Law" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Tax Law") {
                                        echo 'selected';
                                    } ?>>Tax Law</option>
            <option value="Human Rights Law" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Human Rights Law") {
                                                    echo 'selected';
                                                } ?>>Human Rights Law</option>
            <option value="Marketing" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Marketing") {
                                            echo 'selected';
                                        } ?>>Marketing</option>
            <option value="Financial Analyst" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Financial Analyst") {
                                                    echo 'selected';
                                                } ?>>Financial Analyst</option>
            <option value="Accounting" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Accounting") {
                                            echo 'selected';
                                        } ?>>Accounting</option>
            <option value="Content Writing" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Content Writing") {
                                                echo 'selected';
                                            } ?>>Content Writing</option>
            <option value="Media and Communication Studies" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Media and Communication Studies") {
                                                                echo 'selected';
                                                            } ?>>Media and Communication Studies</option>
            <option value="Others" <?php if ($_SESSION['fillUpValue']['specilizedField'] == "Others") {
                                                                echo 'selected';
                                                            } ?>>Others</option>

        </select>
        <br><br>

        <input type="submit" name="academicInfo" value="Update Information">
    </form>
</div><br>