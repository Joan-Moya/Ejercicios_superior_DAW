/*
Ejercicio60

Version 1.0

03/10/2017

Joan moya Torremocha

*/
package Ejercicio61.java;

import java.util.Scanner;//importamos la libreria de scanner
public class Ejercicio61 {

    
    public static void main(String[] args) {
        Scanner entrada=new Scanner(System.in);//ponemos la instancia scanner
        
        
      
        int nota=0;
        int contador=1;
        int sumaNota=0;
        int media;
        int codigo=0;
        String nombre="";
        //variables
            
            
            
             
             
         
        do{
            System.out.println("Pon la nota del alumno");
            
             try {
             nota=entrada.nextInt();
            } catch(NumberFormatException e){
                System.out.println("Tienes que poner un numero");
                
            }
             
             System.out.println("Pon el codigo del alumno");
               try {
             codigo=entrada.nextInt();
            } catch(NumberFormatException e){
                System.out.println("Tienes que poner un numero");
                
            }
               
         
            
               
             
         sumaNota+=nota;
            contador++;
        }while(codigo>0);
            
             media=sumaNota/contador;
             System.out.println("La media es:"+media);
             
             
            
              
            
           
            
    }
    
}
