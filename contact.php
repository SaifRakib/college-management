<?php
include 'include/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style-contact.css">
    <title>Contact Us</title>
</head>
<body>

<?php
    include 'include/header.php';
?>
    <div class="container contact">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                    <h2>Contact Us</h2>
                    <h4>We would love to hear from you !</h4>
                </div>
            </div>
            <div class="col-md-9">
                <div class="contact-form">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="fname">First Name:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="lname">Last Name:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Email:</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="comment">Comment:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'include/footer.php';
    ?>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>