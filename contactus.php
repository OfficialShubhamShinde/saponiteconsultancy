<?php $currentPage = 'contactus'; ?>
<?php include("_header.php"); ?>
<?php include("_dbConnect.php"); ?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $insertContactdata = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
    $quesyInsertContactData = mysqli_query($conn, $insertContactdata);

    if ($quesyInsertContactData) {
        echo '
        <script>
            alert("Thanks for connecting")
        </script>
        ';
    }
    else{
        echo '
        <script>
            alert("Something wents wrong!")
        </script>
        ';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form {
            text-align: left;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="section-title text-center mb-5">
        <h2>Contact Us</h2>
    </div>

    <main>
        <section class="contact-form">
            <!-- <h2>Get in Touch</h2> -->
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>


</body>

</html>




<?php include("_footer.php"); ?>