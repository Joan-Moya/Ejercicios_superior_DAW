import objetos.*;
import java.util.Scanner;
public class Ejercicio9 {
    public static void main(String[] args) {
        String valor;
        Scanner entrada=new Scanner(System.in);
        coche nuevaEntrada=new coche();
        
       System.out.println("Pon el modelo del coche: ");
       valor=entrada.next();
       System.out.println("El modelo del coche es: "+nuevaEntrada.imprimeMarca()+","+nuevaEntrada.coche2(valor));
       
       
    }
    
}
