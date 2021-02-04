<?php
$dbFile = 'database.db';
$db = new PDO("sqlite:$dbFile"); 
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//como criar uma tabela
//   try {
//     $db -> exec('create table foo (col_1 number, col_2 varchar2)');
//     print ("Table foo created");
//     print ("<p><a href='02_create_table.html'>Create table again</a> and receive an error");
//   }
//   catch(PDOException $e) {
//     print ("exception " . $e->getMessage());
//   }
//como inserir

// try {
//     $stmt_h = $db -> prepare ('insert into foo values (:val_1, :val_2)');

//     $stmt_h -> bindParam(':val_1', $v1);
//     $stmt_h -> bindParam(':val_2', $v2);

//     $v1 = 1;
//     $v2 ='one';
//     $stmt_h -> execute();

//     $v1 = 2;
//     $v2 ='two';
//     $stmt_h -> execute();

//     $v1 = 3;
//     $v2 ='three';
//     $stmt_h -> execute();

//     $v1 = 4;
//     $v2 ='four';
//     $stmt_h -> execute();

//     $v1 = 5;
//     $v2 ='five';
//     $stmt_h -> execute();

//   }
//   catch(PDOException $e) {

//     print ("exception " . $e->getMessage());
  
//   }

//como selecionar varios valores

// try {
//     $res = $db -> query('select * from foo order by col_2');
//     print '<table>';
//     foreach ($res as $row) {
//       print '<tr><td>' . $row['col_1'] . '</td><td>' . $row['col_2'] . '</td></tr>';
//     }
//     print '</table>';
//   }
//   catch(PDOException $e) {
//     print ("exception " . $e->getMessage());
//   }

//selecionar valor com parametros

// try {
//     $stmt_h = $db -> prepare('select * from foo where col_1 > :param_1 and col_2 like :param_2');
//     $stmt_h -> execute(array(1, '%o%'));
//     $res = $stmt_h -> fetchAll();
//     print '<table>';
//     foreach ($res as $row) {
//       print '<tr><td>' . $row['col_1'] . '</td><td>' . $row['col_2'] . '</td></tr>';
//     }
//     print '</table>';
//   }
//   catch(PDOException $e) {
//     print ("exception " . $e->getMessage());
//   }

 //clear up
//  unlink($dbFile);
//  print "Database deleted, rebuld datebase.";