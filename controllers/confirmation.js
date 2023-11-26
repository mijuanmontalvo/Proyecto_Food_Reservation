function confirmation(e) {
if (confirm("Are you sure?")){
    return true;
} else {
    e.preventDefault();
}

}

let linkDelete = document.querySelectorAlLL(".table__item__link");
for (var i=0; i<linkDelete.length; i++){
    linkDelete[i].addEventListener('click', confirmation);
}