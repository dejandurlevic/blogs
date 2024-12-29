<?php 

class Posts extends QueryBuilder{

    public $post_status = NULL;
    
    public function addNewPost(){
        $title = $_POST['post_title'];
        $description = $_POST['post_description'];
        $created_at = date("Y, M, D");
        $user_id = $_SESSION['loggedUser']->id;


        $sql = "INSERT INTO posts VALUES (NULL, ?, ?, ?, ?)";
        $query = $this->db->prepare($sql);
        $query->execute([$title, $description, $user_id, $created_at]);

        if($query){
            $this->post_status = true;
        }else{
            $this->post_status = false;
        }
    }

    public function deletePost($id){
        $sql = "DELETE FROM posts WHERE id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
    }
}


?>
