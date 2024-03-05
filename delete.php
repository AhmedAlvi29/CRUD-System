<?php include 'data.php'; ?>
<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
<?php 
if (isset($_POST['deletebtn'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM student_data WHERE id='$id'";

    $result_read = $conn->query($sql);
    header('location: http://localhost/crud');
}
?>
</div>
</div>
</body>
</html>
