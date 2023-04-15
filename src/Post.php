<?php 


class Post{
    public static $pdo;
    public $id;
    public $title;
    public $image;
    public $description;
    public $body;
    public $created_at;


    public static function getAll(){
        $stmt = self::$pdo->prepare("SELECT * FROM posts");
        $stmt -> setFetchMode(PDO::FETCH_CLASS, 'POST');
        $stmt->execute();
        $posts = $stmt->fetchAll();
        return $posts;
        
    }

    public static function getProduct($id){
        $stmt = self::$pdo->prepare("SELECT * FROM posts WHERE id=?");
        $stmt -> setFetchMode(PDO::FETCH_CLASS, 'POST');
        $stmt->execute([$id]);
        $post = $stmt->fetchAll();
        return $post;
    }
    public static function createProduct($title, $body){
        $stmt = self::$pdo->prepare("INSERT INTO  posts (title, body) VALUES (:title, :body)");
        $stmt->execute([
            "title"=>$title,
            "body"=>$body
        ]);
        return 1;
    }

    public static function Delete($id){
        echo $id;
        $stmt = "DELETE FROM posts WHERE id=$id"; 
        // var_dump($stmt);
        self::$pdo->exec($stmt);
        return 1;
       
    }
    public static function Update($title, $body, $id){
        // $sql = "UPDATE posts SET title, body WHERE id=$id";
        $sql = "UPDATE posts SET title='$title', body='$body' WHERE id=$id";

        // Prepare statement
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute();
        return 1;
        // execute the query
    }


}

// $sql = "DELETE FROM MyGuests WHERE id=3";

// // use exec() because no results are returned
// $conn->exec($sql);
// echo "Record deleted successfully";
