function changeTheme()  {
    let theme = document.getElementById("theme");
    if (theme.getAttribute("href") == "css/lightMode.css") {
      theme.setAttribute("href", "css/darkMode.css");
    }
    else {
      theme.setAttribute("href", "css/lightMode.css");
    }
}

function displayCredits(){
  document.getElementById('demo').innerHTML = 17;
}

function hideRow(id){
  var row = document.getElementById(id);
  row.style.visibility = "hidden";
}

function showRows(){
  let rowNum;
  let row;
  for (let i = 1; i < 9; i++){
    rowNum = "row" + i;
    // console.log("rowNum", rowNum);
    row = document.getElementById(rowNum);
    // console.log("row", row);
    row.style.visibility = "visible";
  }
}

function displaySources(){
  str = '<a href="https://stackoverflow.com/questions/20676278/hide-and-show-table">Stack Overflow hide and show table</a><br>';
  str2 = '<a href="https://www.w3schools.com/jsref/jsref_getcomputedstyle.asp">W3 Schools Get computed style</a><br>';
  document.getElementById("sources").innerHTML = str + str2;
}

function changeMenu(){
  let menu = document.getElementsByClassName("menu")[0];
  let position = window.getComputedStyle(menu).float;
  if (position == "left"){
    menu.style.float = "right";
  }
  else {
    menu.style.float = "left";
  }
}

function showTable(){
  var table = document.getElementById("courses");
  if (table.style.display == "none"){
    table.style.display = "block";
  } else {
    table.style.display = "none";
  }
}

function displayDate() {
    const date = new Date();
    let month;
    switch (date.getMonth()) {
      case 0:
        month = "January";
        break;
      case 1:
        month = "February";
        break;
      case 2:
        month = "March";
        break;
      case 3:
        month = "April";
        break;
      case 4:
        month = "May";
        break;
      case 5:
        month = "June";
        break;
      case 6:
        month = "July";
        break;
      case 7:
        month = "August";
        break;
      case 8:
        month = "September";
        break;
      case 9:
        month = "October";
        break;
      case 10:
        month="November";
        break;
      case 11:
        month="December";
        break;
      default:
        month = "unknown";
    }
    document.getElementById("date").innerHTML = month + " "+ date.getDate()+ " " + date.getFullYear();
}