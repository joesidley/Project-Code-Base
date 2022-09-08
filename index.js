
function myFunction2() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function myFunction3() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
function filterTable() {
  // Variables
  let dropdown, table, rows, cells, origin, filter;
  dropdown = document.getElementById("originDropdown");
  table = document.getElementById("myTable");
  rows = table.getElementsByTagName("tr");
  filter = dropdown.value;

  // Loops through rows and hides those with countries that don't match the filter
  for (let row of rows) { // `for...of` loops through the NodeList
    cells = row.getElementsByTagName("td");
    origin = cells[4] || null; // gets the 2nd `td` or nothing
    // if the filter is set to 'All', or this is the header row, or 2nd `td` text matches filter
    if (filter === "Select Species: All" || !origin || (filter === origin.textContent)) {
      row.style.display = ""; // shows this row
    }
    else {
      row.style.display = "none"; // hides this row
    }
  }
}

function filterFromName() {
  var tableData, tr, td, i;
  var input, filterParams, table, txtValue;
  input = document.getElementById("myInput");
  filterParams = input.value.toUpperCase().split(",");
    //var filterParams = //text.toUpperCase().split( "|" );         //split by | to get array of search parameters
    tableData = document.getElementById('myTable');
    tr = tableData.getElementsByTagName('tr');
    // For each table row, hide those who don't match the search text
  //console.log(filterParams)
    for (i = 0; i< tr.length; i++) {
        td = tr[i].getElementsByTagName('td')[1]; // query the Alias column
      //console.log(td)
        if (td) {
            var tdValue = td.innerHTML.toUpperCase();
          //console.log(tdValue)
          for(j=0;j< filterParams.length; j++){
            if (tdValue.includes(filterParams[j])){
              console.log("4")
              tr[i].style.display="";
              continue;
            }
            else{
              tr[i].style.display ="none";
              break;
            }
          }
          
            //var isMatched = filterParams.filter( function( val ){ return tdValue.indexOf( val ) > -1 }); //check if any val in filterParam array is matching the tdValue
           // if ( isMatched.length ) //check length of filtered resultset
               // tr[i].style.display = "";
           // else
              //  tr[i].style.display = "none";
        }        
    }
}