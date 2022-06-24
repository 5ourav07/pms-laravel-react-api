import React from 'react';
import axios from 'axios';
import { useState } from "react";

const Registration = () => {
    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [phone, setPhone] = useState("");
    const [address, setAddress] = useState("");

    const handleForm = (e) => {
        e.preventDefault();
        var st = { name: name, email: email, password: password, phone: phone, address: address };
        axios.post("http://127.0.0.1:8000/api/register/add", st).then((rsp) => {
            alert('Registration Successful');
            window.location.replace('/');
        })
            .catch((error) => {
                alert('Registration Not Successful');
            });
    }

    return (
        <div className="hold-transition register-page">
            <div className="register-box">
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <b>Project Management System</b>
                    </div>
                        <div className="card-body">
                            <p className="login-box-msg"><b>Sign Up</b></p>
                            <form onSubmit={handleForm}>
                                <div className="input-group mb-3">
                                    <input type="text" className="form-control" placeholder="Full Name" value={name} onChange={(e) => { setName(e.target.value) }} />
                                    <div className="input-group-append">
                                        <div className="input-group-text">
                                            <span className="fas fa-user" />
                                        </div>
                                    </div>
                                </div>
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
                                <div className="input-group mb-3">
                                    <input type="text" className="form-control" placeholder="Phone" value={phone} onChange={(e) => { setPhone(e.target.value) }} />
                                    <div className="input-group-append">
                                        <div className="input-group-text">
                                            <span className="fas fa-lock" />
                                        </div>
                                    </div>
                                </div>
                                <div className="input-group mb-3">
                                    <input type="text" className="form-control" placeholder="Address" value={address} onChange={(e) => { setAddress(e.target.value) }} />
                                    <div className="input-group-append">
                                        <div className="input-group-text">
                                            <span className="fas fa-lock" />
                                        </div>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-8">
                                        <div className="icheck-primary">
                                            <input type="checkbox" id="agreeTerms" name="terms" defaultValue="agree" />
                                            <label htmlFor="agreeTerms">
                                                I Agree to the <a href="#">Terms</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div className="col-4">
                                        <button type="submit" value="Create" className="btn btn-primary btn-block">Register</button>
                                    </div>
                                </div>
                            </form>
                            <div className="social-auth-links text-center">
                                <p>- OR -</p>
                                <a href="test.html" className="btn btn-block btn-primary">
                                    <i className="fab fa-facebook mr-2" />
                                    Sign Up Using Facebook
                                </a>
                                <a href="test.html" className="btn btn-block btn-danger">
                                    <i className="fab fa-google-plus mr-2" />
                                    Sign Up Using Google+
                                </a>
                            </div>
                            <a href="/" className="text-center">Already Registered?</a>
                        </div>
                </div>
            </div>
        </div>
    )
}
export default Registration;