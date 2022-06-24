import React from 'react'
import axios from 'axios';
import { useState, useEffect } from 'react';

export default function ContactUs() {
    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [message, setMessage] = useState("");

    const handleForm = (e) => {
        e.preventDefault();
        var st = { name: name, email: email, message: message };
        axios.post("http://127.0.0.1:8000/api/email", st).then((rsp) => {
            alert('Message Send Successful');
            window.location.replace('/home');
        })
            .catch((error) => {
                alert('Message Not Send');
            });
    }

    return (
        <div>
            <section className="content-header">
                <div className="container-fluid">
                    <div className="row mb-2">
                        <div className="col-sm-6">
                            <h1>Contact Us</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section className="content">
                <div className="card">
                    <div className="card-body row">
                        <div className="col-5 text-center d-flex align-items-center justify-content-center">
                            <div>
                                <h2><strong>Project Management System</strong></h2>
                                <p className="lead mb-5">PMS</p>
                            </div>
                        </div>
                        <form onSubmit={handleForm}>
                            <div className="col-7">
                                <div className="form-group">
                                    <label htmlFor="inputName">Name</label>
                                    <input type="text" className="form-control" value={name} onChange={(e) => { setName(e.target.value) }} />
                                </div>
                                <div className="form-group">
                                    <label htmlFor="inputEmail">E-Mail</label>
                                    <input type="email" className="form-control" value={email} onChange={(e) => { setEmail(e.target.value) }} />
                                </div>
                                {/* <div className="form-group">
                                            <label htmlFor="inputSubject">Subject</label>
                                            <input type="text" className="form-control" value={name} onChange={(e) => { setName(e.target.value) }} />
                                        </div> */}
                                <div className="form-group">
                                    <label htmlFor="inputMessage">Message</label>
                                    <textarea className="form-control" rows={4} value={message} onChange={(e) => { setMessage(e.target.value) }} />
                                </div>
                                <div className="form-group">
                                    <input type="submit" className="btn btn-primary" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    )
}