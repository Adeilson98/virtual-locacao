// document.addEventListener('DOMContentLoaded', function() {
//     var sortableTable = document.getElementById('mainTable');
//     var sortableRows = sortableTable.querySelectorAll('.sortable-row');

//     // Adicione eventos de arrastar às linhas da tabela
//     for (var i = 0; i < sortableRows.length; i++) {
//         addDragEvents(sortableRows[i]);
//     }

//     // Função para adicionar eventos de arrastar a uma linha
//     function addDragEvents(row) {
//         row.draggable = true;

//         row.addEventListener('dragstart', function(e) {
//             e.dataTransfer.setData('text/plain', row.dataset.id);
//             row.classList.add('dragging');
//         });

//         row.addEventListener('dragend', function() {
//             row.classList.remove('dragging');
//         });
//     }

//     // Adicione eventos de soltar à tabela
//     sortableTable.addEventListener('dragover', function(e) {
//         e.preventDefault();
//         var draggingRow = document.querySelector('.dragging');
//         var nearestRow = getNearestRow(e.clientY);

//         if (nearestRow && nearestRow !== draggingRow) {
//             sortableTable.querySelector('tbody').insertBefore(draggingRow, nearestRow);
//         }
//     });

//     // Função para obter a linha mais próxima da posição do mouse
//     function getNearestRow(yPosition) {
//         var minDistance = Infinity;
//         var nearestRow = null;

//         for (var i = 0; i < sortableRows.length; i++) {
//             var row = sortableRows[i];
//             var rect = row.getBoundingClientRect();
//             var distance = Math.abs(rect.top + rect.height / 2 - yPosition);

//             if (distance < minDistance) {
//                 minDistance = distance;
//                 nearestRow = row;
//             }
//         }

//         return nearestRow;
//     }

//     // Adicione eventos de soltar à tabela
//     sortableTable.addEventListener('drop', function(e) {
//         e.preventDefault();

//         var data = e.dataTransfer.getData('text/plain');
//         var draggedRow = sortableTable.querySelector('[data-id="' + data + '"]');
//         var newPosition = Array.from(sortableRows).indexOf(draggedRow);

//         // Atualize a ordem no servidor
//         updateDatabaseOrder();
//     });

//     // Função para atualizar a ordem no servidor
//     function updateDatabaseOrder() {
//         var order = Array.from(sortableRows).map(function(row) {
//             return row.dataset.id;
//         });

//         // Envie a nova ordem para o servidor usando AJAX
//         var xhr = new XMLHttpRequest();
//         xhr.open('POST', 'produtos_admin/update_order', true);
//         xhr.setRequestHeader('Content-Type', 'application/json');

//         xhr.onreadystatechange = function() {
//             if (xhr.readyState === 4) {
//                 if (xhr.status === 200) {
//                     var responseData = JSON.parse(xhr.responseText);
//                     console.log(responseData.message);
//                 } else {
//                     console.error('Erro na requisição: ' + xhr.statusText);
//                 }
//             }
//         };

//         var jsonData = JSON.stringify({ order: order });
//         xhr.send(jsonData);
//     }
// });


$( function() {
    $( "#sortable" ).sortable();
  } );

$("#savebtn").click(function() {

    var array = [];

    $.each($('#sortable').find('tr'), function() {

        array.push($(this).data('id'));

    });

    $("#project_ids").val(array.toString());

    $("#form").submit();

})
