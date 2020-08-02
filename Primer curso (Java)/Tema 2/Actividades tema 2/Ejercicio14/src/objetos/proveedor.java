package objetos;
public class proveedor {
    int cif;
    String nombreEmpresa;
    String descripcion;
    String sector;
    String direccion;
    int telefono;
    String poblacion;
    int codPostal;
    String correo;
    //Aqui hemos puesto los atributos de proveedor
    
    //Aqui ponemos el constructor
    public proveedor(){
        this.cif=566;
        this.nombreEmpresa="Pescados Joan";
        this.descripcion="Proveedores de pescado";
        this.sector="Sector X";
        this.direccion="Calle Bailen";
        this.telefono=605599432;
        this.poblacion="Burjassot";
       this. codPostal=46410;
       this. correo="Joan@gmail.com";
    }
    //Ahora ponemos los set y get de cada uno de los atributos
    
    public void setCif(int numero){
        this.cif=numero;
    }
    public int getCif(){
        return cif;
    }
    public void setNombreEmpresa(String nombre){
        this.nombreEmpresa=nombre;
    }
    public String getNombreEmpresa(){
        return nombreEmpresa;
    }
    public void setDescripcion(String desc){
        this.descripcion=desc;
    }
    public String getDescripcion(){
        return descripcion;
    }
    public void setSector(String sec){
        this.sector=sec;
    }
    public String getSector(){
        return sector;
    }
    public void setTelefono(int telef){
        this.telefono=telef;
    }
    public int getTelefono(){
        return telefono;
    }
    public void setPoblacion(String pobl){
        this.poblacion=pobl;
    }
    public String getPoblacion(){
        return poblacion;
    }
    public void setCodPost(int cod){
        this.codPostal=cod;
    }
    public int getCodPost(){
        return codPostal;
    }
    public void setCorreo(String corr){
        this.correo=corr;
    }
    public String getCorreo(){
        return correo;
    }
           
    public boolean verificarCorreo(){
        boolean resultado;
        
        if (this.correo.indexOf("@") == -1){
           resultado=false;
        }else{
            resultado=true;  
        }
        return resultado;  
    }
    
    public void DatosAtributos(){
        System.out.println("El cif es: "+cif);
        System.out.println("El nombre de la empresa es: "+nombreEmpresa);
        System.out.println("La descripcion es: "+descripcion);
        System.out.println("El sector es: "+sector);
        System.out.println("El telefono es: "+telefono);
        System.out.println("La poblacion es: "+poblacion);
        System.out.println("El codigo postal es: "+codPostal);
        System.out.println("El correo es: "+correo);
        System.out.println("La direccion es: "+direccion);
    }
}

