<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formHandeler.php" method="post">
    <label for="firstName">FirstName</label>
    <input type="text" id="firstName" name="firstName" placeHolder="firstname....">

    
    <label for="lastNAme">FirstName</label>
    <input type="text" id="lastName" name="lastName" placeHolder="Lastname....">

    <label for="favouritePet">Favourite pet</label>
    <select id="favouritePet" name="favouritePet">
        <option value="None">None</option>
        <option value="Dog">Dog</option>
        <option value="Cat">Cat</option>
        <option value="Bird">Bird</option>
    </select>

    

    <button type="submit">Submit</button>
    </form>
</body>
</html>