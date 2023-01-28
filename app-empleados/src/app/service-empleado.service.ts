import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ServiceEmpleadoService {

  constructor() { }

  mensaje:string="";

  mostrarMensaje(value:string){
    alert(value);
  }
}
