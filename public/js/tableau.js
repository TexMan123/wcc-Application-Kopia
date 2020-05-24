$(document).ready(function () {
    $('#tab').DataTable({
        language: {
            url: "DataTables/media/French.json"
        },
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false
    });
});

