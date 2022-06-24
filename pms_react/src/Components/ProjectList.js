import React from 'react';
import axios from 'axios';
import { useState, useEffect } from 'react';

const ProjectList = () => {

    const [post, setPost] = useState([]);

    useEffect(function () {
        axios.get("http://127.0.0.1:8000/api/project/show").then(function (rsp) {
            setPost(rsp.data.project);
        }, function (err) { });
    }, []);

    return (
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Project List From PMS_Head Project</h3>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Duration</th>
                                    <th>description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {
                                    post.map(p => (
                                        <tr>
                                            <td>{p.title}</td>
                                            <td>{p.type}</td>
                                            <td>{p.status}</td>
                                            <td>{p.duration}</td>
                                            <td>{p.discription}</td>
                                            <td>
                                                <input type="submit" class="btn-sm success-btn btn-hover" value="Modify" />
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
export default ProjectList;