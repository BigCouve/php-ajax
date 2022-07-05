
$(function(){
        $("#btEnv").click(function() {
            var nome = $("#cadNome").val();
            var descricao = $("#cadDescricao").val();
            console.log("Formulário enviado. \nDado 1: " + nome + "\nDado 2: " + descricao);
            //$("#cadNome").empty();
            //$("#cadDescricao").empty();
            // var data = $("#formDeCusto").serialize();
            // console.log(data);
            // $.post( "../php/inserir.php", obj, function(data) {
            //     console.log("Enviado com sucesso: ");
            //     console.log(data);
            // }, "json");
            

            $.ajax({
                type: "POST",
                url: "../php/inserir.php",
                data: {'d1': nome, 'd2': descricao},
                dataType: 'html',
                success: function (response){
                    console.log("Primeiro sucesso, dados: " + response)

                },
                complete: function(){
                    console.log("Segundo sucesso, se somente 1 então é erro")
                }
            })    
            
            console.log("Fim do js");
        })
        // $("#fimCadastro").click(function(){
        //     $(this).attr("data-dismiss", "modal"); 
            
        // });  





        

});
