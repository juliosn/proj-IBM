<?php
session_start();
$_SESSION['logado'] = False;
//timezone
date_default_timezone_set('America/Sao_Paulo');
$timezone = new DateTimeZone('America/Sao_Paulo');//pega data de São Paulo
$data_hora = date('Y-m-d H:i');//define padrão de data para inserir na tabela (Ano-Mes-Dia Hora:Minuto)
// conexão com o banco de dados
define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','sjm');

class Conexao{
    
    protected $mysqli;
    private $cadastrar;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function cadastrar($nome, $nomeUsuario, $email, $senha, $cep, $endereco, $numeroCasa, $complemento, $cidade, $estado){
        $stmt = $this->mysqli->query("INSERT INTO `tbclientes`(`nome`, `nomeUsuario`, `email`, `senha`, `cep`, `endereco`, `numero`, `complemento`, `cidade`, `estado`) 
            VALUES ('$nome','$nomeUsuario','$email','$senha','$cep','$endereco','$numeroCasa','$complemento','$cidade','$estado')");
        if( $stmt > 0){
            return true;
        }else{
            return false;
        }
    }

    public function entrar($emailLogin, $senhaLogin){
        $stmt = $this->mysqli->query("SELECT * FROM `tbclientes` WHERE `email` = '$emailLogin' AND `senha` = '$senhaLogin';");


        $lista = $stmt->fetch_all(MYSQLI_ASSOC);
        if(count($lista) >=1){//caso a lista seja maior ou igua 1 (se o usuario possuir uma conta com os dados digitados)
            $f_lista = array();//cria um array
            $i = 0;
            foreach ($lista as $l) {//pega todas as informações do usuario
                $f_lista[$i]['id'] = $l['id'];
                $f_lista[$i]['nome'] = $l['nome'];
                $f_lista[$i]['nomeUsuario'] = $l['nomeUsuario'];
                $f_lista[$i]['email'] = $l['email'];
                $f_lista[$i]['senha'] = $l['senha'];
                $f_lista[$i]['cep'] = $l['cep'];
                $f_lista[$i]['endereco'] = $l['endereco'];
                $f_lista[$i]['numeroCasa'] = $l['numero'];
                $f_lista[$i]['complemento'] = $l['complemento'];
                $f_lista[$i]['cidade'] = $l['cidade'];
                $f_lista[$i]['estado'] = $l['estado'];
                $f_lista[$i]['imgConta'] = $l['imgConta'];
                $i++;
            }
            echo $f_lista[0]["email"]; echo "<br>";
            //define usuario como logado
            $_SESSION['logado'] = True;
            //passa todas as informações do usuario para sessões
            $_SESSION['id'] = $f_lista[0]["id"];
            $_SESSION['nome'] = $f_lista[0]["nome"];
            $_SESSION['nomeUsuario'] = $f_lista[0]["nomeUsuario"];
            $_SESSION['login'] = $f_lista[0]["email"];
            $_SESSION['password'] = $f_lista[0]["senha"];
            $_SESSION['cep'] = $f_lista[0]["cep"];
            $_SESSION['endereco'] = $f_lista[0]["endereco"];
            $_SESSION['numero'] = $f_lista[0]["numero"];
            $_SESSION['complemento'] = $f_lista[0]["complemento"];
            $_SESSION['cidade'] = $f_lista[0]["cidade"];
            $_SESSION['estado'] = $f_lista[0]["estado"];
            $_SESSION['imgConta'] = $f_lista[0]["imgConta"];
            header("Location: ../index.php");
        }else{//caso nao encontre resultado na tabela de cliente, procurar na tabela de funcionario
            $stmt = $this->mysqli->query("SELECT * FROM `tbfuncionario` WHERE `email` = '$emailLogin' AND `senha` = '$senhaLogin';");
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            if(count($lista) >=1){//caso a lista seja maior ou igua 1 (se o usuario possuir uma conta com os dados digitados)
                $_SESSION['funcionario'] = True;
                $f_lista = array();//cria um array
                $i = 0;
                foreach ($lista as $l) {//pega todas as informações do usuario
                    $f_lista[$i]['id'] = $l['id'];
                    $f_lista[$i]['nome'] = $l['nome'];
                    $f_lista[$i]['nomeUsuario'] = $l['nomeUsuario'];
                    $f_lista[$i]['email'] = $l['email'];
                    $f_lista[$i]['senha'] = $l['senha'];
                    $f_lista[$i]['cep'] = $l['cep'];
                    $f_lista[$i]['endereco'] = $l['endereco'];
                    $f_lista[$i]['numeroCasa'] = $l['numero'];
                    $f_lista[$i]['complemento'] = $l['complemento'];
                    $f_lista[$i]['cidade'] = $l['cidade'];
                    $f_lista[$i]['estado'] = $l['estado'];
                    $f_lista[$i]['imgConta'] = $l['imgConta'];
                    $i++;
                }
                //define usuario como logado
                $_SESSION['logado'] = True;
                //passa todas as informações do usuario para sessões
                $_SESSION['id'] = $f_lista[0]["id"];
                $_SESSION['nome'] = $f_lista[0]["nome"];
                $_SESSION['nomeUsuario'] = $f_lista[0]["nomeUsuario"];
                $_SESSION['login'] = $f_lista[0]["email"];
                $_SESSION['password'] = $f_lista[0]["senha"];
                $_SESSION['cep'] = $f_lista[0]["cep"];
                $_SESSION['endereco'] = $f_lista[0]["endereco"];
                $_SESSION['numero'] = $f_lista[0]["numero"];
                $_SESSION['complemento'] = $f_lista[0]["complemento"];
                $_SESSION['cidade'] = $f_lista[0]["cidade"];
                $_SESSION['estado'] = $f_lista[0]["estado"];
                $_SESSION['imgConta'] = $f_lista[0]["imgConta"];
                header("Location: ../index.php");
            }else{
                $_SESSION['logado'] = FALSE;//define usuario como deslogado=
            header("Location: ../entrar.php?entrar=semConta");
            }
        }
    }
    public function atualizarImagemConta($imagemConta, $idUsuario){

        if($imagemConta['error']){//VERIFICA SE TEVE ALGUM ERRO
            die(header("Location: ../conta.php?alterarImagem=danger"));
        }

        $diretorioSalvar = "../img/imgConta/";//diretorio para salvar imagem no site
        $diretorioDb = "img/imgConta/";//diretorio que sera salvo na base de dados
        $nomeImagem = $_SESSION['id'];//deixa nome da imagem como o id do usuario
        $extensaoImagem = strtolower(pathinfo($imagemConta['name'], PATHINFO_EXTENSION)); //pega extensao do arquivo e deixa em minusculo

        $moverImagem = move_uploaded_file($imagemConta['tmp_name'], $diretorioSalvar . $nomeImagem . "." . $extensaoImagem);//salva imagem no site

        $stmt = $this->mysqli->query("UPDATE `tbclientes` SET `imgConta` = '$nomeImagem.$extensaoImagem'");//insere diretorio no banco de dados
    }

    public function agendarServico($idCliente, $marca, $modelo, $descricaoProblema, $formaEnvio, $garantia){
        $stmt = $this->mysqli->query("INSERT INTO `tbservico`(`idCliente`, `marca`, `modelo`, `descricaoProblema`, `formaEnvio`, `garantia`, `dataServico`) 
            VALUES ('$idCliente','$marca','$modelo','$descricaoProblema', '$formaEnvio','$garantia', '0000-00-00 00:00:00')");

        $stmt = $this->mysqli->query("SELECT * FROM tbservico");

        $listaServico = $stmt->fetch_all(MYSQLI_ASSOC);
        if(count($listaServico) >=1){//caso a lista seja maior ou igua 1 (se o usuario possuir uma conta com os dados digitados)
            $f_lista = array();//cria um array
            $i = 0;
            foreach ($listaServico as $l) {//pega todas as informações do usuario
                $f_lista[$i]['idServico'] = $l['idServico'];
                $i++;
            }
            $idServico =  count($listaServico);
        }else{
            $_SESSION['logado'] = FALSE;//define usuario como deslogado=
            header("Location: ../entrar.php?entrar=semConta");
        }

        $stmt = $this->mysqli->query("INSERT INTO `tbstatuspedido`(`idCliente`, `idServico`) VALUES ('$idCliente', '$idServico')");

        if( $stmt > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getServico($id){
        try {
            if($id >=1){
                $stmt = $this->mysqli->query("SELECT * FROM tbservico WHERE idCliente = '" . $id . "';");
            }else{
                $stmt = $this->mysqli->query("SELECT * FROM tbservico;");
            }
            
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_lista = array();
            $i = 0;
            foreach ($lista as $l) {
                $f_lista[$i]['idCliente'] = $l['idCliente'];
                $f_lista[$i]['marca'] = $l['marca'];
                $f_lista[$i]['modelo'] = $l['modelo'];
                $f_lista[$i]['descricaoProblema'] = $l['descricaoProblema'];
                $f_lista[$i]['formaEnvio'] = $l['formaEnvio'];
                $f_lista[$i]['garantia'] = $l['garantia'];
                $f_lista[$i]['dataServico'] = $l['dataServico'];
                $i++;
            }
            return $f_lista;
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

    public function getClienteFuncionario(){//lista os clientes para o funcionario
        $stmt = $this->mysqli->query("SELECT * FROM tbclientes");
            
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_lista = array();
            $i = 0;
            foreach ($lista as $l) {
                $f_lista[$i]['id'] = $l['id'];
                $f_lista[$i]['nome'] = $l['nome'];
                $f_lista[$i]['nomeUsuario'] = $l['nomeUsuario'];
                $f_lista[$i]['email'] = $l['email'];
                $f_lista[$i]['senha'] = $l['senha'];
                $f_lista[$i]['cep'] = $l['cep'];
                $f_lista[$i]['endereco'] = $l['endereco'];
                $f_lista[$i]['numeroCasa'] = $l['numero'];
                $f_lista[$i]['complemento'] = $l['complemento'];
                $f_lista[$i]['cidade'] = $l['cidade'];
                $f_lista[$i]['estado'] = $l['estado'];
                $f_lista[$i]['imgContaCliente'] = $l['imgConta'];
                $i++;
            }
            return $f_lista;
    }

    public function getStatusServico($id){
        try {
            if($id>=1){
                $stmt = $this->mysqli->query("SELECT * FROM tbstatuspedido WHERE idCliente = '" . $id . "';");
            }else{
                $stmt = $this->mysqli->query("SELECT * FROM tbstatuspedido;");
            }
            $listaDois = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_listaDois = array();
            $i = 0;
            foreach ($listaDois as $l) {
                $f_listaDois[$i]['idStatusPedido'] = $l['idStatusPedido'];
                $f_listaDois[$i]['idServico'] = $l['idServico'];
                $f_listaDois[$i]['idCliente'] = $l['idCliente'];
                $f_listaDois[$i]['idFuncionario'] = $l['idFuncionario'];
                $f_listaDois[$i]['statusServico'] = $l['statusServico'];
                $f_listaDois[$i]['mensagemFuncionario'] = $l['mensagemFuncionario'];
                $f_listaDois[$i]['dataLevarNotebook'] = $l['dataLevarNotebook'];
                $f_listaDois[$i]['dataTerminoServico'] = $l['dataTerminoServico'];
                $i++;
            }
            return $f_listaDois;
        } catch (Exception $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

    public function aceitarServico($idServico, $idFuncionario, $dataEnvio, $mensagemFuncionario){
        try{
            $stmt = $this->mysqli->query("UPDATE tbstatusservico SET `idFuncionario` = '" . $idFuncionario . "', `dataEnvio` =  '" . $dataEnvio . "', `mensagemFuncionario` =  '" . $mensagemFuncionario . "' WHERE `idServico` =  '" . $idServico . "';");
            if( $stmt > 0){
                return true ;
            }else{
                return false;
            }
        }catch (Exception $e){

        }
    }
}