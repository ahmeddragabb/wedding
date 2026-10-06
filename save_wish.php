```php
<?php

require_once "db.php";


if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    header("Location: index.php");

    exit;

}


$name =
    trim($_POST["name"] ?? "");


$message =
    trim($_POST["message"] ?? "");


if ($name === "" || $message === "") {

    die("Please fill in all fields.");

}


$stmt = $conn->prepare(
    "INSERT INTO wishes (name, message)
     VALUES (?, ?)"
);


if (!$stmt) {

    die(
        "Database error: "
        . $conn->error
    );

}


$stmt->bind_param(
    "ss",
    $name,
    $message
);


if ($stmt->execute()) {

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Thank You</title>


<style>

* {

    margin: 0;
    padding: 0;

    box-sizing: border-box;

}


body {

    min-height: 100vh;

    display: flex;

    justify-content: center;

    align-items: center;

    padding: 25px;

    font-family: Arial, sans-serif;

    background:

        radial-gradient(
            circle at top left,
            #f8dce4,
            transparent 35%
        ),

        radial-gradient(
            circle at bottom right,
            #f4cbd7,
            transparent 35%
        ),

        #fffafa;

}


.success-card {

    width: 100%;

    max-width: 430px;

    padding: 55px 30px;

    text-align: center;

    background:
        rgba(255,255,255,0.88);

    border:
        1px solid #efd0d9;

    box-shadow:
        0 25px 60px
        rgba(125,64,86,0.13);

    animation:
        appear 0.6s ease;

}


.heart {

    font-size: 45px;

    color: #c77991;

    margin-bottom: 20px;

}


.small {

    font-size: 10px;

    letter-spacing: 4px;

    color: #a45d75;

    margin-bottom: 20px;

}


h1 {

    font-family: Georgia, serif;

    font-weight: normal;

    font-size: 34px;

    color: #743e51;

    margin-bottom: 20px;

}


p {

    color: #a87988;

    font-size: 14px;

    line-height: 1.9;

    margin-bottom: 30px;

}


.back-button {

    display: inline-block;

    padding: 15px 28px;

    border-radius: 50px;

    background: #bd6d87;

    color: white;

    text-decoration: none;

    font-size: 10px;

    letter-spacing: 2px;

    transition: 0.3s ease;

}


.back-button:hover {

    background: #a95773;

    transform: translateY(-3px);

}


@keyframes appear {

    from {

        opacity: 0;

        transform:
            translateY(20px);

    }

    to {

        opacity: 1;

        transform:
            translateY(0);

    }

}

</style>

</head>


<body>


<div class="success-card">


    <div class="heart">
        ♥
    </div>


    <div class="small">
        WITH LOVE
    </div>


    <h1>
        Thank You!
    </h1>


    <p>

        Your wishes have been
        saved successfully.

        <br>

        Thank you for sharing
        your love and happiness
        with us.

    </p>


    <a
        href="index.php"
        class="back-button">

        BACK TO INVITATION

    </a>


</div>


</body>

</html>

<?php

} else {

    echo
        "Error saving wish: "
        . $stmt->error;

}


$stmt->close();

$conn->close();

?>
```
