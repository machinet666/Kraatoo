<div style="display: flex; margin-left: 650px; margin-top: 0px">
    <fieldset id="jobProject">
        <form method="POST" action="../../../../Controller/Client/Project/postNew.php">
            <div>
                <br>
                <h3>Project Title</h3>
                <input type="text" name="title" value="<?php echo $_SESSION['fillUpValueProjectPost']['title']; ?>"> <br>
                <label for="title"> <?php echo $_SESSION['fillUpErrorProjectPost']['title'] ?> </label>
            </div>
            <br>
            <div>
                <h3>Description:</h3>
                <textarea rows="4" cols="50" name="description"><?php echo $_SESSION['fillUpValueProjectPost']['description']; ?></textarea><br>
                <label for="description"> <?php echo $_SESSION['fillUpErrorProjectPost']['description'] ?> </label>

            </div>
            <br>
            <div>
                <h3>Require Skill</h3>
                <input type="text" name="skill" value="<?php echo $_SESSION['fillUpValueProjectPost']['skill']; ?>">
                <label for="description"><?php echo $_SESSION['fillUpErrorProjectPost']['skill'] ?> </label>
            </div>
            <br>
            <div>
                <h3>Complexity</h3>
                <select name="complexity">
                    <option>..Select one...</option>
                    <option value="Simple" <?php if ($_SESSION['fillUpValueProjectPost']['complexity'] == "Simple") {
                                                echo 'selected';
                                            } ?>>Simple</option>
                    <option value="Intermediate" <?php if ($_SESSION['fillUpValueProjectPost']['complexity'] == "Intermediate") {
                                                        echo 'selected';
                                                    } ?>>Intermediate</option>
                    <option value="Complex" <?php if ($_SESSION['fillUpValueProjectPost']['complexity'] == "Complex") {
                                                echo 'selected';
                                            } ?>>Complex</option>
                </select><br>
                <label for="complexity"> <?php echo $_SESSION['fillUpErrorProjectPost']['complexity'] ?> </label>
            </div>
            <br>
            <div>
                <h3>Experience</h3>
                <select name="experience">
                    <option>..Select one...</option>
                    <option value="Beginner" <?php if ($_SESSION['fillUpValueProjectPost']['experience'] == "Beginner") {
                                                    echo 'selected';
                                                } ?>>Beginner</option>
                    <option value="Intermediate" <?php if ($_SESSION['fillUpValueProjectPost']['experience'] == "Intermediate") {
                                                        echo 'selected';
                                                    } ?>>Intermediate</option>
                    <option value="Expert" <?php if ($_SESSION['fillUpValueProjectPost']['experience'] == "Expert") {
                                                echo 'selected';
                                            } ?>>Expert</option>
                </select><br>
                <label for="experience"> <?php echo $_SESSION['fillUpErrorProjectPost']['experience'] ?> </label>
            </div>
            <br>
            <div>

                <h3>Offered Price</h3>
                <input type="text" name="price" value="<?php echo $_SESSION['fillUpValueProjectPost']['price'] ?>">
                <select name='currency'>
                    <option selected>$</option>
                    <option>€</option>
                    <option>£</option>
                </select><br>
                <label for="price"> </label>

            </div>
            <br>
            <div>
                <h3>Payment Type</h3>
                <select name="type">
                    <option>..Select one...</option>
                    <option value="Weekly" <?php if ($_SESSION['fillUpValueProjectPost']['type'] == "Weekly") {
                                                echo 'selected';
                                            } ?>>Weekly</option>
                    <option value="Monthly" <?php if ($_SESSION['fillUpValueProjectPost']['type'] == "Monthly") {
                                                echo 'selected';
                                            } ?>>Monthly</option>
                    <option value="Hourly" <?php if ($_SESSION['fillUpValueProjectPost']['type'] == "Hourly") {
                                                echo 'selected';
                                            } ?>>Hourly</option>
                </select><br>
                <label for="type"> <?php echo $_SESSION['fillUpErrorProjectPost']['type'] ?> </label>
            </div>
            <br>
            <div>
                <h3>Time Period</h3>
                <input type="text" name="time" value="<?php echo $_SESSION['fillUpValueProjectPost']['time']; ?>"><br>
                <label for="time"> <?php echo $_SESSION['fillUpErrorProjectPost']['time'] ?> </label>
            </div>
            <br>
            <div>
                <button id="complete" name="post">Post</button>
            </div>
            <br>
        </form>
    </fieldset>
</div>