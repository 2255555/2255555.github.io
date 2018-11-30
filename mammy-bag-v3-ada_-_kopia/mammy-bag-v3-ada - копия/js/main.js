$(document).ready(function() {

    $('.i_phone').mask('+38 (999) 999-99-99');
    $("nav .pull").on('click', function(e) {
        e.preventDefault();
        $("nav ul").slideToggle();
    });
     
    $("body").on('click', "*[pop]", function() {
        $(".pop").removeClass("active")
        $("html").removeClass("off-scroll")
        $(".pop iframe").attr("src", "")
        var next_pop = $(this).attr("pop")
        if (next_pop && next_pop != "") {
            $(".pop" + next_pop).addClass("active")
            $("html").addClass("off-scroll")
            new_title = $(this).attr("pop-title")
            new_btn = $(this).attr("pop-btn")
            new_video = $(this).attr("pop-video")
            var new_attr = $(this).attr("link-ga")
            $(".pop" + next_pop + " button").attr('data-ga', new_attr)
            if (new_title && new_title != "") {
                $(".pop" + next_pop + " h2").text(new_title)
            }
            if (new_btn && new_btn != "") {
                $(".pop" + next_pop + " button").text(new_btn)
            }
            if (new_video && new_video != "") {
                $(".pop" + next_pop + " iframe")[0].src = new_video + "?autoplay=1";
            }
        }
        return false
    })

    $(".box-modal .coll a").on('click', function(e) {
        e.preventDefault();
        $(".box-modal .coll ul").slideToggle();
    });

    $(".box-modal li").on('click', function(e) {
        e.preventDefault();
        $(".box-modal .coll ul").slideToggle();
        $(".box-modal .coll a i").text($(this).text());
        $(".box-modal .coll a").attr('class', '');
        $(".box-modal .coll a").attr('class', $(this).attr('class'));
        $("#color").val($(this).text());
    });

    $(".btn-pay").on('click', function(e) {
        e.preventDefault();
        $('#window-order').arcticmodal();
        var color = $(this).attr('data-color');
        var class_a = $(this).attr('data-class');
        $('#t_color').attr('class', '');
        $('#t_color').addClass(class_a);
        $('#t_color i').html(color);
        $("#color").val(color);
    });




});

function closeModal() {
    $('#window-thanks').arcticmodal('close');
}