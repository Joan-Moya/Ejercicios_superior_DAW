import objetos.*;
import java.util.Scanner;
public class Ejercicio11 {
    public static void main(String[] args) {
        
        consumo consumoV= new consumo();
       System.out.println("Los datos del viaje son:");
       System.out.println("");
       System.out.println(consumoV.getTiempo());
       System.out.println(consumoV.consumoMedio()+" Litors cada 100 KM");
       System.out.println(consumoV.precioGasolina()+" Euros");
       System.out.println("");
       System.out.println("Tambien se han creado los atributos y el constructor de los atributos como decia en"
                   + "el enunciado");
       System.out.println("");
    }
    
}
