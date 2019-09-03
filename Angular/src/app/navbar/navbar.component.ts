import { Component, OnInit } from '@angular/core';
import { normalizeGenFileSuffix } from '@angular/compiler/src/aot/util';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})


export class NavbarComponent implements OnInit {

  navBarState: boolean = false;


  constructor() {}
  
  //Funcao para alterar a expansao da side navbar entre aberto e fechado.//
  SwitchNavBarState(){
    this.navBarState = !this.navBarState;
    
    //console.log(this.navBarState);
  }

  ngOnInit() {
    //console.log(this.navBarState)
  }

}
