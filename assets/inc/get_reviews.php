<?php
    // Get existing reviews from database
    $sql = "SELECT * FROM Reviews WHERE location = $location ORDER BY reviewDate DESC LIMIT 50";
    $result = $conn->query($sql);
    if (!empty($result) && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $reviews[] = $row;
        }
    }
?>
