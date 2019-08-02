import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { AuthService } from '../../services/auth.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  login: FormGroup
  constructor(public builder: FormBuilder, public auth: AuthService) {
    this.login = this.builder.group({
      email: [null, [Validators.required, Validators.email]],
      password: [null, [Validators.required, Validators.minLength(6)]]
    })
  }

  ngOnInit() {
  }

  onSubmit(login) {
    console.log(login.value)
    this.auth.login(login.value).subscribe((res) => {
      console.log(res);
    });
  }
}
