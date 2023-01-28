import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CaracteristicasEComponent } from './caracteristicas-e.component';

describe('CaracteristicasEComponent', () => {
  let component: CaracteristicasEComponent;
  let fixture: ComponentFixture<CaracteristicasEComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CaracteristicasEComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CaracteristicasEComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
