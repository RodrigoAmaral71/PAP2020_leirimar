if (resNum == 1){
    $('#modalTitulo').html('Erro de Base de dados');
    $('#modalMensagem').html('Impossível eliminar esta pessoa porque tem registos relacionados');
    $('#mensagem').modal('show');
}
else{
$('#modalTitulo').html('Eliminar Registo');
$('#modalMensagem').html('Tem a certeza que deseja eliminar '+ result +' da Base de Dados?');
$('#mensagem').modal('show');
}