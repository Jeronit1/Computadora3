import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent {
nombre:string="Jeronimo";
apellido:string="Pourtau Fleischmacher";
edad:number=18;
inforacion:string="Termine la secuendaria, actualmente estudiando en la universidad la carrera de ingenieria en sistemas los titulos que tengo son: Certificado de experto en Social & Community manager, Máster en Marketing Digital y Analítica Web";
}
