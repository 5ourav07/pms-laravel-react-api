import React from 'react'
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Dashboard from './Dashboard';
import NoPage from './NoPage';
import Login from './Login'
import Registration from './Registration'
import Logout from './Logout';
import AllUser from './AllUser'
import ProjectList from './ProjectList'
import TaskList from './TaskList'
import Message from './Message'
import ContactUs from './ContactUs'
import CreateUser from './CreateUser';
import CreateProject from './CreateProject';
import CreateTask from './CreateTask';
import Profile from './Profile';

const Header = () => {
    if (localStorage.getItem('userid')) {
        return (
            <div>
                <BrowserRouter>
                    <Routes>
                        <Route path='/home' element={<Dashboard></Dashboard>}></Route>
                        <Route path='/createuser' element={<CreateUser></CreateUser>}></Route>
                        <Route path='/alluser' element={<AllUser></AllUser>}></Route>
                        <Route path='/createproject' element={<CreateProject></CreateProject>}></Route>
                        <Route path='/projectlist' element={<ProjectList></ProjectList>}></Route>
                        <Route path='/createtask' element={<CreateTask></CreateTask>}></Route>
                        <Route path='/tasklist' element={<TaskList></TaskList>}></Route>
                        <Route path='/message' element={<Message></Message>}></Route>
                        <Route path='/profile' element={<Profile></Profile>}></Route>
                        <Route path='/contactus' element={<ContactUs></ContactUs>}></Route>
                        <Route path='/logout' element={<Logout></Logout>}></Route>
                    </Routes>
                </BrowserRouter>
            </div>
        );
    }
    else {
        return (
            <BrowserRouter>
                <Routes>
                    <Route index element={<Login></Login>} />
                    <Route path='/registration' element={<Registration></Registration>}></Route>
                    <Route path='*' element={<NoPage />} />
                </Routes>
            </BrowserRouter>
        );
    }
};

export default Header;