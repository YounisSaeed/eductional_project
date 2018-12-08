<?php
    require_once '../Files/file_add_user.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Educational System master</title>
        <link rel="stylesheet" href="styles/create.css"/>
    </head>
    <body>
        <div class="createbox">
            <h2>Register</h2>
            <form method="post">
                <!-- display validation errors here -->
               <?php include ('errors.php');?>
                
                <div class="named">
                    <label>Name:</label><br/>
                    <input type="text" name="name" placeholder="Enter your name"><br/>
                </div>
                <div class="unamed">
                    <label>Username:</label><br/>
                    <input type="text" name="username" placeholder="Enter your username"><br/>
                </div>
                <div class="emaild">
                    <label>Email:</label><br/>
                    <input type="email" name="email" placeholder="Enter your email"><br/>
                </div>
                <div class="passnumd">
                    <label>Password:</label><br/>
                    <input type="password" name="password" placeholder="Enter your password"><br/><br/>
                    <label>Phone number:</label><br/>
                    <input type="number" name="number" placeholder="Enter your number"><br/>
                </div>
                <div class="repassbirthd">
                    <label>Repassword:</label><br/>
                    <input type="password" name="repassword" placeholder="Re-enter your password"><br/><br/>
                    <label>Birthday:</label><br/>
                    <input type="date" name="birthday"><br/>
                </div>
                <div>
                <div class="kindmaled">
                    <input  type="radio" name="kind" value="male">Male
                </div>
                <div class="kindfemaled">
                    <input  type="radio" name="kind" value="female">female
                </div>
                    </div>
                <div>
                <div class="stud">
                    <input  type="radio" name="job" value="student">Student
                </div>
                <div class="inst">
                    <input  type="radio" name="job" value="instructor">Instructor
                </div>
                </div>
                <div class="check">
                <input  type="checkbox" name="terms" value="CheckBox">
                <span>I agree to the <a href="#" style="color:#FFF;">Terms</a> of Service and privacy policy.</span>
            </div>
                <center><input type="submit" name="submit" value="Create Account" class="sub"></center>
            </form>

        </div>
        
            <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.5.0/flatpickr.min.js"></script>    
            <script src="/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
            <script src="/vendors/formvalidation/dist/js/plugins/Tachyons.min.js"></script>
    </body>
<script>
document.addEventListener('DOMContentLoaded', function(e) {
    const form = document.getElementById('demoForm');
    const fv = FormValidation.formValidation(
        form,
        {
            fields: {
                meetingTime: {
                    validators: {
                        date: {
                            format: 'DD-MM-YYYY',
                            message: 'The value is not a valid date',
                        }
                    }
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                tachyons: new FormValidation.plugins.Tachyons(),
                submitButton: new FormValidation.plugins.SubmitButton(),
                icon: new FormValidation.plugins.Icon({
                    valid: 'fa fa-check',
                    invalid: 'fa fa-times',
                    validating: 'fa fa-refresh',
                }),
            },
        }
    );

    flatpickr(form.querySelector('[name="meetingTime"]'), {
        enableTime: true,
        // See https://flatpickr.js.org/formatting/
        dateFormat: 'd-m-y',
        // After selecting a date, we need to revalidate the field
        onChange: function() {
            fv.revalidateField('meetingTime');
        },
    });
});
</script>
</html>
