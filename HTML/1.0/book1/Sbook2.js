$(function(){
    $('#katudon_turn').turn({});
 
    $('#prevpage').click(function(){
        $('#katudon_turn').turn('previous');
    });
 
    $('#nextpage').click(function(){
        $('#katudon_turn').turn('next');
    });
 
});