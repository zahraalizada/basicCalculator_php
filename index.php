<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator | PHP Projects</title>

    <!--  Bootstrap Css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3 ">
            <div class="panel-group">
                <div class="login card card-default">
                    <div class="card-header">
                        <h3>Basic Calculator App</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="firstnumber" class="form-label">First Number</label>
                                        <input type="number" class="form-control" id="firstnumber" name="firstnumber"
                                               aria-describedby="firstnumber" required="required">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="secondnumber" class="form-label">Second Number</label>
                                        <input type="number" class="form-control" id="secondnumber" name="secondnumber"
                                               aria-describedby="secondnumber" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-9">
                                    <div class="mb-3">
                                        <label for="operation" class="form-label">Select Operation</label>
                                        <select class="form-select" aria-label="operation" name="operation" required="required">
                                            <option value="" selected>Open operation menu</option>
                                            <option value="sum">Addition</option>
                                            <option value="subs">Subtraction</option>
                                            <option value="mult">Multiplication</option>
                                            <option value="divis">Division</option>
                                            <option value="perc">Percent</option>
                                            <option value="pow">Pow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary mb-3">Calculate</button>
                                </div>
                            </div>

                            <div class="mb-3">


                                             <?php
                                             if ($_POST) {
                                                 $firstnumber = $_POST['firstnumber'];
                                                 $secondnumber = $_POST['secondnumber'];
                                                 $operation = $_POST['operation'];

                                                 if(!($operation == "")){
                                                     switch ($operation){
                                                         case "sum":
                                                              $result = $firstnumber + $secondnumber;
                                                             echo "<h4>Result: <span class='text-success'> $result </span></h4>";
                                                             break;
                                                         case "subs":
                                                              $result = $firstnumber - $secondnumber;
                                                             echo "<h4>Result: <span class='text-success'> $result </span></h4>";
                                                             break;
                                                         case "mult":
                                                              $result = $firstnumber * $secondnumber;
                                                             echo "<h4>Result: <span class='text-success'> $result </span></h4>";
                                                             break;
                                                         case "divis":
                                                              $result = $firstnumber / $secondnumber;
                                                             echo "<h4>Result: <span class='text-success'> $result </span></h4>";
                                                             break;
                                                         case "perc":
                                                              $result = ($firstnumber * $secondnumber) / 100;
                                                             echo "<h4>Result: <span class='text-success'> $result </span></h4>";
                                                             break;
                                                         case "pow":
                                                              $result = pow($firstnumber,$secondnumber);
                                                             echo "<h4>Result: <span class='text-success'> $result </span></h4>";
                                                             break;
                                                         default:
                                                             echo "Sorry, there was a problem!";
                                                     }
                                                 } else{
                                                     echo "Please select operation";
                                                 }

                                             }


                                             ?>



                            </div>

                        </form>


                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--Bootstrap Js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

</body>
</html>