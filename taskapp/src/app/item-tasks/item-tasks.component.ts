import { Task } from './../mosck-task';
import { task } from './../task';
import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-item-tasks',
  templateUrl: './item-tasks.component.html',
  styleUrls: ['./item-tasks.component.css']
})
export class ItemTasksComponent {
@Input() task:task=Task[0];
}
