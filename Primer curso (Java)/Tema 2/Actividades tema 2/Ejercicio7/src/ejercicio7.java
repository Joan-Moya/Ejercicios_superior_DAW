import objetos.*;
import java.util.Scanner;
public class ejercicio7 {
    
    public static void main(String[] args) {
        
        double peso;
        String unidad;
     Scanner entrada = new Scanner(System.in);
     
     
         System.out.println("----------------------------------------------------------------------------------------- ");
         System.out.println("Pon el peso con una de las siguientes unidades: LB,LI,OZ,P,K,G,Q ");
         System.out.println("----------------------------------------------------------------------------------------- ");
         System.out.println("");
         System.out.print("Cuanto peso es?: ");
         peso=entrada.nextDouble();
         System.out.print("Con que unidad lo quieres poner?: ");
         unidad=entrada.next();
         conversor conver=new conversor(peso,unidad);
         System.out.println("El resultado es: "+conver.getpesoPredeterminado()+"kg");
           
    }
    
}
