<?php
  $host = "localhost";
    $dbname = "school";
    $username = "root";
    $password = "";

     try{
           $pdo = new pdo(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $username,
            $password
      
        );

            $pdo->setAttribute(
            PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION
        );

        $sql ="
        INSERT INTO student(name,email,age)
        VALUES('Piyakorn','ferd2540@Gmail.com','20')
        ";
        $pdo->exec($sql);

         $sql ="
        INSERT INTO student(name,email,age)
        VALUES('ไอสึ เคโน','sluuuuu@Gmail.com','54')
        ";
        $pdo->exec($sql);
        echo "เพิ่มข้อมูลสำเร็จ";
     }catch(PDOException $e){
            echo "เกิดข้อผิดพลาด: " . $e->getMessage();
        }
?>