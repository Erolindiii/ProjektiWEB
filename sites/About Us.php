<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://kit.fontawesome.com/3606fe9745.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../images/bNE_Logo-noBG.ico" type="image/x-icon">
</head>
<link rel="stylesheet" href="../WebStyle.css">
<body>
        <?php include '../view/header.php'?>
        <div class="about">
            <div class="aboutus-head">
                <h1>BAD NEWS EAGLES</h1><br>
            </div>
            <div id="aboutus">
                <br>
            </div>
        </div>
        <script>
var aText = new Array(
"Bad News Eagles është një ekipë profesionale në kategorinë e lojrave eSports posaqërisht në lojën e Counter Strike: Global Offensive", 
"Kjo ekipë është krijuar me 5 shkurt të vitit 2022 pas largimit nga ekipi Team BLINK. Formimi i kësaj ekipe është bërë nga 5 superlojtar juanflatroo,sinnopsyy,rigoN,gxx- dhe SENER1",
"Prej fillimit të kësaj ekipe Bad News Eagles ka pasur trajner Klesti 'stikle-' Kola ku para disa kohe u tërhoq nga pozita e trajnerit dhe SMM(Social Media Menager)",
"Ndërsa menagjer i ekipës Bad News Eagles është anglezi James 'BanKs' Banks ",
"Edhe pse një ekipë pa ndonjë organizatë pas saj BNE ka arritur shumë duke filluar nga PGL Major Antwerp 2022 e deri te Intel Extreme Masters Rio Major 2022",
"Ëndrra e madhe për të luajtur në evente të mëdha siq janë Majors që mbahen nëpër botë e shtynë ekipën BNE për të hyrë në garë për në PGL Major Antwerp 2022 ku nga loja",
"profesionale që e bënë aty dhe me arritjet e larta ata arritën që të kualifikoheshin edhe për Majorin tjetër që u mbajt në Rio de Janeiro ku u mbajt IEM Rio Major 2022",
"Këtu ekipa BNE tregoi se sa profesional janë dhe se sa të shkathët poashtu dhe kështu filluan kualifikimet për Legends Stage ku nga grupi që ishin BNE",
"ata treguan sukses të madh duke fituar 3 lojë nga 3 që ishin dhe u renditën të parët në ranglistën e grupit të tyre dhe pas përfundimit të kualifikimeve BNE ishte ndër ekipet e",
"pakëta që u kualifikuan pa asnjë humbje dhe kështu vazhdoi rrugëtimi i djelmoshave tonë ku në lojët që u mbajtën në Legends Stage fituan vetëm një lojë nga 3 sa ishin",
"por atë fitore e realizuan kundër ekipës më të njohur dhe më të fuqishme në botë ku deri në atë kohë ishte në ranglistë e para",
"ku me këtë kualifikim ekipës i rezervohet vendi për në Majorin tjetër i cili mbahet në Francë, Paris në vitin 2023"

);
var iSpeed = 75;
var iIndex = 0; 
var iArrLength = aText[0].length; 
var iScrollAt = 20;
 
var iTextPos = 0;
var sContents = '';
var iRow;
 
function typewriter()
{
 sContents =  ' ';
 iRow = Math.max(0, iIndex-iScrollAt);
 var destination = document.getElementById("aboutus");
 
 while ( iRow < iIndex ) {
  sContents += aText[iRow++] + '<br />';
 }
 destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
 if ( iTextPos++ == iArrLength ) {
  iTextPos = 0;
  iIndex++;
  if ( iIndex != aText.length ) {
   iArrLength = aText[iIndex].length;
   setTimeout("typewriter()", 500);
  }
 } else {
  setTimeout("typewriter()", iSpeed);
 }
}
typewriter();
        </script>

<div class="photo-foraboutus"><br>
    <a href="https://gjirafa50.com/"><img src="../images/partner-logo.png" alt="" style="height: 50px;"></a>
</div>
<?php include '../view/footer.php'?>
</body>
</html>