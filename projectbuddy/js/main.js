// Modal Script
$("#exampleModal").on("show.bs.modal", event => {
    var button = $(event.relatedTarget);
    var modal = $(this);
    // Use above variables to manipulate the DOM
});

// Tooltip Script

$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});