// ----------------------DIVS-ACORDEON-----------------------

var coll = document.getElementsByClassName("accordion");
for (var i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function(evnt) {
    const currClassList = evnt.target.classList;
    if (currClassList.contains('collapsed')) {
        evnt.target.classList.remove("collapsed");
        var content = evnt.target.nextElementSibling;
        content.style.maxHeight = null;
    } else {
      for (var j = 0; j < coll.length; j++) {
           coll[j].classList.remove("collapsed")
           coll[j].nextElementSibling.style.maxHeight = null;
      }
      this.classList.toggle("collapsed");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      }
    }
  });
}

