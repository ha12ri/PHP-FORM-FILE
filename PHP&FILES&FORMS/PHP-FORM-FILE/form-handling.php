<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling in PHP</title>
    <!-- <link rel="stylesheet" href="./form-handling.css"> -->
    <style>
        <?php include 'form-handling.css' ?>
    </style>
</head>

<body>
    <div class="main-box-form">
        <h2>(PHP) Form Handling</h2>

        <form action="./displaying-data.php" method="GET" id="form">

            <div class="rectangle-box">
                <label for="fullname">Your Full Name</label>
                <input type="text" name="fullname" id="fullname" placeholder="Enter Your Full Name Here" value="" required>
            </div>

            <div class="rectangle-box">
                <label for="email">Your Email Id</label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email Id Here" value="" required>
            </div>


            <div class="rectangle-box">
                <label for="mobno">Your Mobile Number</label>
                <input type="tel" name="mobno" id="mobno" placeholder="Enter Your Mobile Number Here" value="" required>
            </div>

            <div class="rectangle-box">
                <label for="dob">Your Date of Birth</label>
                <input type="date" name="dob" id="dob" value="" required>
            </div>

            <div class="rectangle-box">
                <label for="pass">Enter The Password</label>
                <input type="password" name="pass" id="pass" placeholder="Use Strong Passwords Only" value="" required>
            </div>

            <div class="rectangle-box">
                <label for="Intro">Write Something About Yourself</label>
                <textarea name="intro" id="Intro" placeholder="Introduce Yourself here" value="" required></textarea>
            </div>

            <div class="rectangle-box">
                <label for="favcolor">Select Your Favourite Color</label>
                <select name="favcolor" id="favcolor" required>
                    <option value="Any Other">Any Other</option>
                    <option value="Red">Red </option>
                    <option value="Green">Green</option>
                    <option value="Blue"> Blue </option>
                    <option value="White">White</option>
                    <option value="Black">Black</option>
                </select>
            </div>

            <div class="rectangle-box">
                <label for="website">Enter Your Github Profile Link</label>
                <input type="url" name="website" id="website" placeholder="Paste Your Github url Here" value="" required>
            </div>

            <div class="rectangle-box">
                <label for="gender">Select Your Gender</label>

                <div class="options">
                    <label for="Male">Male</label>
                    <input type="radio" name="gender" id="Male" value="Male" required>
                    <label for="Female">Female</label>
                    <input type="radio" name="gender" id="Female" value="Female" required>
                </div>

            </div>
            <div class="rectangle-box">
                <label for="check-box">Programming Languages You Know</label>

                <div class="options">

                    <label for="check-box-cpp">C++</label>
                    <input type="checkbox" name="check-box[]" id="check-box-cpp" value="C++">

                    <label for="check-box-python">Python</label>
                    <input type="checkbox" name="check-box[]" id="check-box-python" value="Python">

                    <label for="check-box-java">Java</label>
                    <input type="checkbox" name="check-box[]" id="check-box-java" value="Java">
                </div>

            </div>

            <div class="rectangle-box">
                <label for="rateus">Give us Rating (0-10)</label>
                <input type="range" name="rateus" id="rateus" value="" max=10 min=0 required>
            </div>

            <div class="rectangle-box">
                <label for="time">Current Time</label>
                <input type="time" name="time" id="time" value="" required>
            </div>


            <div class="rectangle-box">
                <label for="hiddenfield">Your Hidden Id</label>
                <input type="hidden" name="hiddenid" id="hiddenid" value="239" required>
            </div>

            <div class="rectangle-box">
                <input type="submit" name="submit" id="submit" value="Submit" style="cursor:pointer;">
            </div>

        </form>

    </div>

</body>

</html>