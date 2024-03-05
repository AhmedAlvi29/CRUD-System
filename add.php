<?php 
include 'data.php'; 
include 'header.php';

if (isset($_POST['submit'])) {

$name = strip_tags($conn->real_escape_string($_POST['name']));
$father_name = strip_tags($conn->real_escape_string($_POST['father_name']));
$contact = strip_tags($conn->real_escape_string($_POST['contact']));
$email = strip_tags($conn->real_escape_string($_POST['email']));
$address = strip_tags($conn->real_escape_string($_POST['address']));
$class = strip_tags($conn->real_escape_string($_POST['class']));
$phone = strip_tags($conn->real_escape_string(sha1($_POST['phone'])));
     

$sqli3 = "INSERT INTO data(name,father_name,contact,email,address,class_id,phone) VALUES('$name','$father_name','$contact','$email','$address','$class','$phone')";

$result = mysqli_query($conn,$sqli3);

header('location:http://localhost/crud/index.php');

 } 

?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>father_name</label>
            <input type="text" name="father_name" />
        </div>
        <div class="form-group">
            <label>contact</label>
            <input type="text" name="contact" />
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="text" name="email" />
        </div>
        <div class="form-group">
            <label>address</label>
            <input type="text" name="address" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php 

                    $sql1 = 'SELECT * FROM class_id';

                    $result = mysqli_query($conn,$sql1);
                           
                      while ($data = $result->fetch_array()) 
                        {
                            ?>
                                <option value="<?php echo $data['id'] ?>"><?php echo $data['class'] ?></option>
                                
                            <?php
                        }

                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" />
        </div>
        <input class="submit" type="submit" value="Save" name="submit"  />
    </form>
</div>
</div>
</body>
</html>
