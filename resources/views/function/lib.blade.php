<?php

function insertContent($asset_name, $serial_no, $asset_type)
{
    $dsn = 'mysql: host=localhost; dbname=asset';
    $user = 'root';
    $password = 'P@ssw0rd';
    try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    }

    $sql = "INSERT INTO assets(asset_name,
                serial_no, asset_type) VALUES (
                :asset_name,
                :serial_no,
                :asset_type)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute($asset = [
    'asset_name' => $asset_name,
    'serial_no' => $serial_no,
    'asset_type' => $asset_type
    ]);
}


function deleteById($id)
{
    $dsn = 'mysql: host=localhost; dbname=asset';
    $user = 'root';
    $password = 'P@ssw0rd';
    try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    }

    $stmt = $pdo->prepare("DELETE FROM assets WHERE asset_id = :asset_id");
    $stmt->bindParam(':asset_id', $id);
    $stmt->execute();
}

function getId($asset_id)
{
    $dsn = 'mysql: host=localhost; dbname=asset';
    $user = 'root';
    $password = 'P@ssw0rd';
    try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    }

    $stmt = $pdo->prepare("SELECT * FROM assets WHERE asset_id= :asset_id");
    $stmt->bindParam(':asset_id', $asset_id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function updateById($asset_id, $title, $description)
{
    $dsn = 'mysql: host=localhost; dbname=asset';
    $user = 'root';
    $password = 'P@ssw0rd';
    try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    }

    $sql = "UPDATE asset.assets
            SET asset_id = :asset_id,
                title = :title,
                description = :description
            WHERE asset_id = :asset_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(":asset_id" => $asset_id,
                        ":title" => $title,
                        ":description" => $description));
}


?>