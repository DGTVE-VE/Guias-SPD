$(document).ready(function () {
    $("#addResourceBtn").click(function (event) {
        event.preventDefault();
        $("#recursos").append('Nombre: <input type="text" name="nombreRecurso[]" class="form-control"><br>');
        $("#recursos").append('PDF: <input type="file" name="archivoRecurso[]" class="form-control"><br>');
    });
    //Activar los menús en el click
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
        // Avoid following the href location when clicking
        event.preventDefault();
        // Avoid having the menu to close when clicking
        event.stopPropagation();
        // If a menu is already open we close it
        $('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
        // opening the one you clicked on
        $(this).parent().addClass('open');
    });
});

