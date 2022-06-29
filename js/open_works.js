
var modal_work_1 = document.getElementById('modal_work_1');
var modal_work_2 = document.getElementById('modal_work_2');
var modal_work_3 = document.getElementById('modal_work_3');
var modal_work_4 = document.getElementById('modal_work_4');

var work1 = document.getElementById("work_1");
var work2 = document.getElementById("work_2");
var work3 = document.getElementById("work_3");
var work4 = document.getElementById("work_4");


work1.onclick = function() {
    modal_work_1.style.display = "block";
}
work2.onclick = function() {
    modal_work_2.style.display = "block";
}
work3.onclick = function() {
    modal_work_3.style.display = "block";
}
work4.onclick = function() {
    modal_work_4.style.display = "block";
}

jQuery(document).ready(function($){
    $(document).ready(function(){
        $('body').on('click', '.modal', function(){
        $(this).hide();
        });
    });
});

