import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { LoginComponent } from './pages/login/login.component';
import { AtividadeComponent } from './pages/atividade/atividade.component';
import { NavbarComponent } from './navbar/navbar.component';
import { MarcatividadeComponent } from './componentes/marcatividade/marcatividade.component';

const appRoutes: Routes = [

  { path: 'login', component: LoginComponent},
  { path: '', redirectTo: '/login', pathMatch: 'full' },
  { path: 'atividade', component: AtividadeComponent },
  { path: 'marcar', component:MarcatividadeComponent }

];

@NgModule({
  imports: [RouterModule.forRoot(appRoutes)],
  exports: [RouterModule]
})
export class AppRoutingModule {

}