(function ($) {
    
   
    $(".sidebar").on("click", '.wantToWach', function(event){
        
        var id = $(this).data('movieid');
        var name = $("#movie-name-" + id).text();
        //alert(name);
     
        $.get("home/ajax_friends" , {
            'movie_title':name
        },
        function(data) {
            //alert(data);
            $( "#dialog" ).html(data);
        });
        // alert(2);
        $( "#dialog" ).dialog({
            autoOpen: false,
            show: "blind",
            width: 600,
            hide: "explode",
            modal: true
        });
        $( "#dialog" ).dialog( "open" );
        
    });
        
    
//    function showToWatchBox(){
//        $( "#dialog" ).dialog({
//            autoOpen: false,
//            show: "blind",
//            hide: "explode"
//        });
//        $( "#dialog" ).dialog( "open" );
//    }

//    $(document).on('click', '.btn', function() {
//    
//        alert(id,name);
//        loadThumbnail(name, id);
//
//        $(".movie-sidebar:visible").hide();
//        $('#click-on-movie').remove();
//        $("#movie-" + id).show();
//    });
//
//    $( "#dialog" ).dialog({
//        autoOpen: false,
//        show: "blind",
//        hide: "explode"
//    });
//    $( "#wantToWach" ).click(function() {
//        $( "#dialog" ).dialog( "open" );
//        return false;
//    });
}(window.jQuery));
function showMap(){
    var id = $(this).data('movieid');
    var name = $("#movie-name-" + id).text();
    alert(name);
    $.get("foursquare/", { },
        function(data) {
            $('#ajaxFriends').hide();
            $('#ajaxMap').html(data).show();
                
        });
}

function inviteFriends(form) {
    var btn = form.children()[0];
    var id = jQuery(btn).data('movieid');

    var name = $("#movie-name-" + id).text();
     
    $.get("home/ajax_friends" , {
        'movie_title':name
    },
    function(data) {
        $( "#dialog" ).html(data);
    });

    $( "#dialog" ).dialog({
        height: 460,
        width: 700,
        modal: true,
        autoOpen: false,
        draggable: false,
        resizable: false    
    });
    $('#dialog').dialog("option", "title", "Watch " + name + " with: ");
    $("#dialog").dialog("open");

}