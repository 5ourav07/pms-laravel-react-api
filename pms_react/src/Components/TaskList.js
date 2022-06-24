import React from 'react';
import axios from 'axios';
import { useState, useEffect } from 'react';

const TaskList = () => {

    const [post, setPost] = useState([]);

    useEffect(function () {
        axios.get("http://127.0.0.1:8000/api/task/show").then(function (rsp) {
            setPost(rsp.data.task);
        }, function (err) { });
    }, []);

    return (
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Tasks List From PMS_Head Project</h3>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Deadline Date</th>
                                    <th>Deadline Time</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {
                                    post.map(p => (
                                        <tr>
                                            <td>{p.task_name}</td>
                                            <td>{p.type}</td>
                                            <td>{p.deadline_date}</td>
                                            <td>{p.deadline_time}</td>
                                            <td>{p.task_dis}</td>
                                            <td>{p.status}</td>
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
export default TaskList;