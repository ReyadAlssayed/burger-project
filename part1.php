<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="half" content="white half and green half ">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="part1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <form method="post" action="">
        <title>Reyad mohammed alssyed</title>
        <div class="all-page">
            <div class="blue-div"><p class="reyad">. Delicious Pizza [1]</p> </div>
            <div class="white">
                <div class="box1">
                    <input type="text" placeholder="Your Name" maxlength="30" class="name" name="Name"><br>
                    <input type="number" placeholder="Your Phone" maxlength="40" name="Pass"><br>
                    <input type="number" placeholder="Number of pieces" maxlength="30" class="pieces" name="Num"><br>
                    <button name="Submit">Sign in</button>
                    <?php 

                    if (isset($_POST['Submit'])) {
                        echo "hello";
                    }
                    print 'why you dont print ';
                    
                    ?> 
                </div>
            </div>
        </div>
    </form>
</body>
</html>
