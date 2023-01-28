import { ServiceEmpleadoService } from './../service-empleado.service';
import { Component, EventEmitter, Output } from '@angular/core';

@Component({
  selector: 'app-caracteristicas-e',
  templateUrl: './caracteristicas-e.component.html',
  styleUrls: ['./caracteristicas-e.component.css']
})
export class CaracteristicasEComponent {

constructor(private miServicio:ServiceEmpleadoService){}

 @Output() caracteristicas= new EventEmitter<string>();

insertarCarac(value:string){
this.miServicio.mostrarMensaje(value);
this.caracteristicas.emit(value);
}

}
