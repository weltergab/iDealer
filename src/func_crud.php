<?php

    function cadastrar_corretora($name, $cnpj){
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

    function listar_corret(){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "SELECT * FROM  corretora ORDER BY nome;";

            if($result = $conn->query($sql)){
                $arrayCorret = array();

                while($umaCorretora = $result->fetch_object()){
                    $arrayCorret[] = $umaCorretora;
                }
                $result->free();
            }
        }
        $conn->close();

        return $arrayCorret;
    }

    function listar_invest(){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "SELECT * FROM  investimento ORDER BY nome;";

            if($result = $conn->query($sql)){
                $arrayInvest = array();

                while($umInvest = $result->fetch_object()){
                    $arrayInvest[] = $umInvest;
                }
                $result->free();
            }
        }
        $conn->close();

        return $arrayInvest;
    }

    function editar_corretora($id, $nome, $cnpj){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ) {
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "UPDATE corretora SET nome = '". $nome . "', cnpj = '". $cnpj . "' WHERE (cod = '". $id ."');";

            if($conn->query($sql)){
                echo "Corretora editada com sucesso";
            }else{
                echo "Houve algum erro no update.<br>";
                echo "ERRO: " . $conn->error;
            }
        }
        $conn->close();
    }

    function editar_inv($id, $cod, $nome, $preco, $qtd, $data){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ) {
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "UPDATE investimento SET cod_corretora = '". $cod . "', nome = '". $nome . "', preco = '". $preco . "', qtd = '". $qtd . "', data = '". $data . "' WHERE (cod = '". $id ."');";

            if($conn->query($sql)){
                echo "Investimento editado com sucesso";
            }else{
                echo "Houve algum erro no update.<br>";
                echo "ERRO: " . $conn->error;
            }
        }
        $conn->close();
    }

    function pegar_corret($id){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "SELECT * FROM  corretora WHERE cod = ". $id ." ORDER BY nome;";

            $umaCorretora = null;

            if($result = $conn->query($sql)){
                $umaCorretora = $result->fetch_object();
                $result->free();
            }
        }
        $conn->close();

        return $umaCorretora;
    }

    function pegar_inv($id){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "SELECT * FROM  investimento WHERE cod = ". $id ." ORDER BY nome;";

            $umInvest = null;

            if($result = $conn->query($sql)){
                $umInvest = $result->fetch_object();
                $result->free();
            }
        }
        $conn->close();

        return $umInvest;
    }
?>