import axios from "axios";
import { useState, useEffect } from "react";

const Dashboard = () => {

  const [usercount, setUserCount] = useState({});
  const [projectcount, setProjectCount] = useState({});
  const [taskcount, setTaskCount] = useState({});

  useEffect(function(){
    axios.get("http://127.0.0.1:8000/api/usercount").then(function(rsp){
      setUserCount(rsp.data);
    }, function(err){

    });
  },[]);

  useEffect(function(){
    axios.get("http://127.0.0.1:8000/api/projectcount").then(function(rsp){
      setProjectCount(rsp.data);
    }, function(err){

    });
  },[]);

  useEffect(function(){
    axios.get("http://127.0.0.1:8000/api/taskcount").then(function(rsp){
      setTaskCount(rsp.data);
    }, function(err){

    });
  },[]);

  return (
    <div>
      <div className="content-wrapper">
        <div className="content-header">
          <div className="container-fluid">
            <div className="row mb-2">
              <div className="col-sm-6">
                <h1 className="m-0 text-dark">Dashboard</h1>
              </div>
              {/* <div className="col-sm-6">
                  <ol className="breadcrumb float-sm-right">
                    <li className="breadcrumb-item"><a href='./home'>Home</a></li>
                  </ol>
                </div> */}
            </div>
          </div>
        </div>

        <section className="content">
          <div className="container-fluid">
            {/* Small boxes (Stat box) */}
            <div className="row">
              <div className="col-lg-3 col-6">
                {/* small box */}
                <div className="small-box bg-info">
                  <div className="inner">
                    <h3>{projectcount.data}</h3>
                    <p>Total Projects</p>
                  </div>
                  <div className="icon">
                    <i className="nav-icon fas fa-chart-pie" />
                  </div>
                </div>
              </div>
              <div className="col-lg-3 col-6">
                {/* small box */}
                <div className="small-box bg-success">
                  <div className="inner">
                    <h3>{taskcount.data}</h3>
                    <p>Total Tasks</p>
                  </div>
                  <div className="icon">
                    <i className="nav-icon fas fa-table" />
                  </div>
                </div>
              </div>
              <div className="col-lg-3 col-6">
                {/* small box */}
                <div className="small-box bg-warning">
                  <div className="inner">
                    <h3>{usercount.data}</h3>
                    <p>Total Users</p>
                  </div>
                  <div className="icon">
                    <i className="nav-icon fas fa-copy" />
                  </div>
                </div>
              </div>
              <div className="col-lg-3 col-6">
                {/* small box */}
                <div className="small-box bg-danger">
                  <div className="inner">
                    <h3>0</h3>
                    <p>New Users</p>
                  </div>
                  <div className="icon">
                    <i className="ion ion-person-add" />
                  </div>
                </div>
              </div>
            </div>
            {/* /.row (main row) */}
          </div>{/* /.container-fluid */}
        </section>
        {/* /.content */}
      </div>
    </div>
  )

}
export default Dashboard;