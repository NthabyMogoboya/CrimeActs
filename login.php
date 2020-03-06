<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"

            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"

             integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"

            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"

            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Registration">
  Register
</button>

<!-- Modal -->
<!-- lunch button uses id as referrence -->
<div class="modal fade" id="Registration" tabindex="-1" role="dialog" aria-labelledby="icepRegisterUser"
    aria-hidden="true">
    <div class="modal-dialog modal-ls" role="document">
        <div class="modal-content">
            <div class="modal-header text-light justify-content-center">
                <h5 class="modal-title ">Registration</h5>
            </div>
            <form>
                <div class="modal-body">

                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" formControlName="fname" required class="form-control"
                            placeholder="Enter Your First Name">
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" formControlName="lname" required class="form-control"
                            placeholder="Enter Your Last Name">
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" formControlName="lname" required class="form-control"
                            placeholder="Enter Your Phone Number">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" formControlName="lname" required class="form-control"
                            placeholder="Enter Your City">
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" formControlName="email" required class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter your Email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" formControlName="pword" required class="form-control"
                                    placeholder="Enter Secret Password">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" formControlName="pword2" required class="form-control"
                                    placeholder="Re-enter Secret Password">
                            </div>
                        </div>
                    </div>


                   
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn" >Submit</button> 
                    <a href="login" class="btn btn-link">Login here</a> 
                    <!-- (click)="postApplication() -->
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal end -->
</body>
</html>