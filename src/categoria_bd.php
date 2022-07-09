<?php

    function cadastrar_categoria($name, $cnpj){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "INSERT INTO  corretora (nome, cnpj) VALUES ('$name', '$cnpj');";

            if($conn->query($sql)){
                echo "Corretora inserida com sucesso";
            }else{
                echo "Houve um erro no insert.<br>";
                echo "ERRO: " . $conn->error;
            }
        }
        $conn->close();
    }

    function listar_categoria(){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "SELECT * FROM  corretora ORDER BY nome;";

            if($result = $conn->query($sql)){
                $arrayCategorias = array();

                while($umaCategoria = $result->fetch_object()){
                    $arrayCategorias[] = $umaCategoria;
                }
                $result->free();
            }
        }
        $conn->close();

        return $arrayCategorias;
    }

    function listar_todo(){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "SELECT * FROM  investimento ORDER BY nome;";

            if($result = $conn->query($sql)){
                $arrayTodo = array();

                while($umaTodo = $result->fetch_object()){
                    $arrayTodo[] = $umaTodo;
                }
                $result->free();
            }
        }
        $conn->close();

        return $arrayTodo;
    }

    function pegar_categoria($id){
        $conn = new mysqli("localhost", "root", "", "todolist");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "SELECT * FROM  category WHERE cod = ". $id ." ORDER BY nome;";

            $umaCategoria = null;

            if($result = $conn->query($sql)){
                $umaCategoria = $result->fetch_object();
                $result->free();
            }
        }
        $conn->close();

        return $umaCategoria;
    }

    function pegar_todo($id){
        $conn = new mysqli("localhost", "root", "", "todolist");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "SELECT * FROM  todo WHERE category_id = ". $id ." ORDER BY title;";

            $umaTodo = null;

            if($result = $conn->query($sql)){
                $umaTodo = $result->fetch_object();
                $result->free();
            }
        }
        $conn->close();

        return $umaTodo;
    }
?>