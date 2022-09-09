/** Stiky Nav**/
let nav=$(".navbar");
let go=$(".gotop");
let navigation_bar=$(".navi")
$(window).scroll(function(){
    let top=$(".topbar").offset().top;
    console.log(top);
    if($(window).scrollTop()>top){
        navigation_bar.removeClass("op-0");
        nav.addClass("sticky");
        go.removeClass("op-0");
    }
    else{
        navigation_bar.addClass("op-0");
        nav.removeClass("sticky");
        go.addClass("op-0");
    }
});

