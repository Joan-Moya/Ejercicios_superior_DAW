
package Objetos;
public class Moto { 
        int velocidad;  
        
       public  Moto()
        {   
            velocidad=0;
        }
  
    public int getMoto(){
        return velocidad;
    }   
    
    public void acelera(int km){
        velocidad+=km;
                
    }
    
    public void frena(int km){
        velocidad-=km;
    }
    }
   