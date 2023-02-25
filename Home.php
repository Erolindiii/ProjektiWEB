<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad News Eagles</title>
    <script src="https://kit.fontawesome.com/3606fe9745.js" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="WebStyle.css">
<body>
    <?php include '../ProjektiWEB/view/header.php'?>
    <main>
    <div class="slider">
        <div class="images">
            <img src="win-against-faze.png" alt="" id="imgsh"><img src="image1.jpg" alt="" id="imgsh"><img src="image2.jpg" alt="" id="imgsh"><img src="image3.jpg" alt="" id="imgsh">
        </div>
    </div>
    <div class="buttons">
        <label onclick="showPht1()"></label>
        <label onclick="showPht2()"></label>
        <label onclick="showPht3()"></label>
        <label onclick="showPht4()"></label>
        <script src="SlideShowHome.js"></script>
    </div>
    </main>
    <div class="underslider">
        <div class="content">
            <div class="content1">
                <img src="win-against-faze.png" alt="bNE" >
                <p>Win against faze </p>
            </div>
                <div class="content2">
                    <img src="day-one-riomajor.png" alt="bNE" >
                    <p>Day one Rio Major </p>
                </div>
                <div class="content3">
                    <img src="challenger-stage-day1.png" alt="bNE" >
                    <p>Challenger Stage Day 1 </p>
                </div>  
        </div>
    </div>
    <?php include '../ProjektiWEB/view/footer.php'?>
</body>
</html>