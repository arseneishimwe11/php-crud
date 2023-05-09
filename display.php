<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="display.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-xxxxxx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">

</head>
<body>
    <div class="display">
    <h1 class="user1">USER MANAGEMENT SYSTEM</h1>
    <table>
        <tr>
            <th class="text-black">#</th>
            <th class="text-black">First Name</th>
            <th class="text-black">Last Name</th>
            <th class="text-black">Email</th>
            <th class="text-black">Gender</th>
            <th class="text-black">Action</th>
        </tr>

        <?php
        $sql = "SELECT * FROM users";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $first_name = $row['fname'];
                $last_name = $row['lname'];
                $email = $row['email'];
                $gender = $row['gender'];
                echo "
                    <tr>
                        <td>$id</td>
                        <td>$first_name</td>
                        <td>$last_name</td>
                        <td>$email</td>
                        <td>$gender</td>
                        <td class='links'>
                            <a href='update.php?updateid=$id' class='bg-green-400 text-base px-2 py-1 border-none rounded-xl text-slate-100 font-bold items-right w-24 edit-button'>Update</a>
                            <a href='delete.php?deleteid=$id' class='bg-red-500 text-base px-2 py-1 border-none rounded-xl text-slate-100 font-bold w-24 delete-button'>Delete</a>
                        </td>
                    </tr>";
            }
        } else {
            echo '<tr><td colspan="6">No data found</td></tr>';
        }
        ?>
    </table>

    <div class="user">
        <a href="user.php"><i class="fas fa-user-secret"></i> New User</a>
        <a href="pdf.php">Export to PDF <i class="fas fa-book"></i></a>
        <form action="csv.php" method="post">
            <div>
                <input type="submit" name="export" value="Download CSV" id="csv"/>
            </div>
        </form>
    </div>
    </div>
</body>
</html>
