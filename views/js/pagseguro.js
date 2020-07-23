var amount = "600.00";
pagamento();

function pagamento(){
    var endereco = jQuery('.endereco').attr("data-endereco");

    $.ajax({
        url: endereco + "pagamento",
        type: "POST",
        dataType: "json",
        success: function(retorno){
            PagSeguroDirectPayment.setSessionId(retorno.id);
        },
        complete: function(retorno) {
            listarMeiospag();
        }
    });
}

function listarMeiospag(){
    PagSeguroDirectPayment.getPaymentMethods({
        amount: amount,
        success: function(retorno) {
            // console.log(retorno);
            $(".meio-pag").append("<div>Cartão de Crédito</div>");
            $.each(retorno.paymentMethods.CREDIT_CARD.options, function(i, obj){
                // $(".meio-pag").append("<span>" + obj.name + "</span>");
                // $(".meio-pag").append("<span><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path + "'>" + obj.name + "</span>");
                $(".meio-pag").append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path + "'></span>");
            });

            $(".meio-pag").append("<div>Boleto Bancário</div>");
            $(".meio-pag").append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + retorno.paymentMethods.BOLETO.options.BOLETO.images.SMALL.path + "'></span>");

            $(".meio-pag").append("<div>Débito Online</div>");
            $.each(retorno.paymentMethods.ONLINE_DEBIT.options, function(i, obj){
                $(".meio-pag").append("<span class='img-band'><img src='https://stc.pagseguro.uol.com.br" + obj.images.SMALL.path + "'></span>");
            });
        },
        error: function(retorno) {
            // Callback para chamadas que falharam.
        },
        complete: function(retorno) {
            // Callback para todas chamadas.
        }
    });
}

$("#numcartao").on('keyup', function(){
    var numcartao = $(this).val();
    // console.log(numcartao);
    if(numcartao.length = 6){
        PagSeguroDirectPayment.getBrand({
            cardBin: numcartao,
            success: function(retorno) {
                // console.log(retorno);
                $("#msg").empty();
                var imgband = retorno.brand.name;
                $(".band-cartao").html("<img src='https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/42x20/" + imgband + ".png'>");
                recupParcelas(imgband);
            },
            error: function(retorno) {
                $(".band-cartao").empty();
                $("#msg").html("Cartão inválido");
            },
            complete: function(retorno) {
              //tratamento comum para todas chamadas
            }
        });
    }
});

function recupParcelas(bandeira){
    PagSeguroDirectPayment.getInstallments({
        amount: amount,
        maxInstallmentNoInterest: 3,
        brand: bandeira,
        success: function(retorno){
            $.each(retorno.installments, function(ia, obja){
                $.each(obja, function(ib, objb){
                    console.log(objb);
                });
            });
        },
        error: function(retorno) {
            // callback para chamadas que falharam.
        },
        complete: function(retorno){
            // Callback para todas chamadas.
        }
});
}