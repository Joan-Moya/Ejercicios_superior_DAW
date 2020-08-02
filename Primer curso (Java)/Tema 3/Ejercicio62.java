import java.util.Scanner;
public class Ejercicio62 {

        public static void main(String[]args){
            double gradosF;
            double gradosC;
            Scanner entrada=new Scanner (System.in);
            
             System.out.println("Introduce los grados Farenheit: ");
             gradosC= entrada.nextDouble();
             System.out.println("Resultado de Celsius: "+CelsiusToFarengeit(gradosC));
             
              System.out.println("Introduce los grados Farenheit: ");
             gradosF= entrada.nextDouble();
             System.out.println("Resultado de Celsius: "+FarenheittoCelsius(gradosF));
        }
            
        
        
        
   
   
         public static double CelsiusToFarengeit(double grados) {
        double resultado;
        resultado= (1.8/grados)+32;
        return resultado;
    }
    
        public static double FarenheittoCelsius(double grados) {
        double resultado;
        resultado= (grados-32)/1.8;
        return resultado;
    }
        
    }
    

