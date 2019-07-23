// When the user click's on the button, toggle between showing
// or hiding the sub-system menu
function myFunction(){
  document.getElementById('myDropdown').classList.toggle('show');
}
// To close the dropdown menu when user clicks outside of it
wiwndow.onclick = function(event){

  if(!event.target.matches(.dropbtn)){

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;

    for(i = 0; i < dropdowns.length; i++){
      var openDropdown = dropdowns[i];
      
      if(opendropdown.classList.contains('show')){
        openDropdown.classList.remove('show');
      }

    }
  }
}
