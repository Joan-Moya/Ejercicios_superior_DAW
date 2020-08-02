public class Ejercicio67 {

  
    public static void main(String[] args) {
        String[]carnets ={"A","B","D"};
        System.out.println("El empleado tiene carnets de: "+devuelveCarnets(carnets));
    }
    
    
    
    
    
    //Este es el void main
    
    //A partir de aqui creamos las clases para hacer cosas
    
    
    
    
    public static String devuelveCarnets(String[]  c){ /*ponemos string como tipo de archivo que vamos a poner y
        c es el nombre de la variabl carnets*/
        
        int contador;
        String resultado="";
        
        for(contador=0; contador<c.length; contador++ ) {//el lenght es la cantidad de puntos del array
            //desde contador 0 mientras sea menor a la cantidad del array que vaya oncrementando 1
            
            if(c[contador].equals("A")){//equals es el == pero en string
                resultado+= "Moto ";
            }
            
             if(c[contador].equals("B")){//equals es el == pero en string
                resultado+= "Coche ";
            }
             
              if(c[contador].equals("C")){//equals es el == pero en string
                resultado+= "Autobus ";
            }
              
               if(c[contador].equals("D")){//equals es el == pero en string
                resultado+= "Camion ";
               }   
               
               if(c[contador].equals("E")){//equals es el == pero en string
                resultado+= "Trailer ";
               }   
        }
        return resultado;
    }
    }


