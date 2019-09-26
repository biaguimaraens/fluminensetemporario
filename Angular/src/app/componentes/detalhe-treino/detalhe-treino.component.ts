import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-detalhe-treino',
  templateUrl: './detalhe-treino.component.html',
  styleUrls: ['./detalhe-treino.component.css']
})
export class DetalheTreinoComponent implements OnInit {

  descricao: string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam volutpat vel neque sed laoreet. Sed consequat convallis egestas. Vivamus bibendum diam eu rhoncus sodales. Aliquam vel gravida odio, vel iaculis purus. Praesent ac dolor velit. Sed non tellus vitae mauris ultricies lobortis. Sed faucibus sagittis porttitor.';
  atividade: string = 'Treino Forte na Chuva';
  horario:  string = '9h às 12h';
  capa: string = '../../../assets/imgs/treino-força1.jpg';
  icone: string = '../../../assets/imgs/fisico.png';
  imagem: string = '../../../assets/imgs/card.png';
 
  numbers = [];
  tipos = [];

  constructor() { 
    for(let i=0; i<10; i++){
      this.numbers.push(this.imagem);
    }
    for(let i=0; i<2; i++){
      this.tipos.push(this.icone);
    }
  }

  ngOnInit() {
  }

}
