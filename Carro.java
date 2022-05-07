import java.util.Scanner;

public class Carro {
    Scanner sc = new Scanner(System.in);
    private String cor;
    private int vl, vlMax=130;
  /*  public Carro(){
        do {
            
            System.out.println("Digite a velocidade:");
            vl=sc.nextInt();
            sc.nextLine();

            System.out.println("Digite a cor:");
            cor=sc.nextLine();
            
            if (vl>vlMax) {
                System.out.println("Velocidade máx ultrapassada");
            }
            
        } while (vl>vlMax);
        
        System.out.println(vl+" KM/H");
        System.out.println(cor);
    }*/
    public String getCor() {
        return cor;
    }
    public int getVl() {
        return vl;
    }
    public void setVl(int vl) {
        this.vl = vl;
    }
    public void setCor(String cor) {
        this.cor = cor;
    }

    public String toString() {
        return "Produto [cor =  "+cor+" velocidade ="+vl+"]\n";
        
    }
}
