<?php
require_once 'database.php';
require_once 'usuario.php';

// Trazer o que há no banco, e mapear para a aplicação
class UsuarioDAO {
    private $bancoDeDados;

    public function __construct() {
        $this->bancoDeDados = new Database()->getConexao();
    }

    public function getContatos() {
        $stmt = $this->bancoDeDados->prepare("SELECT * FROM contatos_info");
        $stmt->execute();
        $contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getContatoByNome() {

    }

    public function createContato() {

    }

    public function deleteContato() {

    }
}
?>