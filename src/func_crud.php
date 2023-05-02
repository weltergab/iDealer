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

    function listar_clientes(){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "SELECT * FROM  user ORDER BY email;";

            if($result = $conn->query($sql)){
                $arrayCorret = array();

                while($umCliente = $result->fetch_object()){
                    $arrayCliente[] = $umCliente;
                }
                $result->free();
            }
        }
        $conn->close();

        return $arrayCliente;
    }


    function listar_invest(){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "SELECT * FROM  investimento WHERE usuario = $_SESSION[user] ORDER BY nome;";
            
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

    function listar_tudo(){
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

    function editar_inv($id, $cod, $nome, $preco, $qtd, $data, $preco_hj){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ) {
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "UPDATE investimento SET cod_corretora = '". $cod . "', nome = '". $nome . "', preco = '". $preco . "', qtd = '". $qtd . "', preco_hj = '". $preco_hj . "', data = '". $data . "' WHERE (cod = '". $id ."');";

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

    function pegar_cliente($id){
        $conn = new mysqli("localhost", "root", "", "investimentos");

        if ( $conn->connect_error ){
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "SELECT * FROM  user WHERE id = ". $id ." ORDER BY email;";

            $umCliente = null;

            if($result = $conn->query($sql)){
                $umCliente = $result->fetch_object();
                $result->free();
            }
        }
        $conn->close();

        return $umCliente;
    }

    function excluir_corretora($id){
        $conn = new mysqli("localhost", "root", "", "investimentos");
    
        if ( $conn->connect_error ) {
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "DELETE FROM corretora WHERE cod = " . $id . ";";
    
            if($conn->query($sql)){
                echo "Corretora excluída com sucesso";
            }else{
                echo "Houve algum erro no delete.<br>";
                echo "ERRO: " . $conn->error;
            }
        }
        $conn->close();
    }

    function excluir_cliente($id){
        $conn = new mysqli("localhost", "root", "", "investimentos");
    
        if ( $conn->connect_error ) {
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "DELETE FROM user WHERE id = " . $id . ";";
    
            if($conn->query($sql)){
                echo "Cliente excluído com sucesso";
            }else{
                echo "Houve algum erro no delete.<br>";
                echo "ERRO: " . $conn->error;
            }
        }
        $conn->close();
    }

    
    function excluir_investimento($id){
        $conn = new mysqli("localhost", "root", "", "investimentos");
    
        if ( $conn->connect_error ) {
            die("Falha na conexão: " . $conn->connect_error );
        }else{
            $sql = "DELETE FROM investimento WHERE cod = " . $id . ";";
    
            if($conn->query($sql)){
                echo "Investimento excluído com sucesso";
            }else{
                echo "Houve algum erro no delete.<br>";
                echo "ERRO: " . $conn->error;
            }
        }
        $conn->close();
    }
?>