package objetos;
public class conversor {
    double pesoPredeterminado;
    
    public  conversor(double num,String medida){
        double resultado=0;
        
       if(medida.equals ("lb") ){
           resultado=num/0.453;
       }else if(medida.equals("li")){
           resultado=num/14.59;
       }else if(medida.equals("oz")){
           resultado=num/0.02835;
       }else if(medida.equals("p")){
           resultado=num/0.155;
       }else if (medida.equals("q")){
           resultado=num/0.433;
       }else if (medida.equals("k")){
           resultado=num;
       }
           this.pesoPredeterminado=resultado;
    }
    
    public double getpesoPredeterminado(){
        return pesoPredeterminado;
    }
    
    
}
