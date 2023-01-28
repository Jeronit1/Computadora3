import { Component } from '@angular/core';
import { EmpleadoService } from '../empleado.service';
import { Empleado } from '../empleado.model';
@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent {
  title = 'Lista de empleados';

  constructor(private misEmpleados:EmpleadoService){
    this.listaEmpleados=misEmpleados.listaEmpleados;
  }

  listaEmpleados:Empleado[]=[];

  insertarEmpleado(){
    let miEmpleado:Empleado=new Empleado(this.campoNombre, this.campoApellido, this.campoCargo, this.campoSalario);
    this.misEmpleados.insertarEmpleado(miEmpleado);

  }

  campoNombre:string="";
  campoApellido:string="";
  campoCargo:string="";
  campoSalario:number=0;
}
