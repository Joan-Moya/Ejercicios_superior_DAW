package objetos;
public class millasAMetros {
    
    
    public double millasAMetros(double valor){
        double resultado;
        resultado=valor*1852; //multiplicamos el valor (millas) por 1852 (1 milla=1852 metros)
        return resultado;
    }
    
    public double millasAKilometros(double valor){
        double resultado;
        resultado=valor*1.60934; 
        return resultado;
    }
}
