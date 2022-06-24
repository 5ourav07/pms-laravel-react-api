import React from 'react';
import axios from 'axios';
import { useState, useEffect } from 'react';

const Login = () => {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");

    useEffect(() => {
        if (localStorage.getItem('userid')) {
            window.location.replace('/home');
        }
    });

    const handleForm = (e) => {
        e.preventDefault();
        var st = { email: email, password: password };
        axios.post("http://127.0.0.1:8000/api/login", st).then((rsp) => {
            localStorage.setItem('userid', JSON.stringify(rsp.data.data.id));
            window.location.replace('/home');
        })
            .catch((error) => {
                alert('Login Not Successful');
            });
    }

    return (
        <div className="hold-transition login-page">
            <div className="login-box">
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <b>Project Management System</b>
                    </div>
                    <div className="card-body">
                        <p className="login-box-msg"><b>Sign In</b></p>
                        <form onSubmit={handleForm}>
                            <div className="input-group mb-3">
                                <input type="email" className="form-control" placeholder="Email" value={email} onChange={(e) => { setEmail(e.target.value) }} />
                                <div className="input-group-append">
                                    <div className="input-group-text">
                                        <span className="fas fa-envelope" />
                                    </div>
                                </div>
                            </div>
                            <div className="input-group mb-3">
                                <input type="password" className="form-control" placeholder="Password" value={password} onChange={(e) => { setPassword(e.target.value) }} />
                                <div className="input-group-append">
                                    <div className="input-group-text">
                                        <span className="fas fa-lock" />
                                    </div>
                                </div>
                            </div>
                            <div className="row">
                                <div className="col-8">
                                    <div className="icheck-primary">
                                        <input type="checkbox" id="remember" />
                                        <label htmlFor="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div className="col-4">
                                    <button type="submit" value="Login" className="btn btn-primary btn-block">Sign In</button>
                                </div>
                            </div>
                        </form>
                        <div className="social-auth-links text-center mb-3">
                            <p>- OR -</p>
                            <a href="test.html" className="btn btn-block btn-primary">
                                <i className="fab fa-facebook mr-2" /> Sign in Using Facebook
                            </a>
                            <a href="test.html" className="btn btn-block btn-danger">
                                <i className="fab fa-google-plus mr-2" /> Sign in Using Google+
                            </a>
                        </div>
                        <p className="mb-1">
                            <a href="#">Forget Password?</a>
                        </p>
                        <p className="mb-0">
                            <a href="/registration" className="text-center">Don't Have an Account?</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Login;