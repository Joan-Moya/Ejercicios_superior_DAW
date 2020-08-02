
package ejercicio6;
import java.util.Scanner;
import objetos.*;
public class Ejercicio6 {
    public static void main(String[] args) {
        
       double numero;
       Scanner entrada=new Scanner (System.in); //ponemos la entrada del scann
       numero nuevoNum= new numero();
       
       System.out.println("Pon el nuevo numero: ");
       numero=entrada.nextInt();
         System.out.println(nuevoNum.anadeNumero(numero));
       System.out.println("Suma un numero: ");
               numero=entrada.nextInt();
               System.out.println("El numero puesto mas la suma es de"+nuevoNum.masNumero(numero));
               System.out.println("Ahora pon la testa: ");
               numero=entrada.nextInt();
               System.out.println("El numero puesto mas la resta es de"+nuevoNum.menosNumero(numero));
               System.out.println("El doble del numero final es: "+nuevoNum.dobleNumero());
               System.out.println("El triple del numero final es: "+nuevoNum.tripleNumero());
             
               
               
       
    }
    
}
