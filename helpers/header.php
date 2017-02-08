<?php
session_start();

echo "<!DOCTYPE html>\n<html><head>
    <meta charset='UTF-8'>
        <title>KopseKati - Αρχική</title>
        <link rel='icon' href='images/kk5.ico' type='image/x-icon' />
        <link rel='stylesheet' type='text/css' href='stylesheets/entire.css' />
        <link rel='stylesheet' type='text/css' href='stylesheets/header.css' />
                <link rel='stylesheet' type='text/css' href='stylesheets/index.css' />
        <script type='text/javascript' src='javascripts/gr_date.js'></script>
        <!-- Sources for the modal login: -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <script type='text/javascript' src='javascripts/modal_login.js'></script>
    </head>
    <body>
        <div class='header'>
            <!-- Code for the display and function of the logo: -->
            <div id='logo'>
                <a href=''><img id='logo_img' src='images/kopsekati6.png'></img></a>
            </div>
            <!-- Code to display date in Greek: -->
            <div class='date white' style='text-align: right'><script>gr_date();</script></div>
            <!-- The login button: -->
            <input id='lgBtn' class='signin' type='button' value='Σύνδεση / Εγγραφή'>
            <!-- Code for the modal login: -->
            <!-- Modal -->
            <div class='modal fade' id='myModal' role='dialog'>
                <div class='modal-dialog'>
                    <!-- Modal content-->
                    <div class='modal-content'>
                        <div class='modal-header' style='padding:20px 50px;'>
                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4>Σύνδεση</h4>
                        </div>
                        <div class='modal-body' style='padding:40px 50px;'>
                            <form action='helpers/login.php' method='post' role='form'>
                                <div class='form-group'>
                                    <label for='usrname'>Email Χρήστη</label>
                                    <input type='text' class='form-control' id='email' name='email' placeholder='Εισάγετε το email σας'>
                                </div>
                                <div class='form-group'>
                                    <label for='psw'>Κωδικός Πρόσβασης</label>
                                    <input type='text' class='form-control' id='password' name='password' placeholder='Εισάγετε τον κωδικό σας'>
                                </div>
                                <button type='submit' class='btn btn-success btn-block'>Είσοδος</button>
                            </form>
                        </div>
                        <div class='modal-footer'>
                            <button type='submit' class='btn btn-danger btn-default pull-left' data-dismiss='modal'>Ακύρωση</button>
                            <p>Δεν είστε μέλος; <a href='#'>Εγγραφείτε!</a></p>
                            <p>Ξεχάσατε τον <a href='#'>κωδικό σας;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
?>
