// const searchInput = document.getElementById('searchInput');
//     const dataTable = document.getElementById('dataTable');
    
//     searchInput.addEventListener('keyup', function() {
//         const searchText = searchInput.value.toLowerCase();
        
//         for (let row of dataTable.getElementsByTagName('tbody')[0].rows) {
//             const name = row.cells[0].textContent.toLowerCase();
//             const age = row.cells[1].textContent.toLowerCase();
//             const country = row.cells[2].textContent.toLowerCase();
            
//             if (name.includes(searchText) || age.includes(searchText) || country.includes(searchText)) {
//                 row.style.display = '';
//             } else {
//                 row.style.display = 'none';
//             }
//         }
//     });

$(document).ready(function(){
    $('#searchInput').on('keyup', function(){
        var buscar = $(this).val().toLowerCase();
        $('#tableBody tr').filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(buscar) > -1);
        });
    });
});