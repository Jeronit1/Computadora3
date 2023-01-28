import { Empleado } from './../empleado.model';
import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-lista-empleados',
  templateUrl: './lista-empleados.component.html',
  styleUrls: ['./lista-empleados.component.css']
})
export class ListaEmpleadosComponent {
@Input() empleado:Empleado;
@Input() i:number;

caracteristicasE:string[]=[];
insertarCarac(value:string){
  this.caracteristicasE.push(value);
}
}
