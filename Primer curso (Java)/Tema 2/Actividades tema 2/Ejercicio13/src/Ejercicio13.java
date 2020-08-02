import objetos.*;
import java.util.Scanner;
public class Ejercicio13 {

    public static void main(String[] args) {
        double kgPatatas;
        double kgCarne;
        Scanner entrada= new Scanner (System.in); //aqui ponemos la entrada al scanner
        cantidades cantidad=new cantidades();
        
        System.out.println("Pon la cantidad de carne y de patatas");
        System.out.print("Patatas: ");
        kgPatatas=entrada.nextDouble();
        System.out.print("Carne: ");
        kgCarne=entrada.nextDouble();
        
        //Ahora vamos a darle el valor a los "set" y a imprimir el valor final
        cantidad.setKilosPatatas(kgPatatas);
        cantidad.setKilosCarne(kgCarne);
        //Ahora imprimimos los valores finales
        
        System.out.println("Comensales: "+cantidad.numeroClientes());
        
        
        
    }
    
}
