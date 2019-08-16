class Despesa 
{
    constructor(ano, mes, dia, tipo ,descricao, valor){
        this.ano = ano ;
        this.mes = mes ;
        this.dia = dia ;
        this.tipo = tipo ;
        this.descricao = descricao ;
        this.valor = valor ;
    }
}


function cadastrarDespesa()
{
    let ano = document.getElementById('ano'); // REFERÊNCIA DO ELEMENTO
    //let mes = document.getElementById('mes').value; // VALOR DO ELEMENTO
    let mes = document.getElementById('mes'); // VALOR DO ELEMENTO
    let dia = document.getElementById('dia');
    let tipo = document.getElementById('tipo');
    let descricao = document.getElementById('descricao');
    let valor = document.getElementById('valor');

    let despesa = new Despesa(
        ano.value,
        mes.value, 
        dia.value,
        tipo.value,
        descricao.value, 
        valor.value
        );

    gravar(despesa);
}

function gravar(d)
{
    localStorage.setItem('despesa', JSON.stringify(d));
    /*
        'despesa' - IDENTIFICADOR DO ITEM
        JSON.stringify(d) - CONVERTENDO O DADO NO FORMATO JSON
    */
}