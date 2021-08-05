var modal = document.getElementById("subm1");
var pr = document.getElementById("subp1");
var span = document.getElementsByClassName("closeMen")[0];
pr.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}