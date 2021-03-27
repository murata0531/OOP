<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="card w-50 mx-auto mt-5">
          <div class="card-header text-center">
              <p class="lead">
              TUITION CALCULATOR
              </p>
          </div>
          <div class="card-body">
              <form method="post">
                <div class="form-group">
                    <label for="" class="lead">Enter Full name</label>
                    <input type="text" name="name" class="form-control">
                    <label for="" class="lead">Year Level</label>
                    <select name="year_level" id="" class="form-control">
                      <option value="" disabled selected>YEAR LEVEL</option>
                        <option value="first_year">First Year</option>
                        <option value="second_year">Second Year</option>
                        <option value="third_year">Third Year</option>
                        <option value="fourth_year">Fourth Year</option>



                    </select>
                    <label for="" class="lead">Total Units</label>
                    <input type="number" name="total_units" class="form-control">

                    <input type="radio" name="status" value="lab"> <span class="lead"> With Laboratory Fee</span> 
                    <br>
                    <input type="radio" name="status" value="no_lab"><span class="lead">
                    No Laboratory Fee
                    </span>

                    <br>
                    <br>

                    <button type="submit" name="calculate" class="btn btn-outline-info btn-block">Calculate</button>


                </div>




              </form>

              <?php 
              include 'classes/school.php';

              $school = new School();

              if(isset($_POST['calculate'])){
                  $name = $_POST['name'];
                  $yearLevel = $_POST['year_level'];
                  $totalUnits = $_POST['total_units'];
                  $lab = $_POST['status'];

                  $school->setValues($name,$yearLevel,$totalUnits,$lab);

                  echo "<div class = 'alert alert-warning' >Name: ".$name.".
                  <br>            
                  Total Tuition is: ".$school->totalTuition()
                  
                  ."</div>";
              }
              
              
              
              ?>
          </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>