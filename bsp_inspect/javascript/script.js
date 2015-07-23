$(document).ready(function() {
    $(".bsp_inspect_search, .bsp_inspect_close").click(function(){
        $(".bsp_inspect_container").toggle();
        $(".bsp_inspect_search_field").focus();
    });
    $(document).keyup(function(e) {
        if (e.keyCode == 27) {
            $(".bsp_inspect_container").hide();
        }
    });
});
