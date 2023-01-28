import { Error404Component } from './error404/error404.component';
import { Routes, RouterModule } from '@angular/router';
import { EmpleadoService } from './empleado.service';
import { ServiceEmpleadoService } from './service-empleado.service';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { ListaEmpleadosComponent } from './lista-empleados/lista-empleados.component';
import { CaracteristicasEComponent } from './caracteristicas-e/caracteristicas-e.component';
import { HomeComponent } from './home/home.component';
import { ProyectosComponent } from './proyectos/proyectos.component';
import { QuienesComponent } from './quienes/quienes.component';
import { ContactoComponent } from './contacto/contacto.component';
import { ActualizaComponentComponent } from './actualiza-component/actualiza-component.component';
import { EducacionComponent } from './educacion/educacion.component';
import { ExpLaboralComponent } from './exp-laboral/exp-laboral.component';

const appRouter:Routes=[
{path:"", component:HomeComponent},
{path:"Proyectos", component:ProyectosComponent},
{path:"Quienes", component:QuienesComponent},
{path:"Contacto", component:ContactoComponent},
{path:"Actualizar/:id", component:ActualizaComponentComponent},
{path:"**", component:Error404Component}

]

@NgModule({
  declarations: [
    AppComponent,
    ListaEmpleadosComponent,
    CaracteristicasEComponent,
    HomeComponent,
    ProyectosComponent,
    QuienesComponent,
    ContactoComponent,
    ActualizaComponentComponent,
    Error404Component,
    EducacionComponent,
    ExpLaboralComponent
  ],
  imports: [
    BrowserModule, 
    FormsModule,
    RouterModule.forRoot(appRouter)
  ],
  providers: [ServiceEmpleadoService, EmpleadoService],
  bootstrap: [AppComponent]
})
export class AppModule { }
