public class Cliente{
	private String cbu,tarjetadebito,tarjetacredito,patente,vehiculo,modelo,nombre,apellido,direccion,telefono,email,dni;
	public void establecerCbu(String c) {
		this.cbu=c;
	}
	public String obtenerCbu() {
		return cbu;
	}
	public void establecerPatente(String p){
		this.patente=p;
	}
	public String obtenerPatente() {
		return patente;
	}
	public void establecerTarjetaDebito(String t){
		this.tarjetadebito=t;
	}
	public String obtenerTarjetaDebito(){
		return tarjetadebito;
	}
	public void establecerTarjetaCredito(String t){
		this.tarjetacredito=t;
	}
	public String obtenerTarjetaCredito() {
		return tarjetacredito;
	}
	public void establecerVehiculo(String v) {
		this.vehiculo=v;
	}
	public String obtenerVehiculo() {
		return vehiculo;
	}
	public void establecerModelo(String m){
		this.modelo=m;
	}
	public String obtenerModelo() {
		return modelo;
	}
	public void establecerNombre(String n){
		this.nombre=n;
	}
	public String obtenerNombre(){
		return nombre;
	}
	public void establecerApellido(String a){
		this.apellido=a;
	}
	public String obtenerApellido(){
		return apellido;
	}
	public void establecerDireccion(String d){
		this.direccion=d;
	}
	public String obtenerDireccion(){
		return direccion;
	}
	public void establecerTelefono(String t){
		this.telefono=t;
	}
	public String obtenerTelefono(){
		return telefono;
	}
	public void establecerEmail(String e){
		this.email=e;
	}
	public String obtenerEmail(){
		return email;
	}
	public void establecerDni(String d){
		this.dni=d;
	}
	public String obtenerDni(){
		return dni;
	}	
}
