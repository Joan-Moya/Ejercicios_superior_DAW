import java.util.Scanner; //importamos la libreria para poder hacer el scan
public class Ejercicio1 {
    
     public static void main(String[]args){
         
         double numeroIntroducido;
         Scanner entrada=new Scanner (System.in); //ponemos la entrada del scann
         
         System.out.println("Pon un numero:   ");
         numeroIntroducido=entrada.nextDouble();//introducimos el numero por pantalla
         
         System.out.print("Pasado a grados: ");
            System.out.println(pasarAgrados( numeroIntroducido));/*mostramos el resuldado del primer
            metodo que es pasarAgrados.
            */
         System.out.print("Pasado a farenheit: ");
            System.out.println(pasaraFarenheit(numeroIntroducido));/*mostramos el resultado del segundo
            metodo que es pasaraFarenheit.
            */
     }
     
     public static double pasarAgrados(double numeroIntro){
         //cogemos el numero y hacemos la operacion del enunciado
         numeroIntro=numeroIntro*1.8+32;
         
         return numeroIntro;
     }
     
     public static double pasaraFarenheit(double numeroIntro){
         //Aquí cogemos el numero y hacemos la operacion del enunciado
         numeroIntro=(numeroIntro-32)/1.8;
         
         return numeroIntro;
     }
}

/*
Ejercicio 1.- Crear una clase llamado Temperatura con dos métodos: 
 celsiusToFarenheit. Convierte grados celsius a farenheit. F = (1.8 * C) + 32
 FarenheitToCelsius. Convierte grados farenheit a celsius. C = (F -32) / 1,8 
*/






