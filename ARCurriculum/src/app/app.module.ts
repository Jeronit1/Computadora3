import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { ExpLaboralComponent } from './exp-laboral/exp-laboral.component';
import { EducacionComponent } from './educacion/educacion.component';

const AppRoter:Routes=[
  {path:"", component:HomeComponent}
]

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    ExpLaboralComponent,
    EducacionComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(AppRoter)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
