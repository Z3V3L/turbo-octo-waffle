

$(function() {

    // DRAGGABLE

    $('.box').draggable();

    $('#box1').draggable({ scroll: true, revert: 'invalid' });

    $('#box2').draggable({ axis: 'x' });
    $('#box3').draggable({ axis: 'y' });

    $('#box4').draggable({ containment: ".container", revert: 'invalid' }); // O También puede ser " containment: 'parent' "


    // DROPPABLE 

    $('#droppable').droppable({
        accept: '#box1',
        drop: function () {
            $(this).text("Eh! echaste una caja we!");
        }
    });


    // SORTABLE

    $('#sortable').sortable({ connectWith: "#sortableToo", placeholder: "placeholderBox" });

    $('#sortableToo').sortable({ connectWith: "#sortable" });


    // Accordion

    $('#accordion').accordion({collapsible: true, heightStyle: 'content'});

});
