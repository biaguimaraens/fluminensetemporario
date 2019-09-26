import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DetalheTreinoComponent } from './detalhe-treino.component';

describe('DetalheTreinoComponent', () => {
  let component: DetalheTreinoComponent;
  let fixture: ComponentFixture<DetalheTreinoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DetalheTreinoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DetalheTreinoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
