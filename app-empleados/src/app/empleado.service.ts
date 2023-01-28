import { ServiceEmpleadoService } from './service-empleado.service';
import { Injectable } from '@angular/core';
import { Empleado } from './empleado.model';
@Injectable()
export class EmpleadoService{

    constructor(private miServicio:ServiceEmpleadoService){}
 
    listaEmpleados:Empleado[]=[
        new Empleado("Juan", "Diaz", "Jefe", 10000),
        new Empleado("Matias", "Smith", "Marketing", 5000),
        new Empleado("Camila", "Lapro", "Comunnity Manager", 3000),
        new Empleado("Martin", "Duarte", "Administrativo", 1000),
   
     ]

     insertarEmpleado(empleado:Empleado){
        this.miServicio.mostrarMensaje("Nombre: " + empleado.nombre + "\n" + "Salario: " + empleado.salario)
        this.listaEmpleados.push(empleado)
     }

     encontrarEmpleado(id:number){
         let miEmpleado:Empleado=this.listaEmpleados[id];
         return miEmpleado;
     }

     actualizarEmpleado(id:number, empleado:Empleado){
      this.listaEmpleados[id]=empleado;
     }

     eliminarEmpleado(id:number){
      this.listaEmpleados.splice(id,1);
     }
}