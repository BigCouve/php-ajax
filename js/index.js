$(function(){
    $("#formDeCusto").submit(function(e) {
        e.preventDefault();
        var nome = $("#cadNome").val();
        var descricao = $("#cadDescricao").val();
        $.ajax({
            url: '../php/inserir.php',
            method: 'POST',
            data: {
                n1: nome,
                n2: descricao
            },
            dataType: 'json',
        }).done(function(result){
            console.log(result);
        })
    })
    $("#fimCadastro").click(function(){
        $("#fimCadastro").attr("data-dismiss", "modal");        
    })
})