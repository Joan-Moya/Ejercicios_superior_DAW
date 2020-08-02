package objetos;
public class cantidades {
    double kilosCarne;
    double kilosPatatas;
    
    public int numeroClientes(){
            int clientes=0;
            
        while(kilosCarne>=1 && kilosPatatas>=2){
        clientes=clientes+3; //aqui almacenamos la cantidad de clientes
        kilosCarne=kilosCarne-1;
        kilosPatatas=kilosPatatas-2;
    }
            return clientes;
}
}
