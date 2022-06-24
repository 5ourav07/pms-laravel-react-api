import React from 'react'

export default function Profile() {
    return (
        <div className="container-fluid">
            <div className="col-lg-6">
                <div className="card-style settings-card-2 mb-30">
                    <div className="title mb-30">
                        <h6>My Profile</h6>
                    </div>
                    <div className="row">
                        <div className="col-12">
                            <div className="input-style-1">
                                <label>Full Name</label>
                                <input type="hidden" />
                                <input type="text" placeholder="Full Name" />
                            </div>
                        </div>
                        <div className="input-style-1">
                            <label>Email</label>
                            <input type="email" disabled placeholder="Email" />
                        </div>
                    </div>
                    <div className="col-12">
                        <div className="input-style-1">
                            <label>Phone</label>
                            <input type="text" placeholder="Phone" />
                        </div>
                    </div>
                    <div className="col-12">
                        <div className="input-style-1">
                            <label>Address</label>
                            <input type="text" placeholder="Address" />
                        </div>
                    </div>
                    <div className="col-12">
                        <div className="input-style-1">
                            <label>Password</label>
                            <input type="password" placeholder="Password" />
                        </div>
                    </div>
                    <div className="col-12">
                        <button className="main-btn primary-btn btn-hover">
                            Update Profile
                        </button>
                    </div>
                </div>
            </div>
        </div>
    )
}
