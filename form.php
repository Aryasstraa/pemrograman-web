<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="aksi.php" method="get" >
        <input type="text" name ="nama" id="" placeholder="NAMA">
        <input type="text" name ="nim" id="" placeholder="NIM"><br>
        
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">JavaScript</label><br>
        
        <input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
        <label for="vehicle1"> I have a bike</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
        <label for="vehicle2"> I have a car</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle[]" value="Boat">
        <label for="vehicle3"> I have a boat</label><br>
        
        
        
        <input type="submit" value= "Kirim"><br>
        <input type="button" onclick="alert('NAMA dan NIM Sudah Dimasukan')" value="Click Disini!">
    </form>
</body>
</html>