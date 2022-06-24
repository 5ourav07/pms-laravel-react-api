import React from 'react';
import axios from 'axios';
import { useState, useEffect } from 'react';

const AllUSer = () => {

    const [post, setPost] = useState([]);

    useEffect(function () {
        axios.get("http://127.0.0.1:8000/api/user/show").then(function (rsp) {
            setPost(rsp.data.user);
        }, function (err) { });
    }, []);

    return (
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All User List From PMS_Head Project</h3>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {
                                    post.map(p => (
                                        <tr>
                                            <td>{p.name}</td>
                                            <td>{p.email}</td>
                                            <td>{p.phone}</td>
                                            <td>{p.address}</td>
                                            <td>{p.positions}</td>
                                            <td>
                                                <input type="submit" class="btn-sm success-btn btn-hover" value="Edit" />
                                            </td>
                                            <td>
                                                <input type="submit" class="btn-sm danger-btn btn-hover" value="Delete" />
                                            </td>
                                        </tr>
                                    ))
                                }
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    );
};
export default AllUSer;