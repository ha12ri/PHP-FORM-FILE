<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM INPUTS</title>
    <!-- <link rel="stylesheet" href="./form-handling.css"> -->
    <style>
        <?php include 'form-handling.css' ?>
    </style>
</head>

<body>
   <?php print_r($_GET); ?>
    <div class="main-box">
        <h2>Your Form Information</h2>
        <div class="data">
            <table>
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Date Of Birth</th>
                        <th>Password</th>
                        <th>Introduction</th>
                        <th>Favourite Color</th>
                        <th>Github Link</th>
                        <th>Gender</th>
                        <th>Programming</th>
                        <th>Rate</th>
                        <th>Time</th>
                        <th>ID</th>
                    </tr>
                </thead>
                <tbody>



                    <tr>
                        <td><?php echo $_GET["fullname"]; ?></td>
                        <td><?php echo $_GET["email"]; ?></td>
                        <td><?php echo $_GET["mobno"]; ?></td>
                        <td><?php echo $_GET["dob"]; ?></td>
                        <td><?php echo $_GET["pass"]; ?></td>
                        <td><?php echo $_GET["intro"]; ?></td>
                        <td><?php echo $_GET["favcolor"]; ?></td>
                        <td><?php echo $_GET["website"];  ?></td>
                        <td><?php echo $_GET["gender"]; ?></td>

                        <td><?php

                            foreach ($_GET['check-box'] as $selected) {
                                echo "<p>" . $selected . "</p>";
                            }

                            ?></td>


                        <td><?php echo $_GET["rateus"]; ?></td>
                        <td><?php echo $_GET["time"]; ?></td>
                        <td><?php echo $_GET["hiddenid"]; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>