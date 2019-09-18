import { Injectable } from '@angular/core';
import { Observable, of } from 'rxjs';
import { HttpClient } from '@angular/common/http';


@Injectable({
  providedIn: 'root'
})
export class AuthService {

  apiUrl: string = 'http://localhost:8000/api/';
  httpHeaders: any = {
      headers: { 
              'Content-Type':  'application/json',
              'Accept': 'application/json'
      } 
  }

  constructor(public http: HttpClient) { }

  public login(user): Observable<any> {
    return this.http.post(
      this.apiUrl + 'login',
      {
        email: user.email,
        password: user.password
      }, 
      this.httpHeaders);
  }

  //public register(user): Observable<any> {
    // return this.http.post(this.apiUrl + 'register',{
    //   name: user.name,
    //   email: user.email,
    //   password: user.password,
    //   c_password: user.c_password
    // })
    //return of(this.DELETDIS)
}

