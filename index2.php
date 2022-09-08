<html> 
    <head>
    <title>Glycan3DB</title>
    <script type="text/javascript" src="SCRIPTS/index.js"> </script>
    <link rel="stylesheet" type="text/css" href="STYLES/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <meta header = "Glycan3DB">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    </head>
    <div class=".colorname">
<ul>
  <li><a href="#home">Glycan3DB</a></li>
  <li style="float:right"><a class="active" href="#about">><img src="../imgjmol/logopng.png" style="width:20px;height:20px;"></a></li>
  <li style="float:right"><a class="active" href="suggest.html">Suggest a New Glycan</a></li>
</ul>

<div class="header1"> <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="imgjmol/KPCarousel.png"style="width:60%">
  <div class="text">Klebsiella Pneumoniae</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="imgjmol/ECCarousel.png" style="width:60%">
  <div class="text">Escherichia Coli</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="imgjmol/SPCarousel.png"style="width:60%">
  <div class="text">Streptococcus Pneumoniae</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
<body> 
<br>
  Replace α with a, β with b and → with ->
  <br>
  <br>
  If you would like to search for multiple substructures at once, separate them with a ",". i.e Glcp,Manp
  
  <br> <br>
  Use the dropdown to filter by species
<br>
  <br>
  
  <br>
</body>


<input type="text" id="myInput" style="width: 1200px;"onkeyup="filterFromName()" placeholder="&#x1F50E;&#xFE0F;   Search for substructures of chemical representation..">
<select id="originDropdown" oninput="filterTable()" style="width:200px;font-size:18px">
  <option>Select Species: All</option>
  <option><i>Klebsiella pneumoniae</i></option>
  <option><i>Escherichia coli</i></option>
</select>

    <body> 
        <table id="myTable">
            <tr>
                <th> Antigen ID </th>
                <th> Chemical Representation </th>
                <th> 2D Representation </th>
                <th> Repeated Unit Size </th>
                <th> Species of Origin </th>
                <th> Link to Paper </th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost:3306","root","MyNewPass","db_");
            $sql = "SELECT * FROM db_.new_table";
            $result = $conn -> query($sql);
            
            if ($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>" . $row["antigenid"] . "</td><td>" . $row["chemicalrepresentation"] . "</td><td>" .$row["twodrepresentation"] . "</td><td>" .$row["repeatedunitsize"] . "</td><td>" .$row["speciesorigin"]. "</td><td>" .$row["doilink"]  . "</td></tr>";
                }
            }
            else{
                echo "No results";
            }
            $conn->close();
            ?>
        </table>
    </body>
          </div>
</html>