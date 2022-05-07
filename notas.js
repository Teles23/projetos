function solucao(notas) {
const notas = [9,5,6,2,0];

let nps =0;
let promotores=0,detratores=0,neutros=0;
for (let item of notas) {
    if(item>=9){
        promotores++;
    }else if (item<=6){
        detratores++;

    }else{
        neutros++;
    }

}
let totalclientes = promotores+detratores+neutros;
nps= (promotores- detratores)/totalclientes;
nps = nps*100;

console.log(nps);
}