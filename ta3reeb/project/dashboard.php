<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Welcome to Dashboard</title>
</head>
<body>
    <header class="navbar">
        <div class="logo">
            تعريب
        </div>
        <div class="logout">
            <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div>
    </header>
    <section class="panel">
        <div class="header">
            <h1>اهلا بك في موقع تعريب</h1>
            <p>قم بتعريب فيديوهاتك بسهولة</p>
        </div>
        <div class="forms">
            <input type="url" placeholder="Enter Your Youtube Link ">
            <button onclick="clickme_to_do_fetch()">Download SRT file</button>
        </div>
        <div>
            <a class="download" style="display: none;" href="download.php">Download SRT File</a>
        </div>

        
    </section>
    <script src="./js/script.js"></script>
</body>
</html>