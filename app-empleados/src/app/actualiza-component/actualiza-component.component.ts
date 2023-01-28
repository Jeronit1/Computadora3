import { ActivatedRoute, Router } from '@angular/router';
import { Component } from '@angular/core';
import { EmpleadoService } from '../empleado.service';
import { Empleado } from '../empleado.model';
@Component({
  selector: 'app-actualiza-component',
  templateUrl: './actualiza-component.component.html',
  styleUrls: ['./actualiza-component.component.css']
})
export class ActualizaComponentComponent {
  title = 'Actualizar Empleado';

  constructor(private misEmpleados:EmpleadoService, private router:Router , private route:ActivatedRoute){
    this.listaEmpleados=misEmpleados.listaEmpleados;
    this.indice=this.route.snapshot.params["id"];
    let miEmpleado:Empleado=misEmpleados.encontrarEmpleado(this.indice);
    this.campoNombre=miEmpleado.nombre;
    this.campoApellido=miEmpleado.apellido;
    this.campoCargo=miEmpleado.cargo;
    this.campoSalario=miEmpleado.salario;
    this.accion=this.route.snapshot.queryParams["accion"];
  }

  listaEmpleados:Empleado[]=[];
/*
  actualizarEmpleado(){
    let miEmpleado:Empleado=new Empleado(this.campoNombre, this.campoApellido, this.campoCargo, this.campoSalario);
    this.misEmpleados.actualizarEmpleado(this.indice ,miEmpleado);
    this.router.navigate([""]);
  }

eliminarEmpleado(){
  this.misEmpleados.eliminarEmpleado(this.indice);
  this.router.navigate([""]);
}
*/
actualizarEmpleado(){
  if(this.accion==1){
  let miEmpleado:Empleado=new Empleado(this.campoNombre, this.campoApellido, this.campoCargo, this.campoSalario);
  this.misEmpleados.actualizarEmpleado(this.indice ,miEmpleado);
  this.router.navigate([""]);
  } else if(this.accion==2){
  this.misEmpleados.eliminarEmpleado(this.indice);
  this.router.navigate([""]);
}
}

  accion:number;
  indice:number;
  campoNombre:string="";
  campoApellido:string="";
  campoCargo:string="";
  campoSalario:number=0;
}
