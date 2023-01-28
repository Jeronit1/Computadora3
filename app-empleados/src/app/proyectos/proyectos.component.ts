import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { Empleado } from '../empleado.model';
import { EmpleadoService } from '../empleado.service';
@Component({
  selector: 'app-proyectos',
  templateUrl: './proyectos.component.html',
  styleUrls: ['./proyectos.component.css']
})
export class ProyectosComponent {
  title = 'Proyectos';

  constructor(private misEmpleados:EmpleadoService, private router:Router){
    this.listaEmpleados=misEmpleados.listaEmpleados;
  }

  listaEmpleados:Empleado[]=[];

  insertarEmpleado(){
    let miEmpleado:Empleado=new Empleado(this.campoNombre, this.campoApellido, this.campoCargo, this.campoSalario);
    this.misEmpleados.insertarEmpleado(miEmpleado);
    this.router.navigate([""]);
  }

  VolverInicio(){
  this.router.navigate([""]);
  }

  campoNombre:string="";
  campoApellido:string="";
  campoCargo:string="";
  campoSalario:number=0;
}
