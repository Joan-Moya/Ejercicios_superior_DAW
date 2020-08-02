package objetos;
public class consumo {
    double kilometros;
    double litros;
    double litrosConsumidos;
    double velMedia;
    double precioGasolina;
    
    public consumo(){
        
        kilometros=0;
        litros=0;
        litrosConsumidos=0;
        velMedia=0;
        precioGasolina=0;
        
    }
    public void setKms (double km){
        this.kilometros=km;
    }
    
   public void setLitros(double litr){
       this.litros=litr;
   }
   
   public void setVelMed(double veloc){
       this.velMedia=veloc;
   }
   
   public void setPgas(double precioG){
       this.precioGasolina=precioG;
   }
    
    public String getTiempo(){
        String tiempo="30 minutos";
        return tiempo;
    }
    
    public double consumoMedio(){
        double consumo;
        consumo=4.7;
        return consumo;
    }
    
    public double precioGasolina(){
        double precio;
        precio=1.88;
        return precio;
    }
}
