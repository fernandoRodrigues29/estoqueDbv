<?php

class DatabaseConection {
     private $path_file_db;
     private $db;
        function __construct($db)
        {
            $this->path_file_db = $db;
            $this->db = new PDO("sqlite:".$this->path_file_db); 
            $this->db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            try
            {
                $this->db ->exec('create table if not exists estoque (id INT(11) ,'.
                'item VARCHAR(30),'.
                'quantidade VARCHAR(30),'.
                'descricao VARCHAR(30),'.
                'status VARCHAR(30))');

                print(' tabela criada ');
            }
            catch(PDOException $e) {
                print ("exception create table " . $e->getMessage());
            }
        }
        
        public function index()
        {
           
        }

        public function inserir($data = null)
        {
            try
            {
                $stmt_h = $this->db->prepare('insert into estoque values(:v5,:v1,:v2,:v3,:v4)');
                    $stmt_h->bindParam(':v5',1);
                    $stmt_h->bindParam(':v1','val1');
                    $stmt_h->bindParam(':v2','val2');
                    $stmt_h->bindParam(':v3','val3');
                    $stmt_h->bindParam(':v4','val4');
                        $stmt_h->execute();
            }
            catch(PDOException $e)
            {
                print(' exception insert table'.$e->getMessage());
            }
        }
        public function listarTudo()
        {
            try
            {
                $res = $this->db->query('select * from estoque');
                echo "<pre>";
                  print_r($res);
                echo "</pre>";      
                        
            }
            catch(PDOException $e)
            {
                print(' exception row table'.$e->getMessage());
            }
        }


}