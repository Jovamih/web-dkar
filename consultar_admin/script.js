var selector = document.getElementById("categoria-div");
var input_name = document.getElementById("input-nombre");

var check_name = document.getElementById("check_name");
var check_category = document.getElementById("check_category");

function showInputName() {


    selector.style.display = "none";
    input_name.style.display = "block";
    check_name.checked = true;
    check_category.checked = false;

}

function showInputCategory() {

    selector.style.display = "block";
    input_name.style.display = "none";

    check_name.checked = false;
    check_category.checked = true;
}