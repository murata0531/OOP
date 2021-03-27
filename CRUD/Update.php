<?php
include 'library_action.php';
$id = $_GET['book_id'];
$row = $lib_obj->get_one_data($id);

?>
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
    <div class="container-fluid">
        <div class="jumbotron">
            <p class="lead text-center">
                ADD BOOKS
            </p>
        </div>
    </div>
    <div class="container">
        <div class="card mt-5 mx-auto w-50">
            <div class="card-header">
                BOOK DETAILS
            </div>
            <div class="card-body">
                <form action="library_action.php?" method="post">
                    <input type="hidden" value="<?php echo $id ?>" name="book_id">
                    <input type="text" name="book-name" placeholder="<?php echo $row['book_name'] ?>" id="" class="form-control mt-3">
                    <input type="text" name="book-genre" placeholder="<?php echo $row['book_genre'] ?>" id="" class="form-control mt-3">
                    <input type="text" name="book-author" placeholder="<?php echo $row['book_author'] ?>" id="" class="form-control mt-3">
                    <input type="date" name="book-date-added" value="<?php echo $row['date_added'] ?>" id="" class="form-control mt-3">
                    <button type="submit" name="update-book" class="btn btn-outline-primary mt-3">SAVE BOOK</button>
                </form>


            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>