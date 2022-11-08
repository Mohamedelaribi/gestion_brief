var button = document.getElementById('button');
var editForm = document.getElementById('editForm');

var editDev = document.getElementById('editDiv');

button.addEventListener('click',function(){
    editForm.classList.add("active");
    editDev.style.display = "none" ;

});


