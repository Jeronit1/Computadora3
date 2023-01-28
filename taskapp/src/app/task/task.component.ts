import { TaskService } from './../service/task.service';

import { task } from './../task';
import { Component } from '@angular/core';

@Component({
  selector: 'app-task',
  templateUrl: './task.component.html',
  styleUrls: ['./task.component.css']
})
export class TaskComponent {
constructor(private mytasks:TaskService){
  this.mytasks.getTasks().subscribe(tasks=>{
    this.tasks=tasks
  })
}

tasks:task[]=[];


}
