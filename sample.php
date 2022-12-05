
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="Send_mail.php">
    Email Tujuan: <input type="email" name="email" id="email"><br><br>
    Judul Email: <input type="text" name="subject" id="judul"><br><br>
    Pesan: <textarea name="body" id="pesan" rows="8" cols="20"></textarea><br><br>
    <button type="submit" name="submit">Kirim Email!</button>
</form> 
</body>
</html>