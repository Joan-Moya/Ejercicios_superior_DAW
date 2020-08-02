
package objetos;
public class numero {
    double numero;
    
    public numero(){
        numero=0;
    }
    
    public  numero(double num){
    numero=num;
}
    public double anadeNumero(double num){
        this.numero=num;
        return numero;
    }
    
    public double masNumero(double num){
        double resultado;
        resultado=numero+num;
        return resultado;
    }
    
    public double menosNumero(double num){
        double resultado;
        resultado=numero-num;
        return resultado;
    }
    
    public double dobleNumero(){
        double resultado;
        resultado=numero*2;
        return resultado;
    }
    
      public double tripleNumero(){
        double resultado;
        resultado=numero*3;
        return resultado;
    }
    
    
}
