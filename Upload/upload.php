<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="upload_photo.css">
</head>
<body>

    <div class="upperContainer">

        <header class="sign-in-header">

            <a href="../index.html">
                <img src="../images/Logo.jpg" alt="Camera Icon" class="camera-icon" />
            </a>
        </header>

        <div class="form-container">
            <h1>Upload Photo!</h1>

            <form action = "./dboUpload.php" method = "POST" enctype = "multipart/form-data">
                <div class="input-group">
                    <input type = "text" name="username" placeholder="username">
                </div>
                <div class="input-group">
                    <input type = "text" name="location_name" placeholder="location">
                </div>
                <div class="input-group">
                    <label for="file-upload">ana magaria</label>
                    <input type="file" name="file">
                </div>
                <button type="submit" class="signinBttn" name = "submit">Upload</button>
            </form>
        </div>

        <footer class="myFooter">
            <p>travel with QR gallery</p>
            <p><a href="mailto:QRgallery@gmail.com">QRgallery@gmail.com</a></p>
            <p><a href="https://QRgallery.com">something.com</a></p>
        </footer>
    </div>

</body>
</html>
