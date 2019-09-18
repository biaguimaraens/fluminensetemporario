import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { LoginComponent } from './pages/login/login.component';
import { AtividadeComponent } from './pages/atividade/atividade.component';
import { NavbarComponent } from './navbar/navbar.component';

const appRoutes: Routes = [

  { path: 'login', component: LoginComponent},
  { path: '', redirectTo: '/login', pathMatch: 'full' },
  { path: 'atividade', component: AtividadeComponent }

];

@NgModule({
  imports: [RouterModule.forRoot(appRoutes)],
  exports: [RouterModule]
})
export class AppRoutingModule {

}