$("#flipbook").turn({
    when:{
        turning: function(e,page,view){
            const book = $(this),
            pages=book.turn("pages");
             if (page >= 2) $("#flipbook .p2").addClass("fixed");
            else $("#flipbook .p2").removeClass("fixed");
            

            const maxPage = book.turn("pages") - 1;
            console.log(page, maxPage);
            if (page <= maxPage)
                $("#flipbook .p"+maxPage).addClass("fixed");
            else $("#flipbook .p"+maxPage).removeClass("fixed");

        }
    }
});
