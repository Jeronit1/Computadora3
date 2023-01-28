import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ItemTasksComponent } from './item-tasks.component';

describe('ItemTasksComponent', () => {
  let component: ItemTasksComponent;
  let fixture: ComponentFixture<ItemTasksComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ItemTasksComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ItemTasksComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
