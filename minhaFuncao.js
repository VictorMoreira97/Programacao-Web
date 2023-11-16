function minhaFuncao () {
    let nome = document.getElementById('minhaEntrada');

    const duda = new Array(5);
    duda.push({'Chave':'Valor'});
        duda.push(nome.value);
    
        document.write(`<p>Meus alunos lindos: </p>`);

    for(d in duda) {
        document.getElementById('minhaLista').innerHTML += `<li>${duda}</li>`;
    }
}