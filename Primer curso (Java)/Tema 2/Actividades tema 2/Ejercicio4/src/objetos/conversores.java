package objetos;
public class conversores {

double cambioDolarAeuro;

    public conversores(){
        cambioDolarAeuro=1.36;
    }
    
    public double getConversores(){
        return cambioDolarAeuro;
    }
    
   public double conversorConValor(double cantidad){
       cambioDolarAeuro=cantidad;
       return cambioDolarAeuro;
   }
}
