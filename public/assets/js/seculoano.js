
let inputAno = document.getElementById('seculo-ano')
let spanSeculo = document.getElementById('seculo')


document.getElementById('bt').addEventListener('click', () =>{
    let getAno = inputAno.value
    seculoAno(getAno)
})

function seculoAno(getAno){

    if(getAno < 101){
        spanSeculo.innerHTML = 1
    }
    else if(getAno.substr(-1, 1) == '0' && getAno >= 101 && getAno < 999){
        spanSeculo.innerHTML = getAno.substr(0, 1)
    }else if(getAno.substr(-1, 1) != '0' && getAno >= 101 && getAno <= 999){
        spanSeculo.innerHTML = parseInt(getAno.substr(0, 1)) +1 
    }else if(getAno.substr(-2, 2) == '00' && getAno > 999 && getAno <= 9999){
        spanSeculo.innerHTML = getAno.substr(0, 2)
    }else if(getAno.substr(-2, 2) != '00' && getAno > 999 && getAno <= 9999){
        spanSeculo.innerHTML = parseInt(getAno.substr(0, 2)) +1 
    }else{
        spanSeculo.innerHTML = 'Apocalipse!'
    }


}