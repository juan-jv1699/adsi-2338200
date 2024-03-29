<?php
    try {
        $conx = new PDO("mysql:host=$host;dbname=$name_db",$user,$passwd);
        $conx->exec("set names utf8");
        //echo "Connection Successfully!";
    }
    catch(PDOException $e) {
        echo "Connection Error: " . $e->getMessage();
    }

    //-- CRUD => Pokemons

    // insert pokemons
    function addPokemon($conx,$name, $type, $strength, $stamina, $speed, $accuracy, $image, $trainer_id){
        try {
            $result = false;
            $sql = "INSERT INTO pokemons (name, type, strength, stamina, speed, accuracy, image, trainer_id) VALUES(:name, :type, :strength, :stamina, :speed, :accuracy, :image, :trainer_id)";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":name", $name);
            $stm->bindparam(":type", $type);
            $stm->bindparam(":strength", $strength);
            $stm->bindparam(":stamina", $stamina);
            $stm->bindparam(":speed", $speed);
            $stm->bindparam(":accuracy", $accuracy);
            $stm->bindparam(":image", $image);
            $stm->bindparam(":trainer_id", $trainer_id);
            if($stm->execute()){
                $result = true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    };

    // Update Pokemon
    function updatePokemon($conx,$id, $name, $type, $strength, $stamina, $speed, $accuracy, $image, $trainer_id){

        try {
            $result = false;
            if($image != null){
                $sql = "UPDATE pokemons SET name = :name, type = :type, strength = :strength, stamina = :stamina, speed = :speed, accuracy = :accuracy, image = :image, trainer_id = :trainer_id WHERE id = :id";
            }else {
                $sql = "UPDATE pokemons SET name = :name, type = :type, strength = :strength, stamina = :stamina, speed = :speed, accuracy = :accuracy, trainer_id = :trainer_id WHERE id = :id";
            }
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->bindparam(":name", $name);
            $stm->bindparam(":type", $type);
            $stm->bindparam(":strength", $strength);
            $stm->bindparam(":stamina", $stamina);
            $stm->bindparam(":speed", $speed);
            $stm->bindparam(":accuracy", $accuracy);
            $stm->bindparam(":trainer_id", $trainer_id);
            
            if($image != null){
                $stm->bindparam(":image", $image);
            }
            $stm->bindparam(":trainer_id", $trainer_id);

            if($stm->execute()){
                $result = true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    };

    // Delete pokemons
    function deletePokemon($conx,$id){
        $result = false;
        try {
            $sql = "DELETE FROM pokemons WHERE id = :id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->execute();
            if($stm){
                $result = true;
            }
        }catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    };

    // List All Pokemons
    function listAllPokemons($conx) {
        try {
            $sql = "SELECT p.*, t.name AS nametrainer 
                    FROM pokemons AS p, trainers AS t
                    WHERE p.trainer_id = t.id ORDER BY p.id ASC";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Show Pokemon
    function showPokemon($conx, $id) {
        try {
            $sql = "SELECT p.*, t.name AS nametrainer 
                    FROM pokemons AS p, trainers AS t
                    WHERE p.id = :id AND p.trainer_id = t.id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Trainers
    function login($conx,$email,$pass){
        $result = false;
        try {
            $sql = "SELECT * FROM trainers WHERE email = :email AND password = :pass LIMIT 1";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":email", $email);
            $stm->bindparam(":pass", $pass);
            $stm->execute();
            if($stm->rowCount() > 0){
                $trainer = $stm->fetch(PDO::FETCH_ASSOC);
                $_SESSION['tid'] = $trainer['id'];
                $_SESSION['temail']= $trainer['email'];
                $_SESSION['tphoto']= $trainer['photo'];
                $result = true;
            }
        }catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    };


    // List All Trainers
    function listAllTrainers($conx) {
        try {
            $sql = "SELECT * FROM trainers";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
