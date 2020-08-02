public class Ejercicio2 {
    public static void main(String[] args) {
        
        
        String texto;
        double euros;
        final double valorpesetas = 166.386;
        double valorfinal;
        
        //Aqui introducimos los euros
        System.out.println("Introduce las pesetas: ");
        texto = System.console().readLine(); //texto es de valor string
        
        
        euros = Double.parseDouble(texto);//aqui pasamos de string a double la varialbe de texto que es odnde esta el valor que hemos introducido
        valorfinal= euros/valorpesetas; // multiplicamos las dos variables
        
        System.out.println("Tu cantidad en euros es: "+valorfinal); 
        
        
    }
    
}
