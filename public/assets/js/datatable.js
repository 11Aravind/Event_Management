// $(document).ready(function() {
//     $('#MyTable').DataTable();
// } );



$(document).ready(function (){
    var table = $("#MyTable").DataTable({
        "columnDefs": [
            {
                "targets": 0, 
                "orderDataType": "dom-checkbox"
            }
        ]
    });    
});
