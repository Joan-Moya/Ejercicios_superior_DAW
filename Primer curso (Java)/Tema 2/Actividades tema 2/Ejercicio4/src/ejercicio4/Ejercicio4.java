package ejercicio4;
import objetos.*;
import java.util.Scanner;
public class Ejercicio4 {
    public static void main(String[] args) {
        double cantidad;
       Scanner entrada=new Scanner (System.in); //ponemos la entrada del scann
       
       conversores nuevaConver= new conversores(); /*aqui creamos una entrada a las funciones
       de conversores*/
       
       
       System.out.println("Pon la cantidad que tengas: ");
       cantidad=entrada.nextDouble();
       
       if(cantidad==0){
           System.out.println("La conversion es de: " +nuevaConver.getConversores()+" EUROS");
       }else{
           System.out.println("La conversion es de: "+nuevaConver.conversorConValor( cantidad));
       }
       
    }
    
    
}
