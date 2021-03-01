// highlight current day on opeining hours
$(document).ready(function() {
$('.opening-hours li').eq(new Date().getDay()).addClass('today');
});

//thank you https://bootsnipp.com/snippets/5K3o7

function changeChildrens(a) {
    document.getElementById("Children").src=a;

}

function changeTeen(a) {
    document.getElementById("teen").src=a;

}
function changeCurbside(a) {
    document.getElementById("curbside").src=a;

}
