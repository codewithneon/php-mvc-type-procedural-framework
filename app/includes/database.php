<?php  //database
function db_connection(){
    global $config;
    try {
        return new PDO('mysql:host=' . $config['db_host'] . ';dbname=' . $config['db_name'] . ';charset=utf8', $config['db_user'], $config['db_password']);
    } catch (PDOException $exception) {
        die ('Failed to connect to database!');
    }
}
function entry_list(){
    $pdo=db_connection();
    $stmt= $pdo->prepare('SELECT * FROM entries');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function entry_by_employee($id){
    $pdo = db_connection();
    $stmt = $pdo->prepare("SELECT * FROM entries WHERE employee_id=:id");
    $stmt->execute(['employee_id' => $id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// employee area 
 function employee_list(){
    $pdo = db_connection();
    $stmt= $pdo->prepare('SELECT * FROM employees');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
 function employee_data($id){
    $pdo = db_connection();
    $stmt = $pdo->prepare("SELECT * FROM employees WHERE id=:id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch();
 }