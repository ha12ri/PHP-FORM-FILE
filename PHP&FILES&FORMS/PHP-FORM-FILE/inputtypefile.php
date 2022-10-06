<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,body{
        
            width: 100vw;
            height: 100vh;
            position: relative;
            background: no-repeat url('../images/back.jpg') center;
            background-size:cover;
            display: flex; align-items: center; justify-content: center;
            
        }
        #fform {
            background-color: white;
            width: 36rem;
            padding: 1rem;
            font-size: 1rem;
            color: black;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            
        }

        #submit {
            padding: 0.5rem 2rem;
            background-color: blueviolet;
            color: white;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border: 0px;
            border-radius: 0.1rem;
        }

        #file {
            font-size: 1rem;
        }

        #popup {
            position: absolute;
            width: 30vw;
            height: 20vw;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border-radius: 0.5rem;
            color: black;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;

        }

        #popup a {
            color: white;
            background-color: green;
            padding: 0.5rem 2rem;
            border: 0px;
            border-radius: 0.2rem;
            font-size: 1.5rem;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-decoration: none;
            margin-top: 1rem;

        }

        #submit {
            cursor: pointer;
        }

        .icons {
            width: 100px;
            height: auto;
            margin-bottom: 1rem;
          
        }

        input::file-selector-button {
            
            font-size: 1rem;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color:white;
            padding: 0.5em;
            border: 0px;
            border-radius: 3px;
            cursor: pointer;
            background-color: blueviolet;
        }
        
    
    </style>
</head>

<body>
    <?php


if (isset($_FILES["file"])) {

        $filename = $_FILES['file']['name'];
        $filetype = $_FILES['file']['type'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        // print_r($_FILES);

        if (move_uploaded_file($tmp_name, "../uploadss/" . $filename)) {
            echo "<div id='popup'> <img class='icons' src='../images/correct.png'>File Uploaded Successfully! <br> <a href='inputtypefile.php'> OK </a> </div>";
        } else {

            echo "<div id='popup' ><img class='icons' src='../images/decline.png'> Something Went Wrong! <br> <a style='background-color:crimson;' href='inputtypefile.php'> Try Again </a> </div>";
        }
    }


    ?>
    <form action="" name="fileform" id="fform" method="POST" enctype="multipart/form-data">
        <lable> Share a pdf here </lable>

         <!-- 
            accept = ".pdf,.gif,.jpg,.png,.doc" etc
            accept = "audio/*,video/*,image/*" etc
         -->
        <input type="file" name="file" id="file" accept=".pdf,.gif,.jpg,.png,.doc,.ppt,.pptx">
        <input type="submit" value="Upload File" name="submit" id="submit">
    </form>



</body>

</html>