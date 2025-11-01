<?php include 'db_connection.php'; ?>
<?php
$sql = "SELECT * FROM scategories WHERE language_id = 169";
$result = $conn->query($sql);

$categories = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = array(
            'id' => $row['id'],
            'name' => $row['name']
        );
    }
}

header('Content-Type: application/json');
echo json_encode($categories);

$conn->close();
?>