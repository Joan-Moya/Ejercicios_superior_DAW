package objetos;
public class Producto {
    //ponemos los atributos de la clase
    double codProducto;
    String nombreProducto;
    String descripcion;
    String categoria;
    double peso;
    double precio;
    int stock;
    double ivaPuestoo;
    
    public Producto(){
        this.codProducto=3434;
        this.descripcion="Ordenadores";
        this.nombreProducto="Equipo informatico";
        this.categoria="Tecnologia";
        this.peso=4;
        this.precio=50.0;
        this.stock=0;
    }
    
    public void aumentaStock(int cifra){ //aqui ponemos la cifra del stock
        this.stock=cifra;
    }
    
    public void disminuyeStock(int cifra){ //aqui disminuimos el estock
        this.stock=this.stock-cifra;
    }
    
    public double ivaProducto(double iva){//aqui dividimos el iva y lo guardamos en un atributo
        double ivaPuesto=iva;
        ivaPuesto=ivaPuesto/100;
        this.ivaPuestoo=ivaPuesto;
        return ivaPuesto;
    }
    
    public double aplicarIVA(){ //el iva aplicado al atribuo lo multiplicamos al precio final del producto.
        this.precio=this.precio*ivaPuestoo; //aqui aplicamos el valor a la variable iva
        return this.precio; //aqui devolvemos el precio del producto multiplicado por el iva.
    }
    
    public void mostrarDatos(){
        System.out.println(this.codProducto);
        System.out.println(this.nombreProducto);
        System.out.println(this.descripcion);
        System.out.println(this.categoria);
        System.out.println(this.peso+" KG");
        System.out.println(this.precio+" EUROS");
        System.out.println(this.stock);
    }
}
