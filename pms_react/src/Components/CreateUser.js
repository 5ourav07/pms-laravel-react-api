import React from 'react'
import axios from 'axios';
import { useState } from "react";

export default function CreateUser() {
    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [phone, setPhone] = useState("");
    const [address, setAddress] = useState("");
    const [position, setPosition] = useState("");

    const handleForm = (e) => {
        e.preventDefault();
        var st = { name: name, email: email, password: password, phone: phone, address: address, positions: position };
        axios.post("http://127.0.0.1:8000/api/user/add", st).then((rsp) => {
            alert('User Added Successfully');
            window.location.replace('/alluser');
        })
            .catch((error) => {
                alert('Not Successful');
            });
    }

    return (
        <div className="signup-wrapper">
            <div className="form-wrapper">
                <form onSubmit={handleForm}>
                    <div className="row d-flex justify-content-center flex-wrap">
                        <div className="col-5">
                            <div className="input-style-1">
                                <label>Name</label>
                                <input type="text" placeholder="Name" value={name} onChange={(e) => { setName(e.target.value) }} />
                            </div>
                        </div>
                        <div className="col-5">
                            <div className="input-style-1">
                                <label>Email</label>
                                <input type="email" placeholder="Email" value={email} onChange={(e) => { setEmail(e.target.value) }} />
                            </div>
                        </div>
                        <div className="col-5">
                            <div className="input-style-1">
                                <label>Password</label>
                                <input type="password" placeholder="Password" value={password} onChange={(e) => { setPassword(e.target.value) }} />
                            </div>
                        </div>
                        <div className="col-5">
                            <div className="input-style-1">
                                <label>Phone</label>
                                <input type="text" placeholder="Phone Number" value={phone} onChange={(e) => { setPhone(e.target.value) }} />
                            </div>
                        </div>
                        <div className="col-10">
                            <div className="input-style-1">
                                <label>Address</label>
                                <textarea placeholder="Address" value={address} onChange={(e) => { setAddress(e.target.value) }} />
                            </div>
                        </div>
                        <div className="col-10 select-style-1">
                            <label>Choose Role</label>
                            <div className="select-position">
                                <select value={position} onChange={(e) => { setPosition(e.target.value) }} >
                                    <option selected disabled>Choose Role</option>
                                    <option value="Head">Head</option>
                                    <option value="Lead">Lead</option>
                                    <option value="User">User</option>
                                </select>
                            </div>
                        </div>

                        <div className="col-12">
                            <div className="button-group d-flex justify-content-center flex-wrap">
                                <button className="main-btn primary-btn btn-hover w-80 text-center">
                                    Create
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    )
}
