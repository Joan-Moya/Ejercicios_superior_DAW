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
    
    public consumo(double km,double litr, double litrConsumidos, double velMed, double precioG){
        this.kilometros=km;
        this.litros=litr;
        this.litrosConsumidos=litrConsumidos;
        this.velMedia=velMed;
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
