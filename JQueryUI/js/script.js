

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


    // Datepicker

    $('.date').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 2,
        minDate: "-1w -3d", // "-1w", "-1d", "-1y"
        maxDate: "+1w"
    });


    // To do list
    $('#todoList ul').sortable({
        items: "li:not('.listTitle, .addItem')",
        connectWith: "ul",
        dropOnEmpty: true, 
        placeholder: "emptySpace"
    });

    $('input').keydown(function (e) {
        if(e.keyCode == 13) {
            var item = $(this).val();

            $(this).parent().parent().append('<li>' + item + '</li>');
            $(this).val('');
        }
    });

    $('#trash').droppable({
        drop: function(event, ui) {
            ui.draggable.remove();
        }
    });

});

