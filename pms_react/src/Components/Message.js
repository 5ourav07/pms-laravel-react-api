import React from 'react';
import axios from 'axios';
import { useState } from "react";

export default function Message() {
    const [sender_id, setSenderID] = useState("");
    const [rcver, setReceiver] = useState("");
    const [message, setMessage] = useState("");
    const [file, setFile] = useState("");

    const handleForm = (e) => {
        e.preventDefault();
        var st = { sender_id: sender_id, receiver: rcver, message: message, attachment: file };
        axios.post("http://127.0.0.1:8000/api/message", st).then((rsp) => {
            alert('Message Send Successful');
            window.location.replace('/home');
        })
            .catch((error) => {
                alert('Message Not Send');
            });
    }

    return (
        <div className="card-style mb-30">
            <form onSubmit={handleForm}>
                <h6 className="mb-25">Send Message</h6>
                <div className="select-style-1">
                    <input type="hidden" value={sender_id} onChange={(e) => { setSenderID(e.target.value) }} />
                    <label>To</label>
                    <div className="select-position">
                        <select value={rcver} onChange={(e) => { setReceiver(e.target.value) }}>
                            <option selected disabled>Select Receiver</option>
                            <option value="Admin">Admin</option>
                            <option value="Head">Head</option>
                            <option value="Lead">Lead</option>
                            <option value="Member">Member</option>
                        </select>
                    </div>
                </div>
                <div className="card-style mb-30">
                    <div className="input-style-1">
                        <label>Message</label>
                        <textarea placeholder="Message" rows={5} value={message} onChange={(e) => { setMessage(e.target.value) }} />
                    </div>
                    <div className="input-style-1">
                        <label>Attachment</label>
                        <input type="file" value={file} onChange={(e) => { setFile(e.target.value) }} />
                    </div>
                </div>
                <div className="input-style-1">
                    <button className="main-btn primary-btn btn-hover w-80 text-center" type="submit" value="Create">Send</button>
                </div>
            </form>
        </div>
    )
}
