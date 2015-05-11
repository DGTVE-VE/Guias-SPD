$(document).ready(function() {
    $("#addResourceBtn").click(function(event) {
        event.preventDefault();
        $("#recursos").append('Nombre: <input type="text" name="nombreRecurso[]" class="form-control"><br>');
        $("#recursos").append('PDF: <input type="file" name="archivoRecurso[]" class="form-control"><br>');
    });
    
});