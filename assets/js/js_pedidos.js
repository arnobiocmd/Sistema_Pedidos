
$(function(){
      $("#produto").on("keyup", function(){
        var q  = $(this).val();
        if(q == ""){
       $('.listaProdutos').hide(); 
    }
       $.ajax({
        url: base_url + "produto/buscar/" + q,
        type: "POST",
        dataType: "json",
        data:{},
        success: function (data){
              $("#produto").after('<div class="listaProdutos"></div>');
              html = "";
              var i;
               for (i = 0; i < data.length; i++) {		  
                 html +='<div class="si"><a href="javascript:;" onclick="selecionarProduto(this)"'
                 + 'data-id="' + data[i].id_produto +
                    '"data-nome="' + data[i].descricao +
                    '" data-valor="' + data[i].preco + '">' +
                 data[i].descricao + " - R$ " + data[i].preco + '</a></div>';
                
               }
               $(".listaProdutos").html(html);
               $(".listaProdutos").show();  
        }
     });
   });
});

function selecionarProduto(obj){
   var id_produto    = $(obj).attr('data-id');
   var produto       = $(obj).attr('data-nome');
   var preco         = $(obj).attr('data-valor');
   
   $(".listaProdutos").hide();
   $('#id_produto').val(id_produto);
   $('#produto').val(produto);
   $('#preco').val(preco);
   $('#qtde').val(1);
   $('#qtde').focus();
 

   
}

	
