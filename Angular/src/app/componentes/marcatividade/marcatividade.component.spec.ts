import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MarcatividadeComponent } from './marcatividade.component';

describe('MarcatividadeComponent', () => {
  let component: MarcatividadeComponent;
  let fixture: ComponentFixture<MarcatividadeComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MarcatividadeComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MarcatividadeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
