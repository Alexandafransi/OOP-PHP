<?php 
    // include'action.php';
    // include'databaseAcc.php';
 ?>
<html>


<head>

    <title>This is my first php OOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- <style>
        body {
            background-color: #16181C;
        }
    </style> -->


    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #152029;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin-top: 2%;
            margin-left: 1%;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"
        style="margin-top:0.3%; background-color: whitesmoke!important;">
        <a class="navbar-brand" href="#">IRABU SYSTEM LTD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="margin-left: 7%;">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" style="margin-left: 6%;">
                    <a class="nav-link" href="email.php">Email</a>
                </li>
                <li class="nav-item" style="margin-left: 6%;">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item" style="margin-left: 6%;">
                    <a class="nav-link disabled" href="#">AboutUs</a>
                </li>
            </ul>
        </div>
    </nav>


        <?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('.');
$app = new \Twig\Environment($loader, [
    'cache' => '.',
]);

            if (isset($_POST['save'])) {
                


// Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 25))
              ->setUsername('3f2da0ef6cf8e7')
              ->setPassword('f88a728f7408ec')
            ;

            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);
            
           // $message_content = array('interested' => $_POST['interested'], 'name' => $_POST['name'],'username' => $_POST['username'],'company' => $_POST['company'],'city' => $_POST['city'])
            // Create a message
            $message_content = $app->render('email.twig',
            array('interested' => $_POST['interested'], 
                'name' => $_POST['name'], 
                'username' => $_POST['username'],
                'company' => $_POST['company'],
                'city' => $_POST['city'],
                'zipcode' => $_POST['zipcode'],
                'country' => $_POST['country'],
                'subject' => $_POST['subject'],
                'email' => $_POST['email']
            ));

           $message = (new Swift_Message($_POST['name']))
              ->setFrom(['malechafrancis45@gmail.com' => 'Learn web coding'])
              ->setTo([$_POST['email']])
              ->setBody($message_content,'text/html');

            // Send the message
           if($mailer->send($message)){
            echo "successful sent";
            $_SESSION['interested']=$_POST['interested'];
            $_SESSION['name']=$_POST['name'];
            $_SESSION['username']=$_POST['username'];
            $_SESSION['email']=$_POST['email'];
            $_SESSION['company']=$_POST['company'];
            $_SESSION['city']=$_POST['city'];
            $_SESSION['zipcode']=$_POST['zipcode'];
            $_SESSION['country']=$_POST['country'];
            $_SESSION['subject']=$_POST['subject'];
            
            echo $_SESSION['interested'];
           }
           else{
            echo "failed to send";
           }
        }
        ?>
    <div class="container" style="margin-top:2%;height: 85%;">
        <form action="" method="POST" enctype="multipart/form-data">

            <!-- <div class="row"> -->
            <div class="col-75" style="width: 100%!important;">
                <select id="interensted" name="interested" class="form-control" required>
                    <option value="">I AM INTERESTED IN</option>
                    <option value="Software Development">Software Development</option>
                    <option value="System Administration">System Administration</option>
                    <option value="Network Engineering">Network Engineering</option>
                    <option value="Hardware Hacking">Hardware Hacking</option>
                    <option value="IT Security">IT Security</option>
                    <option value="Entrepreneurship">Entrepreneurship & Leadership</option>
                </select>
            </div>
            <!-- </div> -->


            <div class="col-75" style="width: 45%;position: relative;float: left;margin-top: 2%;" >
                <input type="text" id="fname" name="name" placeholder="Name.." class="form-control">
            </div>


            <div class="col-75" style="width: 45%;position: relative;float:right;margin-top: 2%;">
                <input type="text" id="lname" name="username" placeholder="Username.." class="form-control">
            </div>

            <div class="col-75" style="width: 45%;position: relative;float: left;margin-top: 2%;">
                <input type="email" id="email" name="email" placeholder="Email.." class="form-control" required>
            </div>

            <div class="col-75" style="width: 45%;position: relative;float:right;margin-top: 2%;">
                <input type="text" id="company" name="company" placeholder="Company.." class="form-control">
            </div>

            <div class="col-75" style="width: 45%;position: relative;float: left;margin-top: 2%;">
                <input type="text" id="city" name="city" placeholder="City.." class="form-control">
            </div>

            <div class="col-75" style="width: 45%;position: relative;float:right;margin-top: 2%;">
                <input type="number" id="mobile" name="mobile" placeholder="Mobile.." class="form-control">
            </div>


            <div class="col-75" style="width: 45%;position: relative;float: left;margin-top: 2%;">
                <input type="text" id="zipcode" name="zipcode" placeholder="Zipcode.." class="form-control">
            </div>

            <div class="col-75" style="width: 45%;position: relative;float:right;margin-top: 2%;">
                <select id="interensted" name="country" class="form-control" required>
                    <option value="">Country</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Angola">Angola</option>
                </select> 
            </div>



            <div class="col-75">
                <textarea id="subject" name="subject" placeholder="THE MORE WE KNOW, THE BETTER WE CAN ASSIST YOU!"
                    style="height:50px ;margin-top: 2%;"></textarea>

            </div>

            <div class="row">
                <input type="submit" value="Submit" name="save">
            </div>


        </form>
    </div>

</body>

</html>
