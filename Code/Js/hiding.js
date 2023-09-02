function myFunction(cid,tid) {
    
    let checkBox = document.getElementById(cid.id);

    let text = document.getElementById(tid.id);
  
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  }

