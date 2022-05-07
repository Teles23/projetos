public class Main {
    public static void main(String[] args) {
        //Carro cr1 = new Carro();
        Carro[] carros = new Carro[4];
        Carro carro = new Carro();

        carro.setCor("Azul");
        carro.setVl(112);
        carros[0]=carro;

        Carro carro2 = new Carro();

        carro2.setCor("amarelo");
        carro2.setVl(120);
        carros[1]=carro2;

        //for (int i = 0; i < carros.length; i++) {
           // System.out.println(carros[i].toString());
            
       // }
        for (Carro car : carros) {
            System.out.println(car.toString());
            
        }
    }

}
