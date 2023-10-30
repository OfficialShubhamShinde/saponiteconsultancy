<?php $currentPage = 'careers'; ?>
<?php include("_header.php"); ?>
<?php include("_dbConnect.php"); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '
        <script>
            alert("Thanks for Applying")
        </script>
        ';
}
?>
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

    .input-field,
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
<div class="section-title text-center mb-5 mt-5">
    <h2>Join Our Team</h2>
</div>
<main>
    <section class="contact-form">
        <!-- <h2>Get in Touch</h2> -->
        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Name*</label>
                <input type="text" class="input-field" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" class="input-field" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="email">Contact Number*</label>
                <input type="number" id="email" class="input-field" name="email" required>
            </div>
            <div class="form-group">
                <label for="email">Position*</label>
                <input type="text" id="email" class="input-field" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" ></textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Attach Resume*</label>
                <input type="file" id="formFile" required>
            </div>
            <div class="mb-4 mt-4">
                <label for="formFile" class="form-label">Cover Letter</label>
                <input type="file" id="formFile">
            </div>
            <center><button type="submit">Submit</button></center>
        </form>
    </section>
</main>

<?php include("_footer.php"); ?>