<?php include 'data.php'; ?>
<?php include 'header.php'; ?>
<?php
$sql = "SELECT * FROM data";

$result_read = $conn->query($sql);
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php if ($result_read->num_rows > 0) { ?>
    <table cellpadding="8px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Edit & Delete</th>
        </thead>
        <tbody>
            <?php while ($rows = $result_read->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['father_name']; ?></td>
                <td><?php echo $rows['contact']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['address']; ?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='dlte.php?id=<?=$rows["id"]; ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } else { echo "<span style='color: red;'>No Record Found!</span>"; } ?>
</div>
</div>
</body>
</html>
<?php $conn->close(); ?>
