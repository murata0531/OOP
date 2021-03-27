<?php 
include 'Database.php';


class Library extends Database {

    public function add_book($bkName,$bkGenre,$bkAuthor,$bk_date){
        $sql = "INSERT INTO books(book_name,book_genre,book_author,date_added)VALUES('$bkName','$bkGenre','$bkAuthor','$bk_date')";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            // echo "book added successfully";
            header('location:Read.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }



    }

    public function display_books(){
        $sql = "SELECT * FROM books";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
            $container = array();
            while($row = $result->fetch_assoc()){
                $container[] = $row;

            }

            return $container;

        }else{
            return FALSE; 
        }
    }

    public function delete_book($id){
        $sql ="DELETE FROM books WHERE book_id = '$id'";
        $return = $this->conn->query($sql);

        if($return == TRUE){
            header('location:Read.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }


    }

    public function get_one_data($id){
        $sql = "SELECT * FROM books WHERE book_id = '$id'";
        $result = $this->conn->query($sql);

        if($result == FALSE){
            echo "no data found";
        }else{
            return $result->fetch_assoc();
        }

    }

    public function update_book($bkName,$bkGenre,$bkAuthor,$bk_date,$id){
        $sql = "UPDATE books SET book_name = '$bkName',book_genre='$bkGenre',book_author='$bkAuthor', date_added = '$bk_date' WHERE book_id = '$id'";

        $result = $this->conn->query($sql);

        if($result == TRUE){
            // echo "book added successfully";
            header('location:Read.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }


    }
}

?>