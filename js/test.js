function move(seq){
    var offset = $("#tab"+seq).offset();
    $('html,body').animate(600, {scrollLeft : offset.left});
}
