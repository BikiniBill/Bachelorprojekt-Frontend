
var i = 0;

function addStudent() {
  var table = document.getElementById("studentTable");
  var row = table.insertRow(1);
  var cell7 = row.insertCell(0);
  var cell6 = row.insertCell(0);
  var cell5 = row.insertCell(0);
  var cell4 = row.insertCell(0);
  var cell3 = row.insertCell(0);
  var cell2 = row.insertCell(0);
  var cell1 = row.insertCell(0);

  i++;

  cell1.innerHTML = i.valueOf();
  cell2.innerHTML = document.getElementById("Vorname").value + " " +document.getElementById("Nachname").value;
  cell3.innerHTML = document.getElementById("Arbeitsgruppe").value;
  cell4.innerHTML = document.getElementById("Martrikulationsnummer").value;
  cell5.innerHTML = '<input type="checkbox" value="">';
  cell6.innerHTML = '<select class="form-controll" id="sell"><option>-----</option><option>bestanden</option><option>nicht bestanden</option></select>';
  cell7.innerHTML = '<div class="form-group"><textarea class="form-controll" rows="2" id="comment"></textarea></div>';


  /*  clear on submit */
  document.getElementById("Vorname").value="";
  document.getElementById("Nachname").value="";
  document.getElementById("Arbeitsgruppe").value="";
  document.getElementById("Martrikulationsnummer").value="";

}

function deleteStudent() {
  document.getElementById("studentTable").deleteRow(1);
}
