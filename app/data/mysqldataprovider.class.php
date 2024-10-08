<?php

class MySqlDataProvider{

    function __construct($source) {
        $this->source = $source;
    }

    public function get_news() {

        $db = $this->connect();

        if($db == null) {
            return [];
        }

        $query = $db->query('SELECT * FROM news');

        $data = $query->fetchAll(PDO::FETCH_CLASS);

        $query = null;
        $db = null;

        return $data;
    }




    public function get_all_admins() {

        $db = $this->connect();

        if($db == null) {
            return [];
        }

        $sql = 'SELECT * FROM admins';
        $stm = $db->prepare($sql);
        $stm->execute();

        return $stm;
    }



    public function get_admin($key) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'SELECT * FROM admins WHERE id = :id';
        $smt = $db->prepare($sql);

        $smt->execute([
            ':id' => $key
        ]);

        $data = $smt->fetchAll(PDO::FETCH_CLASS);

        $smt = null;
        $db = null;
    
        if (empty($data)) {
            return;
        }
    
        return $data[0];
    }
        

    public function delete_admin($id) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'DELETE FROM admins WHERE id = :id';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':id' => $id
        ]);

        $stm = null;
        $db = null;
    }


    public function check_old_pass($old_pass, $prev_pass) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'SELECT * FROM admins WHERE password = :password AND id = :id';
        $stm = $db->prepare($sql);
        $stm->execute([
            ':password' => $old_pass,
            'id' => $prev_pass
            ]);

        return $stm;

    }






    
    public function update_admin_profile($name, $password, $id) {
        $db = $this->connect();

        if($db == null) {
            return;
        }

        $sql = 'UPDATE admins SET name = :name, password = :password WHERE id = :id';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':name' => $name,
            ':password' => $password,
            'id' => $id
        ]);

        $stm = null;
        $db = null;
    }



    public function get_programs() {

        $db = $this->connect();

        if($db == null) {
            return [];
        }

        $query = $db->query('SELECT * FROM programs');

        $data = $query->fetchAll(PDO::FETCH_CLASS);

        $query = null;
        $db = null;

        return $data;
    }


    public function get_gallery() {
        $db = $this->connect();

        if($db == null) {
            return [];
        }

        $query = $db->query('SELECT * FROM gallery');

        $data = $query->fetchAll(PDO::FETCH_CLASS);

        $query = null;
        $db = null;

        return $data;
 
    }


    public function get_updates() {

        $db = $this->connect();

        if($db == null) {
            return [];
        }

        $query = $db->query('SELECT * FROM updates');

        $data = $query->fetchAll(PDO::FETCH_CLASS);

        $query = null;
        $db = null;

        return $data;
    }

    public function get_news_data($term) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'SELECT * FROM news WHERE id = :id';
        $smt = $db->prepare($sql);

        $smt->execute([
            ':id' => $term,
        ]);

        $data = $smt->fetchAll(PDO::FETCH_CLASS);

        $smt = null;
        $db = null;

        if (empty($data)) {
            return;
        }

        

        return $data[0];
    }


    public function get_gallery_data($id) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'SELECT * FROM gallery WHERE id = :id';
        $smt = $db->prepare($sql);

        $smt->execute([
            ':id' => $id,
        ]);

        $data = $smt->fetchAll(PDO::FETCH_CLASS);

        $smt = null;
        $db = null;

        if (empty($data)) {
            return;
        }

        

        return $data[0];
    }


    public function get_programs_data($term) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'SELECT * FROM programs WHERE id = :id';
        $smt = $db->prepare($sql);

        $smt->execute([
            ':id' => $term,
        ]);

        $data = $smt->fetchAll(PDO::FETCH_CLASS);

        $smt = null;
        $db = null;

        if (empty($data)) {
            return;
        }

        

        return $data[0];
    }



    public function get_updates_data($term) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'SELECT * FROM updates WHERE id = :id';
        $smt = $db->prepare($sql);

        $smt->execute([
            ':id' => $term,
        ]);

        $data = $smt->fetchAll(PDO::FETCH_CLASS);

        $smt = null;
        $db = null;

        if (empty($data)) {
            return;
        }

        

        return $data[0];
    }


    public function add_news($title, $description, $image) {
        $db = $this->connect();

        if($db == null) {
            return;
        }

        $sql = 'INSERT INTO news (title, description, image) VALUES (:title, :description, :image)';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':title' => $title,
            ':description' => $description,
            ':image' => $image
        ]);

        $stm = null;
        $db = null;
        
    }


    public function register_admin($name, $password ) {
        $db = $this->connect();

        if($db == null) {
            return;
        }

        $sql = 'INSERT INTO admins (name, password) VALUES (:name, :password)';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':name' => $name,
            ':password' => $password,
        ]);

        $stm = null;
        $db = null;
        
    }




    public function add_programs($title, $description, $image) {
        $db = $this->connect();

        if($db == null) {
            return;
        }

        $sql = 'INSERT INTO programs (title, description, image) VALUES (:title, :description, :image)';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':title' => $title,
            ':description' => $description,
            ':image' => $image
        ]);

        $stm = null;
        $db = null;
        
    }


    public function add_to_gallery($image) {
        $db = $this->connect();

        if($db == null) {
            return;
        }

        $sql = 'INSERT INTO gallery (image) VALUES (:image)';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':image' => $image
        ]);

        $stm = null;
        $db = null;
        
    }




    public function add_updates($title, $description, $image) {
        $db = $this->connect();

        if($db == null) {
            return;
        }

        $sql = 'INSERT INTO updates (title, description, image) VALUES (:title, :description, :image)';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':title' => $title,
            ':description' => $description,
            ':image' => $image
        ]);

        $stm = null;
        $db = null;
        
    }


    

    public function delete_news($term) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'DELETE FROM news WHERE id = :id';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':id' => $term
        ]);

        $stm = null;
        $db = null;
    }

    

    public function delete_from_gallery($id) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'DELETE FROM gallery WHERE id = :id';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':id' => $id
        ]);

        $stm = null;
        $db = null;
    }


    

    public function delete_programs($term) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'DELETE FROM programs WHERE id = :id';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':id' => $term
        ]);

        $stm = null;
        $db = null;
    }





    public function delete_updates($term) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'DELETE FROM updates WHERE id = :id';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':id' => $term
        ]);

        $stm = null;
        $db = null;
    }


    


    public function update_news($original_title, $new_title, $description, $image) {
        $db = $this->connect();

        if($db == null) {
            return;
        }

        $sql = 'UPDATE news SET title = :title, description = :description, image = :image WHERE id = :id';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':title' => $new_title,
            ':description' => $description,
            ':id' => $original_title,
            'image' => $image
        ]);

        $stm = null;
        $db = null;
    }




    public function update_programs($original_title, $new_title, $description, $image) {
        $db = $this->connect();

        if($db == null) {
            return;
        }

        $sql = 'UPDATE programs SET title = :title, description = :description, image = :image WHERE id = :id';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':title' => $new_title,
            ':description' => $description,
            ':id' => $original_title,
            ':image' => $image
        ]);

        $stm = null;
        $db = null;
    }



    public function update_updates($original_title, $new_title, $description, $image) {
        $db = $this->connect();

        if($db == null) {
            return;
        }

        $sql = 'UPDATE updates SET title = :title, description = :description, image = :image WHERE id = :id';
        $stm = $db->prepare($sql);

        $stm->execute([
            ':title' => $new_title,
            ':description' => $description,
            ':id' => $original_title,
            'image' => $image
        ]);

        $stm = null;
        $db = null;
    }




    public function authenticate_user($name, $password) {
        $db = $this->connect();

        if ($db == null) {
            return;
        }

        $sql = 'SELECT * FROM admins WHERE name = :name AND password = :password';
        $stm = $db->prepare($sql);
        $stm->execute([
            ':name' => $name,
            ':password' => $password
            ]);

        return $stm;
    }




    
    
    private function connect() {
        try {
            return new PDO($this->source, DB['db_user'], DB['db_password']);
        } catch (PDOException $e) {
            return null;
        }

    }

}


