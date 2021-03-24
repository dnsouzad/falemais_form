$(document).ready(function(){
    $('#minutos').keypress(function(){
        var origemDestino = $('#origemDestino option:selected').val()
        var planos = $('#planos option:selected').val()
        var minutos = $('#minutos').val()

        var comPlano = (minutos > planos ? ((minutos-planos)*origemDestino)*1.1 : 0)
        var semPlano = (minutos * origemDestino)

        if(minutos > 0){
            $('#valorComPlano').text(comPlano.toFixed(2))
            $('#valorSemPlano').text(semPlano.toFixed(2))
        }
    })
})