package objetos;
public class coche {
    String marca="Porsche";
    String modelo;
    
    public void coche(){
        marca="";
        modelo="";
    }
     
    public String coche2(String model){
        modelo=model;
        return model;
    }
    
     public String imprimeMarca(){
        return marca;
     
    }
}
