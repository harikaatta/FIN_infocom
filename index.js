function deleteRow(row) {
  var i = row.parentNode.parentNode.rowIndex;
  if (i > 1) {
    document.getElementById("Qtable").deleteRow(i);
  } else {
    alert("Table should contain 1 row atleast.");
  }
  $("#rownum").val(i-1); alert(i-1);
}

function insRow() {
  //console.log('hi');
  var x = document.getElementById("Qtable");
  var new_row = x.rows[1].cloneNode(true);
  var len = x.rows.length;
  new_row.cells[0].innerHTML = len;

  var inp1 = new_row.cells[1].getElementsByTagName("input")[0];
  inp1.id += len;
  inp1.name += len;
  inp1.value = "";
  var inp2 = new_row.cells[2].getElementsByTagName("input")[0];
  inp2.id += len;
  inp2.name += len;
  inp2.value = "";
  var inp3 = new_row.cells[3].getElementsByTagName("input")[0];
  inp3.id += len;
  inp3.name += len;
  inp3.value = "";
  var inp4 = new_row.cells[4].getElementsByTagName("input")[0];
  inp4.id += len;
  inp4.name += len;
  inp4.value = "";
  x.appendChild(new_row);
  $("#rownum").val(len);
}

function handleResponse (responseObject) {
    if (responseObject.ok) {
      if(responseObject.messages || responseObject.coursearr || responseObject.schoolarr || responseObject.yeararr || responseObject.percentagearr){
        const li = responseObject.messages;
        const courseli = responseObject.coursearr;
        const schoolarrli = responseObject.schoolarr;
        const yeararrli = responseObject.yeararr;
        const percentagearrli = responseObject.percentagearr;
        location.href = 'dashboard.php?data='+li+"&coursearr="+courseli+"&schoolarr="+schoolarrli+"&yeararr="+yeararrli+"&percentagearr="+percentagearrli;
      }
      else{
        //location.href = 'dashboard.html';
      }
    } else {
        while (form.messages.firstChild) {
            form.messages.removeChild(form.messages.firstChild);
        }

        responseObject.messages.forEach((message) => {
            const li = document.createElement('li');
            li.textContent = message;
            form.messages.appendChild(li);
        });

        form.messages.style.display = "block";
    }
}
