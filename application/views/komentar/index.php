
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Komentar</title>
<html lang="en">
<head>
<meta charset="UTF-8">

<body>

</head>
<div style="margin-left: 500px; margin-top: 100px;">
<form action="<?= site_url('Komentar/simpanKomentar') ?>" method="POST">
<label>Name</label>
<br>
<input type="text" name="name">
<br><br>
<label>Komentar</label>
<br>
<textarea name="komentar" cols="30" rows="10"></textarea> <br><br>
<br><?= $image; ?>

<br><label for="">Captcha</label>

<br><input type="text" name="captcha">
<br>
<br><button type="submit">Submit</button>
</form>
</div>
</body>
 </html>