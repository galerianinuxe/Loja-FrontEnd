<?php

    try{
	
        $conexao = new PDO('mysql:host=localhost;dbname=dblojaoninuxe;charset=utf8','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e){
            echo 'Erro na conexão com o servidor.'.$e->getMessage().'<br>';
            echo "Código do Erro:".$e->getCode();
        } 
    
?>