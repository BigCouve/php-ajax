$(function(){
    
    $("#fimCadastro").click(function(){
        $("#formDeCusto").submit(function() {
            alert("formuladio enviado");
            var nome = $("#cadNome").val();
            var descricao = $("#cadDescricao").val();
            console.log(nome, descricao);
            $.ajax({
                url: 'http://localhost/tarefaagillis/php/inserir.php',
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
        //$("#fimCadastro").attr("data-dismiss", "modal");        
    })
})