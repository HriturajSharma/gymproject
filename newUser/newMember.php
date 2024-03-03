<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="newMember.css">
    <title>newMember_Reg.</title>
</head>

<body>
<?php $base_url = "http://localhost/gym_project/myproject/" ?>
    <div class="container">

        <div class="card">

            <div class="formData">


                <form method="post" action="user.php" enctype="multipart/form-data" onsubmit="return validation()">
                    <div class="name_user">

                        <div class="heading">
                            <img src="<?php echo $base_url?>/Assets/logo.png" alt="">
                        </div>
                        <div class="name">

                            <input type="text" name="Name" id="name" placeholder="First Name">
                            <input type="text" name="Surname" id="surname" placeholder="Last Name">
                        </div>
                        <span class="name-error"></span>
                        <div class="part">
                            <div class="male">
                                <input type="email" name="Email" id="email" placeholder="Email">
                                <i class="fa-solid fa-envelope"></i>

                            </div>
                            <span class="e-error"></span>
                        </div>
                        <div class="contact-cont">
                            <div class="contact">
                                <input type="text" name="Number" id="number" placeholder="Mobile no.">
                                <i class="fa-solid fa-phone"></i>
                                <span class="n-error"></span>
                            </div>

                            <div class="dateOfBirth">
                                <input type="date" name="DOB" id="dob" title="Date of Birth">
                            </div>
                        </div>
                        <div class="middle_card">

                            <div class="part">
                                <label for="Male">Male</label>
                                <input type="radio" name="Gender" id="" value="Male">
                                <label for="Female">Female</label>
                                <input type="radio" name="Gender" id="" value="female">
                            </div>

                            <div class="profile-card">
                                <input type="file" name="profile" id="profile">
                            </div>

                            <input id="submit-btn" type="submit" value="Submit">

                        </div>
                </form>
            </div>
        </div>




    </div>
    <script src="script.js"></script>

</body>

</html>