<?php include 'db_connection.php'; ?>
<?php
$category_id = $_GET['categoryId'];
$sql = "SELECT * FROM services WHERE scategory_id = $category_id ORDER BY serial_number";
$result = $conn->query($sql);

$services = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $services[] = array(
            'id' => $row['id'],
            'title' => $row['title']
        );
    }
}

header('Content-Type: application/json');
echo json_encode($services);

$conn->close();
?>
