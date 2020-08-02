/*
Ejercicio60

Version 1.0

03/10/2017

Joan moya Torremocha

*/
package Ejercicio60.java;

import java.util.Scanner;//importamos la libreria de scanner
public class Ejercicio60 {

    
    public static void main(String[] args) {
        Scanner entrada=new Scanner(System.in);//ponemos la instancia scanner
        
        
        String[] trabajadores={"Alberto","Joan","Mario","Carlos"};
        int pos;
        //variables
            
            
        System.out.println("Pon el numero de un trabajador");
             pos=entrada.nextInt();
             
            try {
              System.out.println("El trabajador es: "+trabajadores[pos]);
            } catch(ArrayIndexOutOfBoundsException e){
                System.out.println("Te has pasado del limite");
                
            }
              
            
           
            
    }
    
}