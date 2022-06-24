import React from 'react'

export default function CreateTask() {
    return (
        <form>
            <section className="tab-components">
                <div className="container-fluid">
                    <div className="title-wrapper pt-30">
                        <div className="row align-items-center">
                            <div className="col-md-6">
                                <div className="title mb-30">
                                    <h2>Create Task</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="form-elements-wrapper">
                        <div className="row">
                            <div className="col-lg-6">
                                <div className="card-style mb-30">
                                    <div className="input-style-1">
                                        <input type="text" placeholder="Task Name" />
                                    </div>
                                    <div className="select-style-1">
                                        <div className="select-position">
                                            <select>
                                                <option selected disabled>Select Task Type</option>
                                                <option value="Diagram">Draw Diagram</option>
                                                <option value="Script">Script</option>
                                                <option value="Doc">Documentation</option>
                                                <option value="Code">Coding</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div className="select-style-1">
                                        <div className="select-position">
                                            <select>
                                                <option selected disabled>Select Project Name</option>
                                                @foreach ($project as $p)
                                                <option value="{{$p->id}}">{'{'}{'{'}$p-&gt;title{'}'}{'}'}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div className="card-style mb-30">
                                        <div className="input-style-1">
                                            <label>Task Deadline</label>
                                            <div className="input-style-2">
                                                <input type="date" />
                                                <span className="icon"><i className="lni lni-chevron-down" /></span>
                                            </div>
                                            <div className="input-style-2">
                                                <input type="time" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-6">
                                <div className="card-style mb-30">
                                    <div className="input-style-1">
                                        <label>Project Discription</label>
                                        <textarea placeholder="Discription" rows={5} />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="button-group d-flex justify-content-center flex-wrap">
                        <button className="main-btn primary-btn btn-hover w-80 text-center">
                            Create Task
                        </button>
                    </div>
                </div>
            </section>
        </form>

    )
}
