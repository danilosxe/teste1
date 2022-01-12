let numeroAleatorios = []
let naoRepete = []
let contador = 0

for(let i=0; i<20; i++){
 numeroAleatorios.push(Math.floor(Math.random() * (10 - 1 + 1)) + 1)

document.getElementById('n-a').innerHTML += numeroAleatorios[i]+' '
}

for(let i=0; i<numeroAleatorios.length; i++){

    for(let e=0; e<numeroAleatorios.length; e++){
        if(numeroAleatorios[i] == numeroAleatorios[e]){
            contador++
            console.log(numeroAleatorios[i] +' '+ numeroAleatorios[e])
            if(contador == 2){
                contador = 0
                console.log(contador)
                e = numeroAleatorios.length
                
            }
        }    
    }
    if(contador == 1){
        naoRepete.push(numeroAleatorios[i])
       //document.getElementById('n-r').innerHTML += naoRepete[i]+' '
       contador = 0
        console.log('r' +numeroAleatorios[i])
    }

}

for(let i=0;i<naoRepete.length;i++){
    document.getElementById('n-r').innerHTML += naoRepete[i]+' '
}