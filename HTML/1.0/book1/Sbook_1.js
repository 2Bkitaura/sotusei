$("#flipbook").turn({
    when:{
        turning: function(e,page,view){
            const book = $(this),
            pages=book.turn("pages");
             if (page >= 2) $("#flipbook .p2").addClass("fixed");
            else $("#flipbook .p2").removeClass("fixed");

            if (page < book.turn("pages"))
                $("#flipbook .p7").addClass("fixed");
            else $("#flipbook .p7").removeClass("fixed");

        }
    }
});
