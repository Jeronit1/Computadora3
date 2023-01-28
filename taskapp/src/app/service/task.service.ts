import { Task } from './../mosck-task';
import { task } from './../task';
import { Injectable } from '@angular/core';
import { Observable, of } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class TaskService {

  private apiUrl="http://localhost:3000/tasks"

  constructor(private http:HttpClient) { }

  getTasks(): Observable <task[]>{
    return this.http.get<task[]>(this.apiUrl)
  }
}
