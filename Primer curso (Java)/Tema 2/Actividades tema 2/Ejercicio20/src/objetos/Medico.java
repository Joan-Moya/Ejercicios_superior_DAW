package objetos;
public class Medico {
    
    double codMedico;
    String nombre="Medico";
    String apellidos;
    String dni;
    String direccion="Calle Bailen";
    int telefono=604433987;
    String poblacion;
    int codPostal=464100;
    String fechaNacimiento;
    String especialidad;
    double sueldo;
    double retencion;
    
    public void setCodMedico(double cod){
        this.codMedico=cod;
    }
    public double getCodMedico(){
        return codMedico;
    }
    public void setApellidos(String dato){
        this.apellidos=dato;
    }
    public String getApellidos(){
       return apellidos;
    }
    public void setNombre( String nom){
        this.nombre=nom;
    }
    public String getNombre(){
        return nombre;
    }
    public void setDni(String dn){
        this.dni=dn;
    }
    public String getDni(){
        return dni;
    }
    public void setDireccion(String direc){
        this.direccion=direc;
    }
    public String getDireccion(){
        return direccion;
    }
    public void setTelefono(int tel){
        this.telefono=tel;
    }
    public int getTelefono(){
        return telefono;
    }
    public void setPoblacion(String dato){
        this.poblacion=dato;
    }
    public String getPoblacion(){
        return poblacion;
    }
    public void setCodPostal(int cod){
        this.codPostal=cod;
    }
    public int getCodPostal(){
        return codPostal;
    }
    public void setFechaNacimiento(String fecha){
        this.fechaNacimiento=fecha;
    }
    public String getFechaNacimiento(){
        return fechaNacimiento;
    }
    public void setEspecialidad(String esp){
        this.especialidad=esp;
  
    }
    public String getEspecialidad(){
        return especialidad;
    }
    public void setSueldo(double suel){
        this.sueldo=suel;
    }
    public double getSueldo(){
        return sueldo;
    }
    
    public void retencionMedico(double dato){
        this.retencion=dato/100;
    }
    
    public void mostrarDatos(){
        System.out.println("El codigo dle medico es: "+codMedico);
        System.out.println("Su nombre es: "+nombre);
        System.out.println("Sus apellidos son: "+apellidos);
        System.out.println("Su DNI es: "+dni);
        System.out.println("Su direccion es: "+direccion);
        System.out.println("Su telefono es: "+telefono);
        System.out.println("La poblacion donde vive es: "+poblacion);
        System.out.println("El codigo postal de su poblacion es: "+codPostal);
        System.out.println("Su fecha de nacimiento: "+fechaNacimiento);
        System.out.println("Su especialidad: "+especialidad);
        System.out.println("Su sueldo: "+sueldo);
        System.out.println("La retencion del sueldo es del: "+retencion);
    }
    }
