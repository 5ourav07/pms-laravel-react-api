import React from 'react'

export default function CreateProject() {
    return (
        <section className="tab-components">
            <div className="container-fluid">
                <div className="title-wrapper pt-30">
                    <div className="row align-items-center">
                        <div className="col-md-6">
                            <div className="title mb-30">
                                <h2>Create Project</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <form>
                    <div className="form-elements-wrapper">
                        <div className="row">
                            <div className="col-lg-6">
                                <div className="card-style mb-30">
                                    <div className="input-style-1">
                                        <input type="text" placeholder="Project Name" />
                                    </div>
                                    <div className="select-style-1">
                                        <div className="select-position">
                                            <select>
                                                <option selected disabled>Select Project Type</option>
                                                <option value="Education">Education</option>
                                                <option value="Business">Business</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="IT">IT</option>
                                                <option value="Software">Software</option>
                                                <option value="Personal">Personal</option>
                                                <option value="Design">Design</option>
                                                <option value="Engineering">Engineering</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div className="select-style-2">
                                        <div className="select-position">
                                            <select>
                                                <option selected disabled>Select Project Duration</option>
                                                <option value="One">One Month</option>
                                                <option value="Two">Two Month</option>
                                                <option value="Three">Three Month</option>
                                                <option value="More">More than three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div className="card-style mb-30">
                                        <div className="input-style-1">
                                            <label>Project Discription</label>
                                            <textarea placeholder="Discription" rows={5} />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-6">
                                <div className="card-style mb-30">
                                    <h6 className="mb-25">Select Project Member</h6>
                                    <div className="select-style-1">
                                        <div className="select-position">
                                            <select className="selectpicker">
                                                <option selected disabled>Project Member One</option>
                                                @foreach ($member as $m)
                                                <option value="{{$m->id}}">{'{'}{'{'}$m-&gt;name{'}'}{'}'}</option>
                                                @endforeach
                                            </select>

                                            <select className="selectpicker">
                                                <option selected disabled>Project Member Two</option>
                                                @foreach ($member as $m)
                                                <option value="{{$m->id}}">{'{'}{'{'}$m-&gt;name{'}'}{'}'}</option>
                                                @endforeach
                                            </select>

                                            <select className="selectpicker">
                                                <option selected disabled>Project Member Three</option>
                                                @foreach ($member as $m)
                                                <option value="{{$m->id}}">{'{'}{'{'}$m-&gt;name{'}'}{'}'}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <h6 className="mb-25">Attachment</h6>
                                    <div className="form-check checkbox-style checkbox-danger mb-20">
                                        <input type="file" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="button-group d-flex justify-content-center flex-wrap">
                            <button className="main-btn primary-btn btn-hover w-80 text-center">
                                Create Project
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    )
}
